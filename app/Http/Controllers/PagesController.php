<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Actualite;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function accueil()
    {

        $accessoires = Article::orderBy('id','DESC')->where('categories','Accessoires')->take(4)->get();
        $vetement = Article::orderBy('id','DESC')->where('categories','Vêtement')->take(4)->get();
        $chaussures = Article::orderBy('id','DESC')->where('categories','Chaussures')->take(4)->get();
        $actualite = Actualite::take(3)->get();
        return view('pages.accueil',compact('accessoires','chaussures','vetement','actualite'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        $chaussures = Article::inRandomOrder()->take(4)->get();
        return view('pages.BoutiqueShow',compact('article','chaussures'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
