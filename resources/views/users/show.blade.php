@extends('layouts.app')

@section('content')
    <div class="container">
<div class="card-title"> <h1> Usuario </h1></div>
            <div class="col-md-offset-2">
                 
                <div class="card">
                   

                    <div class="card-body">
                        @if (session('info'))
                            <div class="alert alert-success">
                                {{ session('info') }}
                            </div>
                        @endif

                        <h3> Nombre: </h3> <h4>{{$user->name}}</h4> 

                        <hr>
                        
                        <h3> Correo: </h3> <h4> {{$user->email}} </h4>


                    </div>
                </div>
            </div>

    </div>
@endsection