@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-md-12">

            <h2 > Crear Role </h2>

            <hr>

            {!! Form::open(['route'=>'roles.store']) !!}

            @include('roles.partial.form')


            {!! Form::close() !!}

            </div>
    </div>
                            
            


@endsection
