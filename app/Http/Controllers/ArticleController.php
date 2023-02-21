<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(){
        return view('article.create');
    }

    public function store(ArticleRequest $request) {
        $article = Article::create (
            [
                'title' => $request ->input('title'),
                'homeprodu' => $request -> input('homeprodu'),
                'price' => $request -> input('price')
            ]
            );

        return redirect()->route('homepage')->with('message','Il tuo articolo e stato pubblicato');
    }
}
