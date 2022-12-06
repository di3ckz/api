@extends('backEnd.layouts.master')
@section('title','Listas de cupones')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> inicio</a> <a href="{{route('coupon.index')}}" class="current">Cupones</a></div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Bien Hecho!</strong> {{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>Lista de Cupones</h5>
            </div>
            <form action="{{url('admin/cupones_excel')}}" method="get">
                @csrf  
             <button class="btn btn-secondary">Excel </button></form>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Código promocional</th>
                        <th>Monto</th>
                        <th>Tipo de cantidad</th>
                        <th> Fecha de caducidad</th>
                        <th>Estado</th>
                        <th>Accion</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=0; ?>
                    @foreach($coupons as $coupon)
                        <?php $i++; ?>
                        <tr class="gradeC">
                            <td>{{$i}}</td>
                            <td style="vertical-align: middle;">{{$coupon->coupon_code}}</td>
                            <td style="text-align: center; vertical-align: middle;">{{$coupon->amount}} %</td>
                            <td style="text-align: center; vertical-align: middle;">{{$coupon->amount_type}}</td>
                            <td style="text-align: center; vertical-align: middle;">{{$coupon->expiry_date}}</td>
                            <td style="text-align: center; vertical-align: middle;">
                                {{$coupon->status==1?'Active':'Disable'}}
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                <a href="{{route('coupon.edit',$coupon->id)}}" class="btn btn-primary btn-mini">Editar</a>
                                <a href="javascript:" rel="{{$coupon->id}}" rel1="delete-coupon" class="btn btn-danger btn-mini deleteRecord">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.tables.js')}}"></script>
    <script src="{{asset('js/matrix.popover.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
        $(".deleteRecord").click(function () {
            var id=$(this).attr('rel');
            var deleteFunction=$(this).attr('rel1');
            swal({
                title:'estas seguro?',
                text:"No podras regresar al punto anterior!",
                type:'warning',
                showCancelButton:true,
                confirmButtonColor:'#3085d6',
                cancelButtonColor:'#d33',
                confirmButtonText:'Eliminar!',
                cancelButtonText:'cancelar!',
                confirmButtonClass:'btn btn-success',
                cancelButtonClass:'btn btn-danger',
                buttonsStyling:false,
                reverseButtons:true
            },function () {
                window.location.href="/admin/"+deleteFunction+"/"+id;
            });
        });
    </script>
@endsection
