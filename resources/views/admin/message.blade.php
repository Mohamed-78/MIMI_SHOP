@extends('admin.layout.default',['title' => 'Messages'])

@section('content')

    <div class="main-panel">
      <div class="content">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title">Tous les messages</h4>
                  </div>
                </div>
                  <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover" >
                      <thead>
                        <tr>
                          <th>Infos</th>
                          <th>Messages</th>
                          <th style="width: 10%">Actions</th>
                        </tr>
                      </thead>
                     @foreach($contact as $msg)
                      <tbody>
                        <tr>
                        <td>
                            {{ $msg->name }}<br>
                            {{ $msg->email }}<br>
                            {{ $msg->number }}<br>
                            {{ (new DateTime($msg->created_at))->format('d/m/Y') }}
                          </td>
                          <td>{{ $msg->message }}</td>
                          <td>
                            <div class="form-button-action">
                              <form action="{{ route('Msg.destroy',$msg) }}" method="POST">
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
                    {{ $contact->links() }}
                  </ul>
               </nav>
                  </div>
              </div>
            </div>
      </div>
    </div>
  </div>
@endsection