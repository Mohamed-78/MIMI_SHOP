@extends('admin.layout.down',['title' => 'Actualite'])

@section('content')
 
<div class="wrapper">
      <div class="content">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title">Réçu delivré par : Mimi</h4>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
                    <thead>
                      <tr>
                        <th scope="col">Designation</th>
                        <th scope="col">Qté</th>
                        <th scope="col">P.U HT</th>
                        <th scope="col">Total HT</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{ $cart->titre }}</td>
                        <td>{{ $cart->qty }}</td>
                        <td>{{ $cart->prix }}</td>
                        <td>{{ $cart->prix }} x {{ $cart->qty }}</td>
                      </tr>
                      <tr>
                        <td colspan="4"><b>Article achété par: {{ $cart->nom }}</b><br>
                          <b>Numéro de téléphone:{{ $cart->contact }}</b><br>
                         {{--  {{ (new DateTime($cart->cre))->format('d/m/Y H:i:s') }}<br> --}}
                          <h4 style="text-align: right">Net à Payer: {!! total($cart) !!} FCFA</h4>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                    <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-end">
                   {{--  {{ $cmdes->links() }} --}}
                  </ul>
               </nav>
                  </div>
                </div>
              </div>
            </div>
      </div>
  </div>
@endsection