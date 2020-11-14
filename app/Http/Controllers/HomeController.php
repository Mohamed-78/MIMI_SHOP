<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Contact;
use App\Models\Echange;
use Illuminate\Http\Request;
use Image as InterventionImage;
use MercurySeries\Flashy\Flashy;
use App\Http\Requests\ArticleFormRequest;

class HomeController extends Controller
{
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
		$article = Article::orderBy('id','DESC')->paginate(10);
		$message = Contact::all();
		$echange = Echange::all();
		$accessoires = Article::where('categories','Accessoires')->get();
		$vetement = Article::where('categories','Vêtement')->get();
		$chaussures = Article::where('categories','Chaussures')->get();
		return view('admin.index',compact('article','message','echange','accessoires','chaussures','vetement'));
	}

	public function edit($id)
	{
		$art = Article::findOrFail($id);
		return view('admin.ArticleEdit',compact('art'));
	}

	public function store(ArticleFormRequest $request)
	{
	  
		if ($request->hasFile('photo')) {
 
			$n2=0;
			foreach(request()->file('photo') as $img){
				
				$n2++;
				$PrincipalPhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

				$source = $img;
				$target = 'uploads/' .$PrincipalPhoto;


				InterventionImage::make($source)->fit(270, 320)->save($target);

			}
		}

		if ($request->hasFile('photos')) {

			$n2=0;
			$AutresPhotos = array();
			foreach(request()->file('photos') as $img){
				
				$n2++;
				$AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

				$source = $img;
				$target = 'uploads/' .$AutrePhoto;

				InterventionImage::make($source)->fit(270, 320)->save($target);
				array_push($AutresPhotos, $AutrePhoto);
			}
			$AutresPhotos = json_encode($AutresPhotos);
            
		}else{
			$AutresPhotos = null;
		}
	  
		$article = Article::create(['titre'=>$request->titre,'prix'=>$request->prix,'photo'=>$PrincipalPhoto,'photos'=>$AutresPhotos,'categories'=>$request->categories,
			'description'=>$request->description
		]);

		Flashy::message('Article enregistré avec succès');

		return redirect()->route('index');
	}

	public function update(Request $request, $id)

	{
		$request->validate([
			'titre'=> 'required',
			'prix'=> 'required',
			'description'=> 'required',
		]);

		$article = Article::findOrFail($id);
	 
	   if ($request->hasFile('photo')) {

			$n2=0;
			foreach(request()->file('photo') as $img){
				
				$n2++;
				$PrincipalPhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

				$source = $img;
				$target = 'uploads/' .$PrincipalPhoto;


				InterventionImage::make($source)->fit(270, 320)->save($target);
			}

		}else{
			$PrincipalPhoto = $article->photo;
		}

		if ($request->hasFile('photos')) {

			$n2=0;
			$Autrephotos = array();
				foreach(request()->file('photos') as $img){
					
					$n2++;
					$AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

					$source = $img;
					$target = 'uploads/' .$AutrePhoto;


					InterventionImage::make($source)->fit(270, 320)->save($target);
					array_push($Autrephotos, $AutrePhoto);
				}
			$Autrephotos = json_encode($Autrephotos);

		}else{
			$Autrephotos = $article->photos;
		}

		$article->update(['titre'=>$request->titre,'prix'=>$request->prix,'photo'=>$PrincipalPhoto,'photos'=>$Autrephotos,'categories'=>$request->categories,'description'=>$request->description
		]);

		Flashy::message('Article modifié avec succès');

		return redirect()->route('index');

	}

    public function destroy($id)
    {
        Article::destroy($id);

        flashy::message('Article supprimé avec succès!');

        return redirect()->route('index');
    }

    
}
