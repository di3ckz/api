@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique su direcci�n de correo electr�nico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado un nuevo enlace de verificaci�n a su direcci�n de correo electr�nico.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, verifique su correo electr�nico para obtener un enlace de verificaci�n.') }}
                    {{ __('Si no recibiste el correo electr�nico') }}, <a href="{{ route('verification.resend') }}">{{ __('haga clic aqu� para solicitar otro') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
