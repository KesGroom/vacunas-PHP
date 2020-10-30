@extends('layouts.app')

@section('content')
<style>
    .espacio {
        margin-left: 100px;
    }
</style>

<table class="table table-hover" style="width:100%">
    
    <thead>
        <th class="espacio" scope="col">Email</th>
        <th scope="col">Telefono</th>
        <th scope="col">Dirrecion</th>
        <th scope="col">Profesion</th>
        <th scope="col">Cargo</th>
       
    </thead>
    <tbody>
        @foreach($official as $vacuna)
        <tr>
            <td>{{$vacuna->email}}</td>
            <td>{{$vacuna->phone}}</td>
            <td>{{$vacuna->address}}</td>
            <td>{{$vacuna->profession}}</td>
            <td>{{$vacuna->position}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
    @endsection
