@extends('admin.layout.default',['title'=> 'Ajouter terrain'])

@section('content')

     <div class="main-panel">
      <div class="content">
        <div class="page-inner">
          <div class="page-header">
            <h5 class="page-title">MODIFICATION</h5>
            <ul class="breadcrumbs">
              <li class="nav-home">
                <a href="#">
                  <i class="flaticon-home"></i>
                </a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">TABLEAU DE BORD</a>
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Modifier une actualité</div>
                </div>
                <div class="card-body">
                  <form action="{{ route('Nouveau.update',$actualite) }}" method="POST" enctype="multipart/form-data">
                 {{ csrf_field() }}
                {{ method_field('PUT') }}
                  <div class="row">
                    <div class="col-md-4 col-lg-4">
                      <div class="form-group {{ $errors->has('titre') ? 'has->error' : '' }}">
                        <label for="choix">Titre</label>
                         {!! $errors->first('titre','<span class="help-block">:message</span>') !!}
                        <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror" value="{{ old('titre')?: $actualite->titre}}">
                      </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                      <div class="form-group {{ $errors->has('date') ? 'has->error' : '' }}">
                         <label for="titre">Date</label>
                          {!! $errors->first('date','<span class="help-block">:message</span>') !!}
                        <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date')?: $actualite->titre}}">
                    </div>
                  </div>
                   <div class="col-md-4 col-lg-4">
                      <div class="form-group {{ $errors->has('photo') ? 'has->error' : '' }}">
                          <label for="prix">Photo</label>
                      {!! $errors->first('photo','<span class="help-block">:message</span>') !!}
                      <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo[]"
                      value="{{ old('photo[]')?: $actualite->photo}}">
                    </div>
                  </div>
                   <div class="col-md-12 col-lg-12">
                      <div class="form-group {{ $errors->has('description') ? 'has->error' : '' }}">
                         <label for="description">Description</label>
                      {!! $errors->first('description','<span class="help-block">:message</span>') !!}
                       <textarea name="description" id="description" cols="30" rows="6" class="form-control @error('description') is-invalid @enderror">{{ old('description') ?: $actualite->description}}</textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  
@endsection