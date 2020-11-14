<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;
use Image as InterventionImage;
use MercurySeries\Flashy\Flashy;
use App\Http\Requests\ActualiteFormRequest;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function actuality()
    {
        $actualites = Actualite::paginate(2);
        return view('admin.actuality',compact('actualites'));
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
    public function store(ActualiteFormRequest $request)
    {
            if ($request->hasFile('photo')) {

            $n2=0;
            foreach(request()->file('photo') as $img){
                
                $n2++;
                $photo = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'actualite/' .$photo;

                InterventionImage::make($source)->fit(370, 225)->save($target);

            }
                    $actualite = Actualite::create(['titre'=>$request->titre,'date'=>$request->date,'photo'=>$photo,'description'=>$request->description]);

                    Flashy::message('Actualité enregistré avec succès');

                   return redirect()->route('actuality');
 
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actualite = Actualite::findOrFail($id);
        return view('admin.actualiteEdit',compact('actualite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualiteFormRequest $request, $id)
    {
        $actualite = Actualite::findOrFail($id);

        if ($request->hasFile('photo')) {

            $n2=0;
            foreach(request()->file('photo') as $img){
                
                $n2++;
                $photo = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'actualite/' .$photo;

                InterventionImage::make($source)->fit(370, 225)->save($target);

            }
                    $actualite->update(['titre'=>$request->titre,'date'=>$request->date,'photo'=>$photo,'description'=>$request->description]);

                    Flashy::message('Actualité enregistré avec succès');

                   return redirect()->route('actuality');
 
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Actualite::destroy($id);

        Flashy::message('Actualité supprimé avec succès!');

        return redirect()->route('actuality');
    }
}
