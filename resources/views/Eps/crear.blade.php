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
                        <form method="POST" action="{{ route('official.usu') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="username"
                                    class="col-md-4 col-form-label text-center">{{ __('Nombre de usuario') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        required autocomplete="current-username">

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
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="id" class="col-md-4 col-form-label text-center">{{ __('Documento') }}</label>

                                <div class="col-md-6">
                                    <input id="id" type="id" class="form-control @error('id') is-invalid @enderror"
                                        name="id" required autocomplete="current-id">

                                    @error('id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-center">{{ __('Nombres') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror"
                                        name="name" required autocomplete="current-id">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastname"
                                    class="col-md-4 col-form-label text-center">{{ __('Apellidos') }}</label>

                                <div class="col-md-6">
                                    <input id="lastname" type="lastname"
                                        class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                        required autocomplete="current-id">

                                    @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="date_of_birth"
                                    class="col-md-4 col-form-label text-center">{{ __('Fecha de nacimiento') }}</label>

                                <div class="col-md-6">
                                    <input id="date_of_birth" type="date"
                                        class="form-control @error('date_of_birth') is-invalid @enderror"
                                        name="date_of_birth" required autocomplete="current-id">

                                    @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="document_type"
                                    class="col-md-4 col-form-label text-center">{{ __('Tipo de ocumento') }}</label>

                                <div class="col-md-6">
                                    <input id="document_type" type="document_type"
                                        class="form-control @error('document_type') is-invalid @enderror"
                                        name="document_type" required autocomplete="current-id">

                                    @error('document_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-center">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" required autocomplete="current-id">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-center">{{ __('Celular') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror"
                                        name="phone" required autocomplete="current-id">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address"
                                    class="col-md-4 col-form-label text-center">{{ __('Dirección') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="address"
                                        class="form-control @error('address') is-invalid @enderror" name="address" required
                                        autocomplete="current-id">

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="profession"
                                    class="col-md-4 col-form-label text-center">{{ __('Profesión') }}</label>

                                <div class="col-md-6">
                                    <input id="profession" type="profession"
                                        class="form-control @error('profession') is-invalid @enderror" name="profession"
                                        required autocomplete="current-id">

                                    @error('profession')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-center">{{ __('Cargo') }}</label>

                                <div class="col-md-6">
                                    <input id="position" type="position"
                                        class="form-control @error('position') is-invalid @enderror" name="position"
                                        required autocomplete="current-id">

                                    @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="id" class="col-md-4 col-form-label text-center">{{ __('Doc') }}</label>

                                <div class="col-md-6">
                                    <input id="id" type="id"
                                        class="form-control @error('id') is-invalid @enderror" name="id"
                                        required autocomplete="current-id">

                                    @error('id')
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
