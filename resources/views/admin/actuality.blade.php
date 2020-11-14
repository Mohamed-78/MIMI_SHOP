@extends('admin.layout.default',['title' => 'Actualite'])

@section('content')
 
<div class="wrapper">
  <div class="main-panel">
      <div class="content">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title">Tous les actualités</h4>
                    <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#addRowModal">
                      <i class="fa fa-plus"></i>
                      AJouter une actualité
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <!-- Modal -->
                  <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header no-bd">
                          <h5 class="modal-title">
                            <span class="fw-mediumbold">
                            AJOUTER UNE ACTUALITE</span> 
                          </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form  action="{{ route('Nouveau.store') }}" method="POST" enctype="multipart/form-data">
                             {{ csrf_field() }}
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group {{ $errors->has('titre') ? 'has->error' : '' }}">
                                  <label for="choix">Titre</label>
                                 {!! $errors->first('titre','<span class="help-block">:message</span>') !!}
                                <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror">
                                </div>
                              </div>
                              <div class="col-md-6 pr-0">
                                <div class="form-group {{ $errors->has('date') ? 'has->error' : '' }}">
                                  <label for="titre">Date</label>
                              {!! $errors->first('date','<span class="help-block">:message</span>') !!}
                              <input type="date" class="form-control" name="date">
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group {{ $errors->has('photo') ? 'has->error' : '' }}">
                                  <label for="prix">Photo(370*255)</label>
                                {!! $errors->first('photo','<span class="help-block">:message</span>') !!}
                                <input type="file" multiple="" class="form-control @error('photo') is-invalid @enderror" name="photo[]">
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group {{ $errors->has('description') ? 'has->error' : '' }}">
                                  <label for="description">Description</label>
                                {!! $errors->first('description','<span class="help-block">:message</span>') !!}
                                 <textarea name="description" id="description" cols="40" rows="5" class="form-control @error('description') is-invalid @enderror"></textarea>
                                </div>
                              </div>
                            </div>
                            </div>
                            <div class="modal-footer no-bd">
                          <button type="submit" id="addRowButton" class="btn btn-primary">Enregistrer</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                        </div>
                         </form>
                        </div>
                     
                      </div>
                    </div>
                  </div>

                  <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover" >
                      <thead>
                        <tr>
                          <th>Images</th>
                          <th>Titres</th>
                          <th>Date</th>
                          <th style="width: 10%">Actions</th>
                        </tr>
                      </thead>
                     @foreach($actualites as $actu)
                      <tbody>
                        <tr>
                          <td><img src="{{ asset('/actualite/'.$actu->photo) }}" alt="" style="max-height: 50px; max-width: 50px;"></td>
                          <td>{{ $actu->titre }}</td>
                          <td>{{ (new DateTime($actu->date))->format('d/m/Y H:i:s') }}</td>
                          <td>
                            <div class="form-button-action">
                              <a href="{{ route('Nouveau.edit',$actu) }}" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Modifier">
                                <i class="fa fa-edit"></i>
                              </a>
                              <form action="{{ route('Nouveau.destroy',$actu) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              <button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Supprimer">
                                <i class="fa fa-trash"></i>
                              </button>
                            </form>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-end">
                    {{ $actualites->links() }}
                  </ul>
               </nav>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div>
  </div>
@endsection