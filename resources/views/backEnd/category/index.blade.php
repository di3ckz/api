@extends('backEnd.layouts.master')
@section('title','List Categories')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>Inicio</a> <a href="{{route('category.index')}}" class="current">Categorias</a></div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done!</strong> {{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>Lista de Categorias</h5>
            </div>
            <form action="{{url('admin/categorias_excel')}}" method="get">
                @csrf  
             <button class="btn btn-secondary">Excel </button></form>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                    <tr>
                        <th>nombre de la categoria</th>
                        <th>Categoria principal</th>
                        <th>Creado en</th>
                        <th>Estatus</th>
                        <th>Accion</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <?php
                                $parent_cates = DB::table('categories')->select('name')->where('id',$category->parent_id)->get();
                            ?>
                            <tr class="gradeC">
                                <td>{{$category->name}}</td>
                                <td>
                                    @foreach($parent_cates as $parent_cate)
                                        {{$parent_cate->name}}
                                    @endforeach
                                </td>
                                <td style="text-align: center;">{{$category->created_at->diffForHumans()}}</td>
                                <td style="text-align: center;">{{($category->status==0)?' Disabled':'Enable'}}</td>
                                <td style="text-align: center;">
                                    <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary btn-mini">Editar</a>
                                    <a href="javascript:" rel="{{$category->id}}" rel1="delete-category" class="btn btn-danger btn-mini deleteRecord">Eliminar</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
        $(".deleteRecord").click(function () {
           var id=$(this).attr('rel');
           var deleteFunction=$(this).attr('rel1');
           swal({
               title:'Estas Seguro?',
               text:"No podras revertir los cambios!",
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