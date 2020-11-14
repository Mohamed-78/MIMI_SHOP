@extends('layouts.app')

@section('content')

 <div class="main-wrapper">
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url(assetts/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(assetts/images/big/3.jpg);">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="assetts/images/big/icon.png" alt="wrapkit">
                        </div>
                        <h2 class="mt-3 text-center">ADMIN</h2>
                        <p class="text-center">Entrez vos coordonnées</p>
                        <form  method="POST" action="{{ route('login') }}" class="mt-4">
                             @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="email">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="pwd">Mot de passe</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                         @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-dark">CONNEXION</button>
                                </div>
                                {{-- <div class="col-lg-12 text-center mt-5">
                                    CABINET KATANA
                                </div> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
