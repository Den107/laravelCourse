<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected array $newsList = [
        [
            'id' => 1,
            'title' => 'News 1',
            'description' => 'News 1',
            'category' => 'Auto'
        ],
        [
            'id' => 2,
            'title' => 'News 2',
            'description' => 'News 2',
            'category' => 'Code'
        ],
        [
            'id' => 3,
            'title' => 'News 3',
            'description' => 'News 3',
            'category' => 'Animals'
        ],
        [
            'id' => 4,
            'title' => 'News 4',
            'description' => 'News 4',
            'category' => 'Auto'
        ],
        [
            'id' => 5,
            'title' => 'News 5',
            'description' => 'News 5',
            'category' => 'Code'
        ],
        [
            'id' => 6,
            'title' => 'News 6',
            'description' => 'News 6',
            'category' => 'Animals'
        ],
        [
            'id' => 7,
            'title' => 'News 7',
            'description' => 'News 7',
            'category' => 'Auto'
        ],
        [
            'id' => 8,
            'title' => 'News 8',
            'description' => 'News 8',
            'category' => 'Code'
        ],
        [
            'id' => 9,
            'title' => 'News 9',
            'description' => 'News 9',
            'category' => 'Animals'
        ]
    ];

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
