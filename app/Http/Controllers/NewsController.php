<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $newsList = News::select(News::$allowedFields)->get();
        return view('news', [
            'news' => $newsList
        ]);
    }

    public function show(int $id)
    {
        return view('oneNews', [
            'id' => $id
        ]);
    }
}
