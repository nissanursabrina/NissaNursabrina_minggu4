<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $article = Article::all();
        return view('home', ['article' => $article]);
    }
}
