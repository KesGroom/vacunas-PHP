@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white" style="background: blue">
                        <h3 class="text-center">Registrar persona <span
                                class="badge badge badge-success text-center">Nueva</span></h3>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('Persons.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="id" class="col-md-4 col-form-label text-center">{{ __('Documento') }}</label>

                                <div class="col-md-6">
                                    <input id="id" type="text" class="form-control @error('id') is-invalid @enderror"
                                        name="id" value="{{ old('id') }}" required autocomplete="id" autofocus>

                                    @error('id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="document_type" class="col-md-4 col-form-label text-center">Tipo de
                                    documento</label>
                                <select name="document_type" id="document_type">
                                    <option value="TI">TI</option>
                                    <option value="CC">CC</option>
                                    <option value="RC">CE</option>
                                </select>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-center">{{ __('Nombres') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" required autocomplete="current-name">

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
                                    <input id="lastname" type="text"
                                        class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                        required autocomplete="current-lastname">

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
                                        name="date_of_birth" required autocomplete="current-date_of_birth">

                                    @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                       

                            <div class="form-group row">
                                <label for="scanned_image"
                                    class="col-md-4 col-form-label text-center">{{ __('Foto') }}</label>

                                <div class="col-md-6">
                                    <input id="scanned_image" type="text"
                                        class="form-control @error('scanned_image') is-invalid @enderror"
                                        name="scanned_image" required autocomplete="current-scanned_image">

                                    @error('scanned_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-header bg-primary text-white" style="background: blue">
                                <h3 class="text-center">Registrar Carnet de Vacunación Virtual (CVV)</h3>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="no_civil_registry"
                                    class="col-md-4 col-form-label text-center">{{ __('Número de registro civil') }}</label>

                                <div class="col-md-6">
                                    <input id="no_civil_registry" type="text"
                                        class="form-control @error('no_civil_registry') is-invalid @enderror"
                                        name="no_civil_registry" required autocomplete="current-no_civil_registry">

                                    @error('no_civil_registry')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-center">Género</label>
                                <select name="gender" id="gender">
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label for="weight" class="col-md-4 col-form-label text-center">{{ __('Peso') }}</label>

                                <div class="col-md-6">
                                    <input id="weight" type="text"
                                        class="form-control @error('weight') is-invalid @enderror" name="weight" required
                                        autocomplete="current-weight">
                                    @error('weight')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name_responsible"
                                    class="col-md-4 col-form-label text-center">{{ __('Nombre completo') }}</label>

                                <div class="col-md-6">
                                    <input id="name_responsible" type="text"
                                        class="form-control @error('name_responsible') is-invalid @enderror"
                                        name="name_responsible" required autocomplete="current-name_responsible">

                                    @error('name_responsible')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address_responsible"
                                    class="col-md-4 col-form-label text-center">{{ __('Dirección') }}</label>

                                <div class="col-md-6">
                                    <input id="address_responsible" type="text"
                                        class="form-control @error('address_responsible') is-invalid @enderror"
                                        name="address_responsible" required autocomplete="current-address_responsible">

                                    @error('address_responsible')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="city_responsible"
                                    class="col-md-4 col-form-label text-center">{{ __('Ciudad') }}</label>

                                <div class="col-md-6">
                                    <input id="city_responsible" type="text"
                                        class="form-control @error('city_responsible') is-invalid @enderror"
                                        name="city_responsible" required autocomplete="current-city_responsible">

                                    @error('city_responsible')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="institution_name"
                                    class="col-md-4 col-form-label text-center">{{ __('institution_name') }}</label>

                                <div class="col-md-6">
                                    <input id="institution_name" type="text"
                                        class="form-control @error('institution_name') is-invalid @enderror"
                                        name="institution_name" required autocomplete="current-institution_name">

                                    @error('institution_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-header bg-primary text-white" style="background: blue">
                                <h3 class="text-center">Primer vacuna</h3>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="age_patient"
                                    class="col-md-4 col-form-label text-center">{{ __('Edad del paciente') }}</label>

                                <div class="col-md-6">
                                    <input id="age_patient" type="number"
                                        class="form-control @error('age_patient') is-invalid @enderror" name="age_patient"
                                        required autocomplete="current-age_patient">

                                    @error('age_patient')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name_vaccine"
                                    class="col-md-4 col-form-label text-center">{{ __('Nombre de la vacuna') }}</label>

                                <div class="col-md-6">
                                    <input id="name_vaccine" type="text"
                                        class="form-control @error('name_vaccine') is-invalid @enderror" name="name_vaccine"
                                        required autocomplete="current-name_vaccine">

                                    @error('name_vaccine')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dose_vaccine"
                                    class="col-md-4 col-form-label text-center">{{ __('Dosis de vacuna') }}</label>

                                <div class="col-md-6">
                                    <input id="dose_vaccine" type="text"
                                        class="form-control @error('dose_vaccine') is-invalid @enderror" name="dose_vaccine"
                                        required autocomplete="current-dose_vaccine">

                                    @error('dose_vaccine')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="application_date"
                                    class="col-md-4 col-form-label text-center">{{ __('Día de la aplicación') }}</label>

                                <div class="col-md-6">
                                    <input id="application_date" type="date"
                                        class="form-control @error('application_date') is-invalid @enderror"
                                        name="application_date" required autocomplete="current-application_date">

                                    @error('application_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="laboratory"
                                    class="col-md-4 col-form-label text-center">{{ __('Laboratorio') }}</label>

                                <div class="col-md-6">
                                    <input id="laboratory" type="text"
                                        class="form-control @error('laboratory') is-invalid @enderror" name="laboratory"
                                        required autocomplete="current-laboratory">

                                    @error('laboratory')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="batch_number"
                                    class="col-md-4 col-form-label text-center">{{ __('Número de lote') }}</label>

                                <div class="col-md-6">
                                    <input id="batch_number" type="number"
                                        class="form-control @error('batch_number') is-invalid @enderror" name="batch_number"
                                        required autocomplete="current-batch_number">

                                    @error('batch_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="IPS" class="col-md-4 col-form-label text-center">{{ __('IPS') }}</label>

                                <div class="col-md-6">
                                    <input id="IPS" type="text" class="form-control @error('IPS') is-invalid @enderror"
                                        name="IPS" required autocomplete="current-IPS">

                                    @error('IPS')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="reinforcement"
                                    class="col-md-4 col-form-label text-center">{{ __('Reforzamiento') }}</label>

                                <div class="col-md-6">
                                    <input id="reinforcement" type="date"
                                        class="form-control @error('reinforcement') is-invalid @enderror"
                                        name="reinforcement" required autocomplete="current-reinforcement">

                                    @error('reinforcement')
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
@endsection
