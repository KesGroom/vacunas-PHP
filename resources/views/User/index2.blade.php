@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white" style="background: blue">
                    <h3 class="text-center">Registrar EPS <span
                            class="badge badge badge-success text-center"> Nueva</span></h3>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('Eps.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username"
                                class="col-md-4 col-form-label text-center">{{ __('Nombre de usuario') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text"
                                    class="form-control @error('username') is-invalid @enderror"
                                    	name="username" required autocomplete="current-username">

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-center">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="text"
                                    class="form-control @error('password') is-invalid @enderror"
                                    	name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name"
                                class="col-md-4 col-form-label text-center">{{ __('Nombre de la EPS') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    name="name" required autocomplete="current-name">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                   
                        <div class="form-group row">
                            <label for="address"
                                class="col-md-4 col-form-label text-center">{{ __('Direccion') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text"
                                    class="form-control @error('address') is-invalid @enderror"
                                    	name="address" required autocomplete="current-address">

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone"
                                class="col-md-4 col-form-label text-center">{{ __('Telefono') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    	name="phone" required autocomplete="current-phone">

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="state"
                                class="col-md-4 col-form-label text-center">{{ __('Departamento') }}</label>

                            <div class="col-md-6">
                                <input id="state" type="text"
                                    class="form-control @error('state') is-invalid @enderror"
                                    	name="state" required autocomplete="current-state">

                                @error('state')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city"
                                class="col-md-4 col-form-label text-center">{{ __('Ciudad') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text"
                                    class="form-control @error('city') is-invalid @enderror"
                                    	name="city" required autocomplete="current-city">

                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                    
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
