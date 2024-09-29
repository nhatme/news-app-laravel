<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $publishedNews = 7;
        $pendingNews = 10;
        $categories = 4;
        $roles = 3;
        $permissions = 10;

        return view('admin.dashboard.index', compact('publishedNews', 'pendingNews', 'categories', 'roles', 'permissions'));
    }
}
