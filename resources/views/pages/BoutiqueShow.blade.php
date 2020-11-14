@extends('layouts.default',['title' => 'Details'])

@section('content')
<section class="categories_banner_area" style="background: url(../img/banner/boutique.jpg) no-repeat scroll center center;">
    <div class="container">
        <div class="c_banner_inner">
             <h3>{{ $article->titre }}</h3>
        </div>
    </div>
</section>
<section class="product_details_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="product_details_slider">
                    <div id="product_slider2" class="rev_slider" data-version="5.3.1.6">
                        <ul>    <!-- SLIDE  -->
                            <li data-index="rs-28" data-transition="scaledownfromleft" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="{{ asset('/uploads/'.$article->photo) }}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Umbrella" data-param1="September 7, 2015" data-param2="Alfon Much, The Precious Stones" data-description="">
                                        <!-- MAIN IMAGE -->
                                <img src="{{ asset('/uploads/'.$article->photo) }}"  alt=""  width="1920" height="1080" data-lazyload="{{ asset('/uploads/'.$article->photo) }}" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->
                            </li>
                            @if ($article->photos)
                                @foreach(json_decode($article->photos) as $image)
                                    <li data-index="rs-{{ $loop->index }}" data-transition="scaledownfromleft" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="{{ asset('/uploads/'.$image) }}"  data-rotate="0"  data-saveperformance="off"  data-title="{{ $loop->index }}" data-param1="{{ $loop->index }}" data-param2="{{ $loop->index }}" data-description="">
                                            <!-- MAIN IMAGE -->
                                        <img src="{{ asset('/uploads/'.$image) }}"  alt=""  width="1920" height="1080" data-lazyload="{{ asset('/uploads/'.$image) }}" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                <!-- LAYERS -->
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
                    <div class="col-lg-7">
                        <div class="product_details_text">
                            <h3>{{ $article->titre }}</h3>
                            <ul class="p_rating">
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <h6>Disponible</h6>
                            <h4>{{ $article->prix }}&nbsp;FCFA</h4>
                            <p>{{ $article->description }}</p>
                            <div class="quantity">
                                <a class="add_cart_btn" href="tel:+25578997463">Contactez-nous</a>
                            </div>
                            <div class="shareing_icon">
                                <h5>suivez nous sur :</h5>
                                <ul>
                                    <li><a href="#"><i class="social_facebook"></i></a></li>
                                    <li><a href="#"><i class="social_instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
         </div>
    </div>
</section>
<section class="related_product_area">
    <div class="container">
        <div class="related_product_inner">
            <h2 class="single_c_title">AUTRES PRODUITS</h2>
                <div class="row">
                   @foreach($chaussures as $shoes)
                    <div class="col-lg-3 col-sm-6">
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
                </div>
                <nav aria-label="Page navigation example" class="pagination_area">
                      <ul class="pagination">
                       {{--  PAGINATION --}}
                      </ul>
                </nav>
        </div>
    </div>
</section>
@endsection