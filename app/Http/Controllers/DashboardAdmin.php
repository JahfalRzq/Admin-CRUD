<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Views;
use App\Models\Share;
use App\Models\LikeDislike;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
    

class DashboardAdmin extends Controller
{

    public function index()
    {
        $article_published = Article::where('status', 'published')->count();
        $article_view = Article::where('status', 'published')->get();
        $top_article = Article::where('status', 'published')->orderBy('view', 'DESC')->take(6)->get();
        $like_article = LikeDislike::get();
        $count_share  = Share::get();


        // set up today and a week ago
        $today = Carbon::today()->now();
        $weekAgo = Carbon::today()->subDays(7);
        $Carbons = Carbon::today()->subDays(7);

        // echo $today;
        // return;

        // return $weekAgo;

        
        //filter view for today to a week ago
        $like_stats = LikeDislike::where('is_liked', 1)
                       ->whereBetween('created_at',[$weekAgo,$today])
                       ->groupBy(\DB::raw("DATE(created_at)"))
                       ->selectRaw("DATE(created_at) as date,count(*) as count")
                       ->get();
                    //    return $like_stats;


                       //parsing data to chart js
                        $date = [];
                        $stats =[];
                        foreach ($like_stats as $like ){
                            
                            array_push($date, date('d-D',strtotime($like->date)) );
                            array_push($stats, $like->count );
                            
                        }
                        $date = json_encode($date);
                        $stats = json_encode($stats);
                        // return $stats;
                        // return $date;


                        //parsing view stats to chart js
                        $view_stats = DB::table('views')
                        ->selectRaw("DATE(created_at) as date,SUM(view_stats) as count")
                        ->whereBetween('created_at',[$weekAgo,$today])
                        ->groupBy(\DB::raw("DATE(created_at)"))
                        ->get();
                        //  return $view_stats;


                        $v_stats = [];

                        foreach($view_stats as $vs){
                            array_push($v_stats, $vs->count);
                        }
                        $v_stats = json_encode($v_stats);
                        // return $v_stats;

                        // return $view_stats;


                        

                        //article share statistic
                        $share_stats = DB::table('shares')
                        ->selectRaw("DATE(created_at) as date,SUM(share_stats) as count")
                        ->whereBetween('created_at',[$weekAgo,$today])
                        ->groupBy(\DB::raw("DATE(created_at)"))
                        ->get();

                        $s_stats = [];

                        foreach($share_stats as $ss){
                            array_push($s_stats, $ss->count);
                        }
                        $s_stats = json_encode($s_stats);
                        // return $s_stats;
                        
                    
                   

       
        
        

        return view('admin.dashboard-admin', compact('article_published', 'article_view', 'top_article','like_article','like_stats','date','stats','v_stats','s_stats','count_share'));
    }

    // public function like_stats($id){

    //     $liked = LikeDislike::where('is_liked',1)->where('article_id',$id)->firstOrFail()
    //     ->whereBetween('created_at',[$weekAgo,$today])
    //     ->groupBy(\DB::raw("DATE(created_at)"))
    //     ->selectRaw("DATE(created_at) as date,count(*) as count")
    //     ->get(); 
    //     // return $liked;

    //     //like article statistic
    //     $like_date = [];
    //     $like_stats = [];

    //     foreach ($liked as $like){

    //         array_push($like_date,date('d-D',strtotime($like->date)));
    //         array_push($like_stats,$like->count);
    //     }

    //     $like_date = json_encode($like_date);
    //     $like_stats = json_encode($like_stats);

    //     return view('livewire.components.admin.like-statistics',compact('like_date','like_stats'));
    // }


    

    // public function getArticleLike()
    // {
        
    //     $like_stats = LikeDislike::where('is_liked', 1)
    //                    ->whereBetween('created_at',[$today,$weekAgo])
    //                    ->groupBy(\DB::raw("DATE(created_at)"))
    //                    ->selectRaw("DATE(created_at) as date,count(*) as count")
    //                    ->get();

    //                    $data = [];
    //                    foreach ($likes as $like) {
    //                        $data[] = [
    //                            'date' => $like->date,
    //                            'count' => $like->count
    //                        ];
    //                    }
               
    //                    return response()->json($data);
    // }
    
}
