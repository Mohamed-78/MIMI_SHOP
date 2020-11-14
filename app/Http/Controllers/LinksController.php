<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Echange;
use App\Models\Article;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Requests\EchangeFormRequest;

class LinksController extends Controller
{
     public function boutique()

    {   $article = Article::orderBy('id','DESC')->paginate(9);
        return view('pages.boutique',compact('article'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function rec()
    {
        return view('admin.rec');
    }

    public function echanges()
    {
        return view('pages.echanges');
    }

   public function cmde()
   {
        $cde = Echange::paginate(6);
        return view('admin.cmde',compact('cde'));
   }

     public function search()
    {
        //Utiliser les fonction request pour dire que le champ est requis
        $q = request()->input('q');

        $other = Article::take(4);

        $search = Article::where('titre','like',"%$q%")->orWhere('categories','like',"%$q%")->orWhere('description','like',"%$q%")->union($other)->paginate(10);

        // $search = $result->merge($otherArticle);

        return view('pages.search',compact('search'));
    }
}
