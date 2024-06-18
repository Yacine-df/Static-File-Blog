<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Spatie\Sheets\Facades\Sheets;

class TagShowController extends Controller
{

    public function __invoke(string $tag)
    {

        $posts = Sheets::collection('posts')
                        ->all()
                        ->filter(fn (Post $post) => in_array($tag, $post->tags));

        abort_if($posts->isEmpty(), 404);

        return view('posts.index', compact('posts'));
    }
}
