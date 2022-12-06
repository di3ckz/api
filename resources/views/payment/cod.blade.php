@extends('frontEnd.layouts.master')
@section('title','Revisar pagina de pedido')
@section('slider')
@endsection
@section('content')
    <div class="container">
        <h3 class="text-center">SU PEDIDO HA SIDO REALIZADO</h3>
        <p class="text-center"> Gracias por su pedido que utilizan opciones en efectivo en la entrega</p>
        <p class="text-center">Nos ponemos en contacto con usted por su correo electrónico (<b>{{$user_order->users_email}}</b>) o número de teléfono (<b>{{$user_order->mobile}}</b>)</p>
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection
