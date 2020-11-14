@extends('layouts.default',['title' => 'cart'])

@section('content')
<section class="categories_banner_area" style="background: url(../img/banner/cart.jpg) no-repeat scroll center center;">
    <div class="container">
        <div class="c_banner_inner">
             <h3>La boutique mimi vous offre le meilleur</h3>
        </div>
    </div>
</section>
<section class="shopping_cart_area p_100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart_items">
                    <h3>L'article : {{ $article->titre }}</h3>
                        <div class="table-responsive-md">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <img src="img/icon/close-icon.png" alt="">
                                        </th>
                                        <td>
                                            <div class="media">
                                                <div class="d-flex">
                                                    <img src="{{ asset('/uploads/'.$article->photo) }}" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h4>{{ $article->titre }}</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td><p class="red">{{ $article->prix }} FCFA</p></td>
                                        <td>
                                        <form action="{{ route('Shopping.store') }}" method="POST">
                                            {{ csrf_field() }}
                                            <div class="quantity">
                                                <h6>Quantité</h6>
                                                <div class="custom">
                                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon_minus-06"></i></button>
                                                    <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="icon_plus"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                    </tr>
                                    <tr class="last">
                                        <th scope="row">
                                            <img src="img/icon/cart-icon.png" alt="">
                                        </th>
                                        <td>
                                             <input type="text" name="fichier" value="{{ $article->photo }}" hidden="">
                                             <input type="number" name="prix" value="{{ $article->prix }}" hidden="">
                                             <input type="text" name="titre" value="{{ $article->titre }}" hidden="">
                                            <div class="media">
                                                <div class="d-flex">
                                                    <h5>Nom</h5>
                                                </div>
                                                <div class="media-body">
                                                    <input type="text" name="nom" placeholder="Nom*">
                                                </div>
                                                <div class="d-flex">
                                                    <h5>Contact</h5>
                                                </div>
                                                <div class="media-body">
                                                    <input type="number" name="contact" placeholder="Contact*">
                                                </div>
                                            </div>
                                        </td>
                                        <td><p class="red"></p></td>
                                        <td>
                                           <button type="submit" class="btn subs_btn sm">Soumettre</button>
                                        </td>
                                    </tr>
                                </form>
                                        <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-4">
                    <div class="cart_totals_area">
                            <h4>Cart Totals</h4>
                        <div class="cart_t_list">
                            <div class="media">
                                <div class="d-flex">
                                    <h5>Subtotal</h5>
                                </div>
                                <div class="media-body">
                                        <h6>$14</h6>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <h5>Shipping</h5>
                                </div>
                                <div class="media-body">
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model tex</p>
                                </div>
                            </div>
                            <div class="media">
                                    <div class="d-flex">
                                    </div>
                                <div class="media-body">
                                    <select class="selectpicker">
                                        <option>Calculate Shipping</option>
                                        <option>Calculate Shipping</option>
                                        <option>Calculate Shipping</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="total_amount row m0 row_disable">
                            <div class="float-left">
                                    Total
                            </div>
                            <div class="float-right">
                                    $400
                            </div>
                        </div>
                    </div>
                <button type="submit" value="submit" class="btn subs_btn form-control">Proceed to checkout</button>
            </div>
        </div>
    </div>
</section>
@endsection