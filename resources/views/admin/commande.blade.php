@extends('admin.layout.default',['title' => 'Actualite'])

@section('content')
 
<div class="wrapper">
  <div class="main-panel">
      <div class="content">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title">Tous les commandes</h4>
                    <a href="" download="Facture" class="btn btn-danger ml-auto">          
                      <i class="fa fa-download"></i>
                      Télécharger le réçu 
                    </a>
                  </div>
                </div>
                <div class="card-body">
      
                  {{-- <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
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
                  </div> --}}

                  <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover" >
                      <thead>
                        <tr>
                          <th>Images</th>
                          <th>Titres</th>
                          <th>Prix</th>
                          <th>Quantités</th>
                          <th>Nom client</th>
                          <th>Contacts</th>
                          <th style="text-align: center;">Dates</th>
                          <th style="width: 10%;text-align: center;">Actions</th>
                        </tr>
                      </thead>
                     @foreach($cmdes as $cmd)
                      <tbody>
                        <tr>
                          <td><img src="{{ asset('/uploads/'.$cmd->fichier) }}" alt="" style="max-height: 50px; max-width: 50px;"></td>
                          <td>{{ $cmd->titre }}</td>
                          <td>{{ $cmd->prix }}&nbsp;FCFA</td>
                          <td>{{ $cmd->qty }}</td>
                          <td>{{ $cmd->nom }}</td>
                          <td>{{ $cmd->contact }}</td>
                          <td>{{ (new DateTime($cmd->created_at))->format('d/m/Y H:i:s') }}</td>
                          <td>
                            <div class="form-button-action">
                        {{--       <a href="tel:{{ $cmd->contact }}" class="btn btn-link btn-primary btn-lg" data-original-title="Appeler">
                                <i class="fa fa-phone"></i>
                              </a> --}}
                              <a href="{{ route('Download.show',$cmd) }}" class="btn btn-link btn-info btn-lg" data-original-title="Appeler">
                                <i class="fa fa-eye"></i>
                              </a>
                              <a href="{{ route('Download.show',$cmd) }}" download="Facture" class="btn btn-link btn-warning btn-lg" data-original-title="Appeler">
                                <i class="fa fa-download"></i>
                              </a>
                              <form action="{{ route('Shopping.destroy',$cmd) }}" method="POST">
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
                    {{ $cmdes->links() }}
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