<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('details');
    }

    public function create(){
        return view('article.create');
    }

    public function store(ArticleRequest $request) {
        $article = Article::create (
            [
                'title' => $request ->input('title'),
                'homeprodu' => $request -> input('homeprodu'),
                'description' => $request -> input('description')
            ]
            );

        return redirect()->route('homepage')->with('message','Il tuo articolo e stato pubblicato');
    }

    public function details($title){
        $article = Article::where('title',$title)->first();
        return view('article/detail', compact('article'));
    }

    public function update(Article $article){
        return view('article/update',compact('article'));
    }

    public function edit(Request $request, Article $article){
        $article->title=$request->title;
        $article->homeprodu=$request->homeprodu;
        $article->description=$request->description;
        $article->save();
        return redirect(route('homepage', compact('article')))->with('message','Il tuo articolo e stato modificato');
    }

    public function destroy(Article $article){
        $article->delete();
        return redirect(route('homepage'))->with('message','Il tuo articolo e stato eliminato');
    }
}
