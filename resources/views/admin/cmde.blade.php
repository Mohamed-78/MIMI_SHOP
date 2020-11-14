@extends('admin.layout.default',['title' => 'Clients'])

@section('content')
 
<div class="wrapper">
    <div class="main-panel">
      <div class="content">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title">Echanges</h4>
                  </div>
                </div>
                  <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover" >
                      <thead>
                        <tr>
                          <th>Images</th>
                          <th>Nom</th>
                          <th>Email</th>
                          <th>Contacts</th>
                          <th>Messages</th>
                          <th style="width: 10%">Actions</th>
                        </tr>
                      </thead>
                     @foreach($cde as $change)
                      <tbody>
                        <tr>
                          <td><img src="{{ asset('/echange/'.$change->photo) }}" alt="" style="max-height: 50px; max-width: 50px;"></td>
                          <td>{{ $change->name }}</td>
                          <td>{{ $change->email }}</td>
                          <td>{{ $change->number }}</td>
                          <td>{{ $change->message }}</td>
                          <td>
                            <div class="form-button-action">
                             {{--  <a href="{{ route('Change.show',$change) }}" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Voir">
                                <i class="fa fa-eye"></i>
                              </a> --}}
                              <form action="{{ route('Change.destroy',$change) }}" method="POST">
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
                    {{ $cde->links() }}
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