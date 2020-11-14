@extends('admin.layout.default',['title' => 'Admin'])

@section('content')
  <div class="wrapper">

    <div class="main-panel">
      <div class="content">
        <div class="panel-header bg-primary-gradient">
          <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
              <div>
                <h2 class="text-white pb-2 fw-bold">TABLEAU DE BORD</h2>
              </div>
            </div>
          </div>
        </div>
            <div class="page-inner mt--5">
            <div class="row row-card-no-pd mt--2">
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-5">
                        <div class="col-icon">
                      <div class="icon-big text-center icon-primary bubble-shadow-small">
                        <i class="fas fa-tshirt"></i>
                      </div>
                    </div>
                      </div>
                      <div class="col-7 col-stats">
                        <div class="numbers">
                          <h5 class="card-category"><a style="text-decoration: none;">VÊTEMENTS</a></h5>
                          <h4 class="card-title">{{ $vetement->count() }}</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-5">
                        <div class="col-icon">
                      <div class="icon-big text-center icon-info bubble-shadow-small">
                        <i class="fas fa-shoe-prints"></i>
                      </div>
                    </div>
                      </div>
                      <div class="col-7 col-stats">
                        <div class="numbers">
                          <h5 class="card-category"><a style="text-decoration: none;">CHAUSSURES</a></h5>
                          <h4 class="card-title">{{ $chaussures->count() }}</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-5">
                        <div class="col-icon">
                      <div class="icon-big text-center icon-success bubble-shadow-small">
                        <i class="fas fa-cart-plus"></i>
                      </div>
                    </div>
                      </div>
                      <div class="col-7 col-stats">
                        <div class="numbers">
                          <h5 class="card-category">ACCESSOIRES</h5>
                          <h4 class="card-title">{{ $accessoires->count() }}</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-5">
                        <div class="col-icon">
                      <div class="icon-big text-center icon-secondary bubble-shadow-small">
                        <i class="fas fa-envelope"></i>
                      </div>
                    </div>
                      </div>
                      <div class="col-7 col-stats">
                        <div class="numbers">
                          <h5 class="card-category">MESSAGES</h5>
                          <h4 class="card-title">{{ $message->count() }}</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title">Articles</h4>
                    <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#addRowModal">
                      <i class="fa fa-plus"></i>
                      AJouter annonce
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
                            AJOUTER UNE ANNONCE</span> 
                          </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{ route('Home.store') }}" method="POST" enctype="multipart/form-data">
                             {{ csrf_field() }}
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="choix">Catégories</label>
                                  <select name="categories" class="form-control">
                                      <option selected="" disabled=""></option>
                                      <option value="Vêtement">Vêtements</option>
                                      <option value="Chaussures">Chaussures</option>
                                      <option value="Accessoires">Accessoires</option>
                                      <option value="Meubles">Meubles</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6 pr-0">
                                <div class="form-group {{ $errors->has('titre') ? 'has->error' : '' }}">
                                  <label for="titre">Titre</label>
                                    {!! $errors->first('titre','<span class="help-block">:message</span>') !!}
                                    <input type="text" class="form-control @error('titre') is-invalid @enderror" name="titre">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group {{ $errors->has('prix') ? 'has->error' : '' }}">
                                  <label for="lieu">Prix</label>
                                {!! $errors->first('prix','<span class="help-block">:message</span>') !!}
                                <input type="number" class="form-control @error('prix') is-invalid @enderror" name="prix">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group {{ $errors->has('photo') ? 'has->error' : '' }}">
                                  <label for="photo">Photo principale (367*320)</label>
                                {!! $errors->first('photo','<span class="help-block">:message</span>') !!}
                                <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo[]">
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group {{ $errors->has('photos') ? 'has->error' : '' }}">
                                  <label for="photos">Autres Photos (367*320)</label>
                                {!! $errors->first('photos','<span class="help-block">:message</span>') !!}
                                <input type="file" multiple="" class="form-control @error('photos') is-invalid @enderror" name="photos[]">
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
                          <th>Categories</th>
                          <th>Titres</th>
                          <th>Prix</th>
                          <th>Dates</th>
                          <th style="width: 10%">Actions</th>
                        </tr>
                      </thead>
                      @foreach($article as $art)
                      <tbody>
                        <tr>
                          <td><img src="{{ asset('/uploads/'.$art->photo) }}" alt="" style="max-height: 50px; max-width: 50px;"></td>
                          <td>{{-- {!! inde($foncia) !!} --}}{{ $art->categories }}</td>
                          <td>{{ $art->titre }}</td>
                          <td>{{ $art->prix }}&nbsp;FCFA</td>
                          <td>{{ (new DateTime($art->created_at))->format('d/m/Y H:i:s') }}</td>
                          <td>
                            <div class="form-button-action">
                              <a href="{{ route('Home.edit',$art) }}" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Modifier">
                                <i class="fa fa-edit"></i>
                              </a>
                              <form action="{{ route('Home.destroy',$art) }}" method="POST" id="delete">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              <button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger" id="submit" data-original-title="Supprimer">
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
                    {{ $article->links() }}
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

{{-- @section('extra-script')
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">
    var forms = document.querySelectorAll('#delete');
    var submitButton = document.getElementById('submit')

    Array.from(forms).forEach((element) => {
      element.addEventListener('submit', function(ev) {
        ev.preventDefault();
        swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this imaginary file!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            swal("Poof! Your imaginary file has been deleted!", {
              icon: "success",
            });
            var url = this.getAttribute('action');
            var token = this.input('[name=_token]');
            console.log(token)
            fetch(
              `/panier/${rowId}`,
              {
                  headers: {
                      "Content-Type": "application/json",
                      "Accept": "application/json, text-plain, */*",
                      "X-Requested-with": "XMLHttpRequest",
                      "X-CSRF-TOKEN": token
                  },
                  method: 'DELETE'
              }).then((data) => {
                  console.log(data)
                  window.location.reload(true)
            }).catch((error) => {
                console.log(error)
            })
            console.log('reussi')
          } else {
            swal("Your imaginary file is safe!");
            console.log('annuler')
          }
        });
      })
    })
  </script>
@endsection --}}