@extends('layouts.app')

@section('content')
<style>
    .espacio {
        margin-left: 100px;
    }
</style>

<table class="table table-hover" style="width:100%">
    
    <thead>
        <th class="espacio" scope="col">Edad del paciente</th>
        <th scope="col">Nombre</th>
        <th scope="col">Dose vaccine</th>
        <th scope="col">aplicacion date</th>
        <th scope="col">laboratory</th>
        
        <th scope="col">IPS</th>
  
        <th scope="col">reinforcement</th>
       
    </thead>
    <tbody>
        @foreach($vacuna as $vacuna)
        <tr>
            <td>{{$vacuna->age_patient}}</td>
            <td>{{$vacuna->name_vaccine}}</td>
            <td>{{$vacuna->dose_vaccine}}</td>
            <td>{{$vacuna->application_date}}</td>
            <td>{{$vacuna->laboratory}}</td>
            <td>{{$vacuna->IPS}}</td>
            <td>{{$vacuna->reinforcement}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
    @endsection
