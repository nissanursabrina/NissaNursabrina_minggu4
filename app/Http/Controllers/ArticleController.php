<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article($id){
        $article = Article::find($id);
        return view('article',['article' => $article]);
    }
}
