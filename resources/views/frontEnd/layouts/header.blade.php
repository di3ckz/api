<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> 722 644 6234</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> Endoutvt@gmail.com.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="https://www.facebook.com/gustavo.garciafigueroa.94/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/GustavoGarcaFi5"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                      <!--  <a href="{{url('/')}}"><img src="{{asset('frontEnd/images/home/Logo.png')}}" alt="50" /></a> -->
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{url('/viewcart')}}"><i class="fa fa-shopping-cart"></i> Carrito</a></li>
                            @if(Auth::check())
                                <li><a href="{{url('/myaccount')}}"><i class="fa fa-user"></i> Mi cuenta</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-lock"></i> cerrar </a>
                                </li>
                            @else
                                <li><a href="{{url('/login_page')}}"><i class="fa fa-lock"></i> Iniciar sesión</a></li>
                                <li><a href="https://proyecto.atencion.pro/admin"><i class="fa fa-lock"></i> Administrador</a></li>

                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Navegación de palanca</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{url('/')}}" class="active">inicio</a></li>
                            <li class="dropdown"><a href="#">Tienda<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{url('/list-products')}}">Productos</a></li>
                                    <li><a href="{{url('/myaccount')}}">Cuenta</a></li>
                                    <li><a href="{{url('/viewcart')}}">Carrito</a></li>
                                </ul>
                            </li>
                            <li><a href="https://www.youtube.com/channel/UC7HkX5APLBZGQCnzGnb8iFw?view_as=subscriber" target="_blank">Contacto</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Buscar"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->
