@extends('layouts.default',['title' => 'Accueil'])

@section('content')

  <div class="best_summer_banner">
        <img class="img-fluid" src="img/banner/summer-banner.jpg" alt="">
        <div class="summer_text">
            <h3>Le choix malin c'est mimi</h3>
            <p style="font-size: 20px;">On vous offre les meilleurs produits, à moindre coût.</p>
            <a class="add_cart_btn" href="{{ route('boutique') }}">Achétez maintenant!</a>
        </div>
</div>
<section class="special_offer_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="special_offer_item">
                    <img class="img-fluid" src="img/feature-add/special-offer-1.jpg" alt="">
                        <div class="hover_text">
                                <h5 style="font-size: 20px;"> Pour des meilleurs produits</h5>
                                <a class="shop_now_btn btn-sm" href="{{ route('contact') }}">Contactez-nous</a>
                        </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="special_offer_item2">
                    <img class="img-fluid" src="img/feature-add/special-offer-2.jpg" alt="">
                        <div class="hover_text">
                           <h5 style="font-size: 20px;">Pour tous vos Accessoires</h5>
                            <a class="shop_now_btn btn-sm" href="{{ route('contact') }}">Contactez-nous</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="fillter_latest_product">
    <div class="container">
        <div class="single_c_title">
            <h2>NOS PRODUITS</h2>
        </div>
        <div class="fillter_l_p_inner">
            <ul class="fillter_l_p">
                <li data-filter=".vetement" class="active"><a href="#">Vêtements</a></li>
                <li data-filter=".acc"><a href="#">Accessoires</a></li>
                <li data-filter=".shoes"><a href="#">Chaussures</a></li>
                <li data-filter=".meuble"><a href="#">Meubles</a></li>
            </ul>
            <div class="row isotope_l_p_inner">
            @foreach($vetement as $habit)
                <div class="col-lg-3 col-md-4 col-sm-6 vetement">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="{{ asset('/uploads/'.$habit->photo) }}" alt="">
                             {{-- <h5 class="sale">{!! choose($habit) !!}</h5> --}}
                        </div>
                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="{{-- {{ route('Shopping.show',$habit) }} --}}{{ route('contact') }}"><i class="fa fa-envelope"></i></a></li>
                                <li><a class="add_cart_btn" href="{{ route('Pages.show',$habit) }}">Voir plus</a></li>
                                <li class="p_icon"><a href="tel:+25578997463"><i class="fa fa-phone"></i></a></li>
                            </ul>
                               <h4>{{ $habit->titre }}</h4>
                                <h5>{{ $habit->prix }}&nbsp;FCFA</h5>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach($chaussures as $shoes)
                <div class="col-lg-3 col-md-4 col-sm-6 shoes">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="{{ asset('/uploads/'.$shoes->photo) }}" alt="">
                        </div>
                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="{{ route('contact') }}"><i class="fa fa-envelope"></i></a></li>
                                <li><a class="add_cart_btn" href="{{ route('Pages.show',$shoes) }}">Voir plus</a></li>
                                <li class="p_icon"><a href="tel:+25578997463"><i class="fa fa-phone"></i></a></li>
                            </ul>
                               <h4>{{ $shoes->titre }}</h4>
                                <h5>{{ $shoes->prix }}&nbsp;FCFA</h5>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach($accessoires as $shoe)
                <div class="col-lg-3 col-md-4 col-sm-6 acc">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="{{ asset('/uploads/'.$shoe->photo) }}" alt="">
                        </div>
                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="{{ route('contact') }}"><i class="fa fa-envelope"></i></a></li>
                                <li><a class="add_cart_btn" href="{{ route('Pages.show',$shoe) }}">Voir plus</a></li>
                                <li class="p_icon"><a href="tel:+25578997463"><i class="fa fa-phone"></i></a></li>
                            </ul>
                               <h4>{{ $shoe->titre }}</h4>
                                <h5>{{ $shoe->prix }}&nbsp;FCFA</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@if($actualite->isNotEmpty())
    <section class="from_blog_area">
        <div class="container">
            <div class="from_blog_inner">
                <div class="c_main_title">
                    <h2>Nouveautés</h2>
                </div>
               <div class="row">
              @foreach($actualite as $actu)
                    <div class="col-lg-4 col-sm-6">
                        <div class="from_blog_item">
                            <img class="img-fluid" src="{{ asset('/actualite/'.$actu->photo) }}" alt="">
                                <div class="f_blog_text">
                                    <h5 style="background-color:crimson;color:#fff;">{{ $actu->titre }}</h5>
                                    <p>{{ $actu->description}}</p>
                                    <h6>{{ (new DateTime($actu->date))->format('d/m/Y') }}</h6>
                                </div>
                        </div>
                    </div>
              @endforeach
                </div>
            </div>
        </div>
    </section>
@endif
@endsection