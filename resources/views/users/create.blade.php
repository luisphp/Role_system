@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-md-12">

            <h2 > Crear Usuario </h2>

            {!! Form::open(['route'=>'users.store']) !!}

            @include('users.partial.form')


            {!! Form::close() !!}

            </div>
    </div>
                            
            


@endsection
