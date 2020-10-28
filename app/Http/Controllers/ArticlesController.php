<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Article;

class ArticlesController extends Controller {
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    	$articles = Article::all()->map(function($article){
            return [
                "id" => $article->id,
                "title" => $article->title,
                "body" => $article->body,
                "destroy_link" => route("articles.destroy", $article->id),
            ];
        });

        return Inertia::render("Article/Index", [
        	"articles" => $articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
    	return Inertia::render("Article/Create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $request->validate([
            "title" => "required",
            "body" => "required"
        ]);

    	$article = Article::create($request->all());
    	return redirect()->route("home");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */

    public function destroy(Article $article){
        //dd($article);
        $article->delete();
        return redirect()->route("articles.index")->setStatusCode(303); 
    }

}
