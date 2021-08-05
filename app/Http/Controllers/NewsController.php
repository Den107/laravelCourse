<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news', [
            'news' => $this->newsList
        ]);
    }

    public function show(int $id)
    {
        return view('oneNews', [
            'id' => $id
        ]);
    }
}
