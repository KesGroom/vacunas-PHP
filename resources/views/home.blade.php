@extends('layouts.app')

@section('content')
<div class="container" style="height: 48rem; width: 100%; background-image: url({{ asset('storage/dash.png') }});">
    <div class="row justify-content-center">
       
         
               <h1>El fruto de tu trabajo es muy valioso, <span class="badge badge-success">Bienvenido</span></h1>

               
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('') }}
                
           
       
    </div>
</div>
@endsection
