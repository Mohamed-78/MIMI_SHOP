
<section class="no_sidebar_2column_area">
            <div class="container">
                <div class="showing_fillter">
                    <div class="row m0">
                        <div class="first_fillter">
                            <h4><u>ANNONCES</u>&nbsp;{{ $article->count() }}</h4>
                        </div>

                        <div class="four_fillter">
                            <h4>TOUS LES PRODUITS</h4>
                        </div>
                    </div>
                </div>
                <div class="two_column_product">
                    <div class="row">
                        @foreach($article as $art)
                        <div class="col-lg-3 col-sm-6">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="{{ asset('/uploads/'.$art->photo) }}" alt="">
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
                       {{-- PAGINATION --}}
                      </ul>
                    </nav>
                </div>
            </div>
</section>