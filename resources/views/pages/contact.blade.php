@extends('layouts.default',['title' => 'Contacts'])

@section('content')

<section class="categories_banner_area" style="background: url(../img/banner/contact.jpg) no-repeat scroll center center;">
    <div class="container">
        <div class="c_banner_inner">
             <h3>CONTACTS</h3>
        </div>
    </div>
</section>

<section class="contact_area p_100">
    <div class="container">
        <div class="row contact_details">
            <div class="col-lg-4 col-md-6">
                <div class="media">
                    <div class="d-flex">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="media-body">
                        <p>Côte d'ivoire<br />Abidjan, Cocody</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="media">
                    <div class="d-flex">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                        <div class="media-body">
                            <a href="tel:+25578997463">+225 - 78 - 99 - 7463</a>
                            <a href="tel:+22551858627">+225 - 51 - 85 - 8627</a>
                        </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="media">
                    <div class="d-flex">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="media-body">
                    <a href="#">mimishop@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact_form_inner">
            <h3>Service message</h3>
                <form  action="{{ route('Contact.store') }}" method="POST" class="
                contact_us_form row">
                {{ csrf_field() }}
                    <div class="form-group col-lg-4 {{ $errors->has('name') ? 'has->error' : '' }}">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nom*">
                    </div>
                    <div class="form-group col-lg-4 {{ $errors->has('email') ? 'has->error' : '' }}">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Adresse email*">
                    </div>
                    <div class="form-group col-lg-4 {{ $errors->has('number') ? 'has->error' : '' }}">
                        <input type="number" name="number" class="form-control @error('number') is-invalid @enderror" placeholder="Contact*">
                    </div>
                    <div class="form-group col-lg-12 {{ $errors->has('message') ? 'has->error' : '' }}">
                        <textarea class="form-control @error('message') is-invalid @enderror"  name="message" rows="1" placeholder="Message*"></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                        <button type="submit" class="btn update_btn form-control">Envoyer</button>
                    </div>
                </form>
        </div>
    </div>
</section>

@endsection