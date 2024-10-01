<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $breaking_news = News::with(['category'])
            ->activeEntries()
            ->where('is_breaking_news', 1)
            ->orderBy('id', 'DESC')
            ->take(4)
            ->get();

        $recentNews = News::with(['category'])->activeEntries()->orderBy('id', 'DESC')->take(5)->get();
        // $mostViewedPost = News::activeEntries()->orderBy('views', 'DESC')->take(4)->get();

        return view('fe.home', compact('breaking_news', 'recentNews'));
    }
}
