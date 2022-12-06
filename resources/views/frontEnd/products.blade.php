@extends('frontEnd.layouts.master')
@section('title','Lista de Productos')
@section('slider')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('frontEnd.layouts.category_menu')
            </div>
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <?php
                            if($byCate!=""){
                                $products=$list_product;
                                echo '<h2 class="title text-center">Categorias '.$byCate->name.'</h2>';
                            }else{
                                echo '<h2 class="title text-center">lista de productos</h2>';
                            }
                    ?>
                    @foreach($products as $product)
                        @if($product->category->status==1)
                            <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{url('/product-detail',$product->id)}}"><img src="{{url('products/small/',$product->image)}}" alt="" /></a>
                                        <h2>$ {{$product->price}}</h2>
                                        <p>{{$product->p_name}}</p>
                                        <a href="{{url('/product-detail',$product->id)}}" class="btn btn-default add-to-cart">checar</a>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href=""><i class="fa fa-plus-square"></i>Añadir a la lista de deseos</a></li>
                                        <li><a href=""><i class="fa fa-plus-square"></i>Añadir para comparar</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                    {{--<ul class="pagination">
                        <li class="active"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">&raquo;</a></li>
                    </ul>--}}
                </div><!--features_items-->
            </div>
        </div>
    </div>
@endsection