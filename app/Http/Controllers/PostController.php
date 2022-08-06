<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    /**
 * Post一覧を表示する
 * 
 * @param Post Postモデル
 * @return array Postモデルリスト
 */
public function index(Post $post)
{
    return $post->get();
}
}
