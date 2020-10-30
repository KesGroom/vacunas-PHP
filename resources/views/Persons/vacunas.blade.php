@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($vacunas as $vacuna)
            <div class="col-md-8">
                <div class="card" style="width: 50rem; height: 25rem; padding: 3rem;">
                <div class="media">                   
                    <div class="media-body"> 
                        <h4 class="mt-5"><b>Vacuna: </b>{{$vacuna->name_vaccine}}</h4>
                        <br>
                            <div class="row">
                                <div class="col">
                                    <p><b>Edad del paciente: </b>{{$vacuna->age_patient}}</p>
                                    <p><b>Dosis de vacuna: </b>{{$vacuna->dose_vaccine}}</p>
                                    <p><b>Día de aplicación: </b>{{$vacuna->application_date}}</p>
                                    
                                </div> 
                                <div class="col">
                                    <p><b>Laboratorio: </b>{{$vacuna->laboratory}}</p>
                                    <p><b>Número de lote: </b>{{$vacuna->batch_number}}</p>
                                    <p><b>IPS: </b>{{$vacuna->IPS}}</p>
                                    <p><b>Refuerzo: </b>{{$vacuna->reinforcement}}</p>
                                    
                                </div>  
                            </div>
                        </div>
                        <img src="{{ asset('storage/vacuna.png') }}" style="width: 6rem; height: 5rem;" class="align-self-start mr-3" alt="...">
                    </div>
                </div>  
                <br><br>              
            </div>    
           
            @endforeach 
            
        </div>

    </div>
    @endsection
