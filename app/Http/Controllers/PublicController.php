<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home() {
        $articles = Article::all()->sortDesc();
        return view('welcome', compact('articles'));
    }

    public function contacts() {
        return view('contacts');
    }

    public function submit(Request $request){
        // dd($request->all());
        $email = $request -> email;
        $name = $request -> name;
        $body = $request -> body;
        $user = compact('name','email','body');
        Mail:: to ($email) -> send(new ContactMail($user));
        return redirect(route('homepage')) -> with('message', 'La tua mail e stata inviata');
    }

}
