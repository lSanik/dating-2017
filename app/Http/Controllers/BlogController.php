<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostTranslation;

class BlogController extends Controller
{
    /**
     * @return mixed
     */
    public function all()
    {
        $posts = \DB::table('posts')
            ->select('posts.id', 'cover_image', 'title', 'body')
            ->join('post_translation', 'posts.id', '=', 'post_translation.post_id')
            ->where('locale', '=', \App::getLocale())
            ->paginate(10);

        return view('client.blog.all')->with([
            'posts' => $posts,
        ]);
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function post($id)
    {
        $post = \DB::table('posts')
            ->select('posts.id', 'cover_image', 'title', 'body')
            ->join('post_translation', 'posts.id', '=', 'post_translation.post_id')
            ->where('locale', '=', \App::getLocale())
            ->where('posts.id', '=', $id)
            ->get();

        return view('client.blog.post')->with([
            'post' => $post,
        ]);
    }
}
