<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use App\Models\Views;
use App\Models\Share;
use App\Models\LikeDislike;
use App\Models\OnClick;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use File;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Pagination\CursorPaginator;
use Illuminate\Http\Response;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\DB;



class ArticleController extends Controller
{

    public function article(Request $request)
    {

        $article_search = Article::query();
        if ($request->filled('q')) {
            $article_search->where('title', 'like', '%'.$request->input('q').'%');
        }
        if ($request->filled('status')) {
            $article_search->where('status', $request->input('status'));
        }
        $search = $request->search;
        // $pagination = 4;
        // $users = User::paginate($pagination);
        $articles = Article::where('title', 'like', '%' . $search . '%')
            ->latest()->latest()->paginate(5)->withQueryString()->onEachSide(1);

        // $articles = Article::whereNotIn('status',["Reject"]);
        $total = Article::count();

        // $articles = $articles->latest()->paginate(5)->withQueryString()->onEachSide(1);

        return view('admin.article.article-admin',compact('articles','total','article_search','search',));
    }
    public function draft_article($slug){
        // $news = News::with('author')->where('slug', $slug)->first();

        $article_draft = Article::where('slug', $slug)->first();
        // $article_draft = Article::where('status',['Draft'])->get();
        return view('admin.article-status.detail-article-draft',compact('article_draft'));

    }
    public function onReview_article($id){
        $article_onReview = Article::findOrFail($id);
        // $article_draft = Article::where('status',['Draft'])->get();
        return view('admin.article-status.detail-article-onreview',compact('article_onReview'));

    }
    public function published_article($id){

        $article_published = Article::findOrFail($id);
        $user          = Auth::user();
        $article_views = Views::find($id);
        $article_share = Share::where('article_id',$article_published->id)->sum('share_stats');
        $view_sum      = Views::where('article_id',$article_published->id)->sum('view_stats');
        $like_sum      = LikeDislike::where('article_id',$article_published->id)->sum('is_liked');
        $click_sum     = OnClick::where('article_id',$article_published->id)->sum('click_stats');
        $get_id        = Article::find($id);

        


       
        $today = Carbon::today()->addDay();
        $weekAgo = Carbon::today()->subDays(7);

                 
        //Article like stats by ID
        $article_stats_like = LikeDislike::where('is_liked',1)->where('article_id',$get_id->id)
                  ->whereBetween('created_at',[$weekAgo,$today])
                  ->groupBy(\DB::raw("DATE(created_at)"))
                  ->selectRaw("DATE(created_at) as date,count(*) as count")
                  ->get();

                  $like_date = [];
                  $like_stats = [];

                  foreach ($article_stats_like as $like){

                    array_push($like_date,date('d-D',strtotime($like->date)));
                    array_push($like_stats,$like->count);
                  }

                  $like_date = json_encode($like_date);
                  $like_stats = json_encode($like_stats);

                //   return $like_date;


        
        //Article view stats by ID
        $article_stats_view = DB::table('views')->where('article_id',$get_id->id)
                  ->selectRaw("DATE(created_at) as date,SUM(view_stats) as count")
                  ->whereBetween('created_at',[$weekAgo,$today])
                  ->groupBy(\DB::raw("DATE(created_at)"))
                  ->get();

                  $view_date = [];
                  $view_stats = [];

                  foreach($article_stats_view as $view){
                    array_push($view_date,date('d-D',strtotime($view->date)));
                    array_push($view_stats,$view->count);
                  }

                  $view_date = json_encode($view_date);
                  $view_stats = json_encode($view_stats);





        //Article share stats by ID
        $article_stats_share = DB::table('shares')->where('article_id',$get_id->id)
                    ->selectRaw("DATE(created_at) as date,SUM(share_stats) as count")
                    ->whereBetween('created_at',[$weekAgo,$today])
                    ->groupBy(\DB::raw("DATE(created_at)"))
                    ->get();

                    $share_date = [];
                    $share_stats = [];

                    foreach($article_stats_share as $share){
                        array_push($share_date,date('d-D',strtotime($share->date)));
                        array_push($share_stats,$share->count);
                    }
                    // return $share_stats;


                    $share_date = json_encode($share_date);
                    $share_stats = json_encode($share_stats);

        
        //Article click stats by ID
        $article_stats_click = DB::table('on_clicks')->where('article_id',$get_id->id)
                    ->selectRaw("DATE(created_at) as date,SUM(click_stats) as count")
                    ->whereBetween('created_at',[$weekAgo,$today])
                    ->groupBy(\DB::raw("DATE(created_at)"))
                    ->get();

                    $click_date = [];
                    $click_stats = [];

                    foreach($article_stats_click as $click){
                        array_push($click_date,date('d-D',strtotime($click->date)));
                        array_push($click_stats,$click->count);
                    }

                    $click_date = json_encode($click_date);
                    $click_stats = json_encode($click_stats);

        



        return view('admin.article-status.detail-article',compact('article_published','user','article_views',
        'article_share','view_sum','like_sum','click_sum',
       'click_date','click_stats' ,'like_stats','like_date','view_date','view_stats','share_date','share_stats'));

    }
   

   
    public function feedback_article($id){
        $article_feedback = Article::findOrFail($id);
        // $article_draft = Article::where('status',['Draft'])->get();
        return view('admin.article-status.detail-article-feedback',compact('article_feedback'));

    }
    public function create_article()
    {
        return view('admin.create-article');
    }

    public function store_article(Request $request)
    {


        // dd($request->all());
        $user = Auth::user();
        $created_by = User::with('article')->where('id', $user->id)->first();
        $validator = Validator::make($request->all(), [

            // validat the comming data from the form
            'title'         => 'required',
            'description'   => 'required',
            'categories'    => 'required',
            'slug'          => 'required',
            'media'         => 'required|image|mimes:jpeg,png,jpg',
            'created_by'    => 'required',


        ]);

        $media = null;

        // if ($validator->fails()) {
        //     // return $this->errorResponse($validator->messages(), 401);
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        // dd($request->hasFile('foto'));

        if ($request->hasFile('media')) {
            $extFile = $request->media->getClientOriginalExtension();
            $namaFile = 'images-' . time() . "." . $extFile;
            $media = $request->media->move('images/', $namaFile);
        }

        // create new article object
        $dateS = Carbon::today()->format('Y-m-d');
        $article = new Article();
        $article->title             = $request->title;
        $article->slug = rand(100,999) . '-' . Str::slug($article->title);
        $article->description       = $request->description;
        $article->category        
          = $request->category;
        $article->media             = $media;
        $article->created_by        = Auth::user()->user_name;
        // dd($article);
        $article->save();


        //if create article on table article automaticly create view on table views
        $viewStats = new Views;
        $viewStats->article_id = $article->id;
        $viewStats->save();


        //if create article on table article automaticly create share on table share
        $shareStats = new share;
        $shareStats->article_id = $article->id;
        $shareStats->save();

        //if create article on table article automaticly create on_click on table onclick
        $onClickStats = new OnClick;
        $onClickStats->article_id = $article->id;
        $onClickStats->save();

        //if create article on table article automaticly create clickly on table share

        $arraycategory = collect($article->category)->flatten();
        return redirect('/article-user')->with('succes', 'Article Created');
    }

    public function edit_article($id)
    {
        $article = Article::find($id);
        return view('admin.edit-article', compact('article'))->with('article', $article);
    }

    public function update_article(Request $request, $id){
    $article = Article::findOrFail($id);
    $article->title = $request->title;
    $article->slug = rand(100, 999) . '-' . Str::slug($article->title);
    $article->description = $request->description;
    $article->category = $request->category;
    $article->category = $request->input('category');
    $path = $article->media;
        if ($request->hasFile('media')) {
            $extFile = $request->media->getClientOriginalExtension();
            $namaFile = 'images-' . time() . "." . $extFile;
            File::delete($article->media);
            $path = $request->media->move('images/', $namaFile);
        }
        $article->media = $path;
    // dd($article);
    $article->save();
    return redirect()->route('article');
    }

    // delete artikel
    public function delete_article($id)
    {
        $article = Article::findOrFail($id);
        $path = $article->image;
        if ($path !== 'images/new/ep_delete.svg'){
        }
        $article->delete();

        return redirect()->route('article');
    }

    public function insight_news(){

        $news = Article::where('status','Published')->get();
        // $click_stats = OnClick::
        // dd($news);

        return view('pages.insight.news',compact('news'));
    }

    // public function on_click($id){
        
    //     $article_onclick = OnClick::find($id);
    //     $article_onclick->click_stats += 1;
    //     $article_onclick->save();

    //     return response()->json(['success' =>true]);

        
    // }

    public function view_news(Article $article,$id){

        $article = Article::findOrFail($id);
        $article_tittle = $article->title;
        $addView = Article::find($id)->increment('view');
        $viewStats = Views::where('article_id', $article->id)
        ->increment('view_stats');
        

       //social media share
         $shareComponent = \Share::page(url('posting/'.$article->slug), null, ['class' => 'increement-button px-4 py-1 rounded-lg bg-gray-200 focus:bg-gray-300 w-full mt-2 truncate text-xs text-gray-40', 
         'id' => 'Article_news/'.$article->id , 'title' => $article_tittle, 'rel' => 'nofollow noopener noreferrer'])
         ->twitter()
         ->linkedin()
         ->facebook();
        // ->getRawLinks();

        // dd($shareComponent);
        
        
        
        
     

        return view('pages.insight.view-news',compact('article','viewStats','shareComponent'));
    }
    public function show($id){

        $article = Article::findOrFail($id);

        return view('pages.insight.view-news',compact('article'));


    }

    public function like_news($id){

        $article = Article::findOrFail($id);
        $like    = LikeDislike::where('article_id', $article->id)
        ->where('user_id', auth()->id())
        ->first();

    if ($like) {
        if ($like->is_liked == 1) {
            $like->is_liked = 0;
        } else {
            $like->is_liked = 1;
        }
    } else {
        $like = new LikeDislike();
        $like->article_id = $article->id;
        $like->user_id = auth()->id();
        $like->is_liked = 1;
    }
    $like->save();

    return back();

        }
    public function share_news($id){
        

        // DB::table('shares')->increment('share_stats');

        $article = Article::findOrFail($id);
        $article_share = Share::where('article_id',$article->id)->first();

        if($article_share){
            $article_share->share_stats = $article_share->share_stats + 1;
            $article_share->save();
        }else{
            $article_share = new Share();
            $article_share->article_id = $articleId->id;
            $article_share->share_stats = 1;
            $article_share->save(); 
        }
       
    
        return back()->withSuccess('Share Succesfully!');

    
      //increment all column
          

    }

    public function incrementShareStats($id){

      $article_share = Share::find($id);
      $article_share->share_stats += 1;
      $article_share->save(); 
       
      
      return response()->json(['success' => true]);

    }



   


}
