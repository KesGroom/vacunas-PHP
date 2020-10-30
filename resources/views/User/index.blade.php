  
@extends('layouts.app')
@section('content')
    
{{-- contenido en la plantilla --}}
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white" style="background: blue">
                    <h3 class="text-center">Consultar vacunas </h3>
                </div>

                <div class="card-body">
 
                    <label
                    class="col-md-4 col-form-label text-center">Documento</label>
                        <form class="form-inline ml-3" action="{{route('User.index')}}" method="GET">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" name="search" type="search">
                                <div class="input-group-append">
    
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>                                 
                
                </div>
            </div>
        </div>
          </div>
    </div>
       
@endsection