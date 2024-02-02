<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\LikeDislike;
use Carbon\Carbon;
use App\Models\Views;
use App\Models\Share;
use Illuminate\Support\Facades\DB;


// use Illuminate\Support\Facades\DB;

class StatisticController extends Controller
{
    //
    public function index(){
        $totalArticle = Article::where('status', 'published')->count();
        $totalView = Article::where('status', 'published')->get();
        $topArticle = Article::where('status', 'published')->orderBy('view', 'DESC')->get();
        $like_article = LikeDislike::get();
        $count_share  = Share::get();



        //group by today and aweekAgo
        $today = Carbon::today()->now();
        $weekAgo = Carbon::today()->subDays(7);
        $carbons = Carbon::today()->subDays(7);

        //like stats
        $liked_stats = LikeDislike::where('is_liked',1)
        ->whereBetween('created_at',[$weekAgo,$today])
        ->groupBy(\DB::raw("DATE(created_at)"))
        ->selectRaw("DATE(created_at) as date,count(*) as count")
        ->get();

        $date = [];
        $stats = [];
        
        foreach ($liked_stats as $like){

            array_push($date,date('d-D',strtotime($like->date)));
            array_push($stats, $like->count);
        }

        $date = json_encode($date);
        $stats = json_encode($stats);
        // return $stats;

        //view statistic
        // $view_stats = DB::table('views')
        // ->select(DB::raw('date(created_at) as date'), DB::raw('sum(view_stats) as view_stats '))
        // ->whereBetween('created_at',[$weekAgo,$today])
        // ->groupBy('date')
        // ->get();

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

        return view('admin.article.statistic-admin',compact('totalArticle','totalView','topArticle','like_article','date','stats','v_stats','s_stats','count_share'));
    }

}
