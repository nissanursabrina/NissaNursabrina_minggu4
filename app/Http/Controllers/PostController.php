<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function article($id){
        $article = Article::find($id);
        return view('article',['article'=> $article]);
    }       
}
