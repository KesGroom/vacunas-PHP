@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($carnet as $carnets)
            <div class="col-md-8">
                <div class="card" style="width: 50rem; height: 25rem; padding: 3rem;">
                <div class="media">                   
                    <img src="{{ asset('storage/peerson.png') }}" style="width: 6rem; height: 5rem;" class="align-self-start mr-3" alt="...">
                        <div class="media-body">    
                            <h4 class="mt-5">{{$carnets->name_responsible}}</h4>
                            <p><b>Dirección: </b>{{$carnets->address_responsible}}</p>
                            <p><b>Ciudad: </b>{{$carnets->city_responsible}}</p>
                            <p><b>Género: </b>{{$carnets->gender}}</p>
                            <p><b>Peso: </b>{{$carnets->weight}}</p>
                            <p><b>Número de registro civil: </b>{{$carnets->no_civil_registry}}</p>
                        </div>
                        <img src="{{ asset('storage/iconoWhite.png') }}" style="width: 6rem; height: 5rem;" class="align-self-start mr-3" alt="...">
                    </div>
                </div>  
                <br><br>              
            </div>    
           
            @endforeach 
            
        </div>

    </div>
    @endsection
