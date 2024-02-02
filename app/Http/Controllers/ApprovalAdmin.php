<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class ApprovalAdmin extends Controller
{
    //get article to table aprove article
    public function approve(Request $request)
    {
        $search = $request->search;
        $articles = Article::where('title', 'like', '%' . $search . '%')
            ->whereIn('status',['Draft','On Review'])
            ->latest()->paginate(5)->withQueryString()->onEachSide(1);
        // $articles = Article::whereIn('status',['Draft','On Review'])->get();

        $approvalHistory = Article::whereIn('status',['Published','Reject'])->get();
        return view('admin.article.approval-admin', compact('articles','approvalHistory','search'));
    }


    //get article to view article on table aprove article
    public function detail_approve($id)
    {
        $article = Article::find($id);
        $article->update(['status' => 'On Review']);
        // dd($article);
        return view('admin.article.view-approval-article', compact('article'));
    }

    public function update_onreview($id)
    {
        $articles = Article::find($id)->update(['status' => "On Review"]);
        $article = Article::find($id);
        // dd($articles);

        // $article->reason  = $request->reason;
        // dd($article);
        // $article->save();


        // dd($article);
        return view('admin.article.view-approval-article', compact('article'));
    }

    //
    public function approve_article($article)
    {
        // dd($article);
        $article = Article::whereId($article)->update(['status' => "Published"]);
        // dd($article);
        // return view('admin.article.approval-admin', compact('article'));
        return redirect('/approve');
    }

    //
    public function rejected_article($article)
    {
        $article = Article::whereId($article)->update(['status' => "Reject"]);
        // return view('admin.article.approval-admin', compact('article'));
        return redirect('/approve');
    }

    //
    public function feedback_article(Request $request,$article)
    {
        $validator = Validator::make($request->all(),[
            'reason'      => 'required|string',
        ]);

        $article = Article::findOrFail($article);
        $article->reason   = $request->reason;
        $article->status   = 'Feedback';
        $article->save();
        return redirect('/approve');

        // $article = Article::whereId($article)->update(['status' => "Feedback"]);
        // return view('admin.article.approval-admin', compact('article'));
        return redirect('/approve');

    }
}

  


    

    // public function approval_history($article){
    // $articles = Article::where('status',['Published','Rejected','Feedback'])->get();
    // return view('livewire.components.admin.approval-history', compact('articles'));
    // }


    // to get article status on table approval history
//     public function aprrove_history()
//     {
//         $user = Auth::user();
//         $approval = User::with(['article'])
//             ->where('id', $user->id)
//             ->first();
//         $article_count = collect($approval->approval_article->article)->count();
//         $article_editor = collect($approval->approval_article->article)->flatten();

//         $reject = Article::where('status', 'Reject')
//             ->where(function ($q) use ($approval, $article_count) {
//                 $q->WhereJsonContains('article', $approval->article_editor->article[0]);

//                 for ($i = 1; $i < $article_count; $i++) {
//                     $q->orWhereJsonContains('article', $approval->article_editor->article[$i]);
//                 }
//             })
//             ->latset()
//             ->paginate();

//         $published = Article::where('status', 'published')
//             ->where(function ($q) use ($approval, $article_count) {
//                 $q->WhereJsonContains('article', $approval->article_editor->article[10]);

//                 for ($i = 1; $i < $article_count; $i++) {
//                     $q->orWhereJsonContains('article', $approval->article_editor->article[$i]);
//                 }
//             })
//             ->latset()
//             ->paginate(10);

//         $feedback = Article::class('status', 'published')
//             ->where(function ($q) use ($approval, $article_count) {
//                 $q->WhereJsonContains('article', $approval->article_editor->article[10]);

//                 for ($i = 1; $i < $article_count; $i++) {
//                     $q->orWhereJsonContains('article', $approval->article_editor->article[$i]);
//                 }
//             })
//             ->latest()
//             ->paginate();
//         return view('admin.article.view-approval-article', compact('reject', 'published', 'Feedback', 'Draft', 'On Review'));
//     }
// }
