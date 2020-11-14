@extends('admin.layout.default',['title' => 'Modifier'])

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
                  <div class="card-title">Modifier l'article</div>
                </div>
                <div class="card-body">
                  <form action="{{ route('Home.update',$art) }}" method="POST" enctype="multipart/form-data">
                 {{ csrf_field() }}
                {{ method_field('PUT') }}
                  <div class="row">
                    <div class="col-md-6 col-lg-6">
                      <div class="form-group">
                          <label for="choix">Catégories</label>
                              <select name="categories" class="form-control">
                                <option selected="">{{ $art->categories }}</option>
                                <option value="Vêtement">Vêtements feminin</option>
                                <option value="Chaussures">Chaussures</option>
                                <option value="Accessoires">Accessoires</option>
                                <option value="Meubles">Meubles</option>
                              </select>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                      <div class="form-group {{ $errors->has('titre') ? 'has->error' : '' }}">
                         <label for="titre">Titre</label>
                      {!! $errors->first('titre','<span class="help-block">:message</span>') !!}
                      <input type="text" class="form-control @error('titre') is-invalid @enderror" name="titre"
                      value="{{ old('titre')?: $art->titre}}">
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-4">
                      <div class="form-group {{ $errors->has('prix') ? 'has->error' : '' }}">
                          <label for="prix">Prix</label>
                      {!! $errors->first('prix','<span class="help-block">:message</span>') !!}
                      <input type="number" class="form-control @error('prix') is-invalid @enderror" name="prix"
                      value="{{ old('prix')?: $art->prix}}">
                    </div>
                  </div>
                   <div class="col-md-4 col-lg-4">
                      <div class="form-group {{ $errors->has('photo') ? 'has->error' : '' }}">
                          <label for="prix">Photo principale (367*320)</label>
                      {!! $errors->first('photo','<span class="help-block">:message</span>') !!}
                      <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo[]"
                      value="{{ old('file')?: $art->photo}}">
                    </div>
                  </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('photos') ? 'has->error' : '' }}">
                          <label for="photos">Autres Photos (367*320)</label>
                          {!! $errors->first('photos','<span class="help-block">:message</span>') !!}
                          <input type="file" multiple="" class="form-control @error('photos') is-invalid @enderror" name="photos[]">
                        </div>
                    </div>
                   <div class="col-md-12 col-lg-12">
                      <div class="form-group {{ $errors->has('description') ? 'has->error' : '' }}">
                         <label for="description">Description</label>
                      {!! $errors->first('description','<span class="help-block">:message</span>') !!}
                       <textarea name="description" id="description" cols="30" rows="6" class="form-control @error('description') is-invalid @enderror">{{ old('description') ?: $art->description}}</textarea>
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