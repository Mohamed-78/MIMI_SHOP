    {{-- <div class="wrapper"> --}}
    <div class="main-header">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="blue">
        
        <a href="" class="logo">
          <img src="{{ asset('asset/img/icon.png') }}" alt="navbar brand" class="navbar-brand">
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="icon-menu"></i>
          </span>
        </button>
      </div>
      <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
        
        <div class="container-fluid">
          <div class="collapse" id="search-nav">
            <form class="navbar-left navbar-form nav-search mr-md-3" style="visibility: hidden;">
              <div class="input-group">
                <div class="input-group-prepend">
                  <button type="submit" class="btn btn-search pr-1">
                    <i class="fa fa-search search-icon"></i>
                  </button>
                </div>
                <input type="text" placeholder="Search ..." class="form-control">
              </div>
            </form>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
    </div>
    <div class="sidebar sidebar-style-2">     
      <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
         
          <ul class="nav nav-primary">
            <li class="nav-item active">
              <a href="" class="collapsed" aria-expanded="false">
                <i class="fas fa-home"></i>
                <p>TABLEAU DE BORD</p>
              </a>
            </li>
            <li class="nav-section">
              <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
              </span>
              <h4 class="text-section">Menu</h4>
            </li>
              <li class="nav-item">
              <a href="{{ route('index') }}">
                <i class="fas fa-shopping-cart"></i>
                <p>Articles</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('changecmde') }}">
                <i class="fas fa-hands-helping"></i>
                <p>Echanges</p>
              </a>
            </li>
             <li class="nav-item">
              <a href="{{ route('actuality') }}">
                <i class="fas fa-file-alt"></i>
                <p>Actualités</p>
              </a>
            </li>
{{--             <li class="nav-item">
              <a href="{{ route('commande') }}">
                <i class="fas fa-shopping-bag"></i>
                <p>Commandes</p>
              </a>
            </li> --}}
            <li class="nav-item">
              <a href="{{ route('message') }}">
                <i class="fas fa-comment-dots"></i>
                <p>Messages</p>
              </a>
            </li>
            <li class="nav-item">
              <a onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <i class="fas fa-power-off"></i>
                <p>Deconnexion</p>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field()}}
              </form>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('accueil') }}" target="_blank">
                <i class="fas fa-globe-africa"></i>
                <p>SITE INTERNET</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>