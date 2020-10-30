@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="table">
            <thead class="bg-primary text-white">
                <th>Numero de documento</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Fecha de nacimiento</th>
                <th>Tipo de documento</th>
            </thead>
            <tbody>
                @foreach ($personas as $persona)
                    <tr>
                        <td>{{$persona->id}}</td>
                        <td>{{$persona->name}}</td>
                        <td>{{$persona->lastname}}</td>
                        <td>{{$persona->date_of_birth}}</td>
                        <td>{{$persona->document_type}}</td>
                    
                    </tr>
                @endforeach
            </tbody>
        </table>
          </div>
    </div>
</div>
@endsection
