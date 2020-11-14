@extends('layouts.default',['title' => 'Echange'])

@section('content')

<section class="categories_banner_area" style="background: url(../img/banner/echange.jpg) no-repeat scroll center center;">
    <div class="container">
        <div class="c_banner_inner">
             <h3>Echange</h3>
        </div>
    </div>
</section>

<section class="contact_area p_100">
    <div class="container">
        <div class="contact_title">
            <h2>Echange</h2>
            <p style="text-align: justify;">Vous avez besoin d'un produit quelconque qui n'apparaît pas sur le site alors signifiez le ici en remplisant le formulaire prevu à cet effet.Vous aurez un retour concernant votre requête.</p>
        </div>
        <div class="contact_form_inner">
            <h3>Service echange</h3>
                <form class="contact_us_form row" action="{{ route('Change.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="form-group col-lg-4 {{ $errors->has('name') ? 'has->error' : '' }}">
                        <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" placeholder="Nom*">
                    </div>
                    <div class="form-group col-lg-4 {{ $errors->has('email') ? 'has->error' : '' }}">
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" placeholder="Adresse email*">
                    </div>
                    <div class="form-group col-lg-4 {{ $errors->has('number') ? 'has->error' : '' }}">
                        <input type="number" class="form-control  @error('number') is-invalid @enderror" name="number" placeholder="Contact*">
                    </div>
                    <div class="form-group col-lg-12 {{ $errors->has('photo') ? 'has->error' : '' }}">
                        <input type="file" class="form-control  @error('photo') is-invalid @enderror" multiple="" name="photo[]">
                    </div>
                    <div class="form-group col-lg-12 {{ $errors->has('message') ? 'has->error' : '' }}">
                        <textarea class="form-control  @error('message') is-invalid @enderror" name="message" rows="1" placeholder="Description du produit*"></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                        <button type="submit" class="btn update_btn form-control">Envoyer</button>
                    </div>
                </form>
        </div>
    </div>
</section>
@endsection