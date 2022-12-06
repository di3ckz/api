<!--sidebar-menu-->
<div id="sidebar"><a href="{{url('/admin')}}" class="visible-phone"><i class="icon icon-home"></i> tablero</a>
    <ul>
        <li{{$menu_active==1? ' class=active':''}}><a href="{{url('/admin')}}"><i class="icon icon-home"></i> <span>tablero</span></a> </li>
        <li class="submenu {{$menu_active==2? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Categorias</span></a>
            <ul>
                <li><a href="{{url('/admin/category/create')}}">nueva categoria</a></li>
                <li><a href="{{route('category.index')}}">lista de categorias</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==3? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Productos</span></a>
            <ul>
                <li><a href="{{url('/admin/product/create')}}">añadir  Productos</a></li>
                <li><a href="{{route('product.index')}}">lista de productos</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==4? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>cupones</span></a>
            <ul>
                <li><a href="{{route('coupon.create')}}">añadir nuevo cupon</a></li>
                <li><a href="{{route('coupon.index')}}">Lista de Cupones</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--sidebar-menu-->