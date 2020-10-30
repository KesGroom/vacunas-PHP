@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white" style="background: blue">
                        <h3 class="text-center">Crear usuario <span
                                class="badge badge badge-success text-center">Nuevo</span></h3>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('correo.enviar2') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="nombre"
                                    class="col-md-4 col-form-label text-center">{{ __('Nombre de usuario') }}</label>

                                <div class="col-md-6">
                                    <input id="nombre" type="text"
                                        class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                                     autocomplete="current-nombre">

                                    @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="correo"
                                    class="col-md-4 col-form-label text-center">{{ __('Correo') }}</label>

                                <div class="col-md-6">
                                    <input id="correo" type="email"
                                        class="form-control @error('correo') is-invalid @enderror" name="correo"
                                         autocomplete="current-correo">

                                    @error('correo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            
                          
                            <div class="form-group row">
                                <label for="asunto"
                                    class="col-md-4 col-form-label text-center">{{ __('Asunto') }}</label>

                                <div class="col-md-6">
                                    <input id="asunto" type="text"
                                        class="form-control @error('asunto') is-invalid @enderror" name="asunto"
                                         autocomplete="current-id">

                                    @error('asunto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mensaje"
                                    class="col-md-4 col-form-label text-center">{{ __('Mensaje') }}</label>

                                <div class="col-md-6">
                                    <input id="mensaje" type="text"
                                        class="form-control @error('mensaje') is-invalid @enderror"
                                        name="mensaje"  autocomplete="current-id">

                                    @error('mensaje')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <button class="btn btn-primary text-center center col-md-12"
                                    type="submit">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
