<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sheets\Facades\Sheets;

class PostsIndexController extends Controller
{

    public function __invoke(Request $request)
    {

        return view('posts.index', [

            'posts' => Sheets::collection('posts')->all()

        ]);
    }
}
