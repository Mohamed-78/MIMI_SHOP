<header class="shop_header_area carousel_menu_area">
    <div class="carousel_top_header row m0">
        <div class="container">
            <div class="carousel_top_h_inner">
                    <div class="float-md-right">
                        <div class="top_header_middle">
                            <a href="tel:+25578997463"><i class="fa fa-phone"></i>Téléphone<span>+225 78 99 7463</span></a>
                            <a href="#"><i class="fa fa-envelope"></i> Email: <span>support@yourdomain.com</span></a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
        <div class="carousel_menu_inner">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a class="nav-link" href="{{ route('accueil') }}">Accueil</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('boutique') }}">Boutique</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('echanges') }}">Echange</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contacts</a></li>
                        </ul>
                        <form action="{{ route('search') }}" class="d-inline_block row">
                            <div class="col-md-9 form-group">
                                <input type="text" class="form-control" placeholder="Recherche..." name="q" value="{{ request()->q ?? ''}}">
                            </div>
                            <div class="col-md-3 form-group">
                                <button type="submit" class="add_cart_btn"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
</header>
{{-- 
<section class="categories_banner_area">
    <div class="container">
        <div class="c_banner_inner">
            <h3>shop grid with left sidebar</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li class="current"><a href="#">Shop Grid with Left Sidebar</a></li>
                </ul>
        </div>
    </div>
</section> --}}