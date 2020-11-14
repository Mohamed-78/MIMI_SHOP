@extends('layouts.default',['title' => 'Boutique_Search'])

@section('content')

<section class="categories_banner_area" style="background: url(../img/banner/boutique.jpg) no-repeat scroll center center;">
    <div class="container">
        <div class="c_banner_inner">
             <h3>La boutique mimi vous offre le meilleur</h3>
        </div>
    </div>
</section>
<section class="categories_product_main pt-5">
    <div class="container">
        <div class="categories_main_inner">
            <div class="row row_disable">
                <div class="col-lg-9 float-md-right">
                    <div class="showing_fillter">
                        <div class="row m0 justify-content-center">
                            <div class="col-sm-9 col-md-8">
                                @if(request()->input())
                                    <h5 style="text-align: center;">
                                        {{ $search->count() }} résultat(s) pour la recherche "{{ request()->q }}"
                                    </h5>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="categories_product_area">
                        <div class="row">
                            @foreach($search as $art)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="l_product_item">
                                        <div class="l_p_img">
                                            <img src="{{ asset('/uploads/'.$art->photo) }}" alt="">
                                        </div>
                                        <div class="l_p_text">
                                            <ul>
                                                <li class="p_icon"><a href="{{ route('contact') }}"><i class="fa fa-envelope"></i></a></li>
                                                <li><a class="add_cart_btn" href="{{ route('Pages.show',$art) }}">Voir plus</a></li>
                                                <li class="p_icon"><a href="tel:+25578997463"><i class="fa fa-phone"></i></a></li>
                                            </ul>
                                                <h4>{{ $art->titre }}</h4>
                                                <h5>{{ $art->prix }}&nbsp;FCFA</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                            <nav aria-label="Page navigation example" class="pagination_area">
                                <ul class="pagination">
                                   {{ $search->links('vendor.pagination.default') }}
                                  </ul>
                            </nav>
                    </div>
                </div>
                <div class="col-lg-3 float-md-right d-none d-md-block">
                    <div class="categories_sidebar">
                       <aside class="l_widget l_supper_widget">
                            <img class="img-fluid" src="img/add.jpg" alt="">
                            <h4>Super Summer Collection</h4>
                        </aside>
                        <aside class="l_widget l_supper_widget">
                            <img class="img-fluid" src="img/supper-add-1.jpg" alt="">
                            <h4>Super Summer Collection</h4>
                        </aside>
                        <aside class="l_widget l_hot_widget">
                            <h3>La boutique Mimi</h3>
                                <p>Vous avez besoin d'un produit particulier alors faites-nous le savoir</p>
                                <a class="discover_btn" href="{{ route('echanges') }}">Contactez-nous</a>
                        </aside>
                        <aside class="l_widget l_news_widget">
                            <h3>newsletter</h3>
                            <p>Inscrivez-vous à notre newsletter pour rester informer!</p>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Adresse email*" aria-label="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary subs_btn" type="button">S'inscrire</button>
                                    </span>
                                </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="world_service">
                <div class="container">
                    <div class="world_service_inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="world_service_item">
                                    <h4><img src="img/icon/world-icon-1.png" alt="">Service fiable</h4>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="world_service_item">
                                    <h4><img src="img/icon/world-icon-2.png" alt="">Traite vos préocupations</h4>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="world_service_item">
                                    <h4><img src="img/icon/world-icon-3.png" alt="">Safe Payment</h4>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="world_service_item">
                                    <h4><img src="img/icon/world-icon-4.png" alt="">Livraison rapide</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

@endsection