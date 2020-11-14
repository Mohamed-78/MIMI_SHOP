<?php

namespace App\Http\Controllers;

use App\Models\Echange;
use Illuminate\Http\Request;
use Image as InterventionImage;
use MercurySeries\Flashy\Flashy;
use App\Http\Requests\EchangeFormRequest;

class EchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(EchangeFormRequest $request)
    {
       
        if ($request->hasFile('photo')) {
 
            $n2=0;
            foreach(request()->file('photo') as $img){
                
                $n2++;
                $photo = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'echange/' .$photo;


                InterventionImage::make($source)->fit(270, 320)->save($target);

            }
                    $echange = Echange::create(['name'=>$request->name,'email'=>$request->email,'number'=>$request->number,'photo'=>$photo,'message'=>$request->message]);

                    Flashy::message('Message envoyé avec succès');
        
                 return redirect(route('echanges'));
 
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
        $chang = Echange::findOrFail($id);
        return view('admin.cmdeShow',compact('chang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        Echange::destroy($id);

        Flashy::message('Messages supprimé avec succès!');

        return redirect()->route('admin.cmde');
    }
}
