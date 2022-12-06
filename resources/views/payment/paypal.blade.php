@extends('frontEnd.layouts.master')
@section('title','Review Order Page')
@section('slider')
@endsection
@section('content')
    <div class="container">
        <h3 class="text-center">SU PEDIDO HA SIDO REALIZADO</h3>
        <p class="text-center">Su número de pedido es <b>{{$who_buying->id}}</b> y el pago total es <b>$ {{$who_buying->grand_total}}</b> </p>
        <p class="text-center">Por favor, haga el pago haciendo clic en debajo del botón de pago</p>

        <div class="text-center">
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="business" value="henglayshops@gmail.com">
            <input type="hidden" name="item_name" value="Buyer ({{$who_buying->name}})">
            <input type="hidden" name="amount" value="{{$who_buying->grand_total}}">
            <input type="hidden" name="currency_code" value="mxn">
            <input type="image" name="submit"
                   src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                   alt="PayPal - El más seguro, manera más fácil de pagar en línea">
        </form>
        </div>
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection