<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(Post $post) //インポートしたPostをインスタンス化して$postとして使用。
   {
       return $post->get();//getに対して$postの中身を返す処理
   }
}

 