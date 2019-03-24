@extends('layouts.app')

@section('content')
    <div class="container">

            <div class="col-md-offset-2">
                <div class="card">
                    <div class="card-title"> <h2> Producto </h2></div>

                    <div class="card-body">
                        @if (session('info'))
                            <div class="alert alert-success">
                                {{ session('info') }}
                            </div>
                        @endif

                        <p> <strong>Producto: </strong> {{$product->name}} </p>

                        <hr>
                        
                        <p> <strong>Descripcion: </strong> {{$product->description}} </p>


                    </div>
                </div>
            </div>

    </div>
@endsection