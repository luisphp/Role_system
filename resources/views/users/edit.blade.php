@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <h2 class="card-title">Actualizar Usuario </h2>

                    <div class="card-body">
                        @if (session('info'))
                            <div class="alert alert-success">
                                {{ session('info') }}
                            </div>
                        @endif

                        {!! Form::model($user, ['route' => ['users.update', $user->id],'method' => 'PUT']) !!}

                        @include('users.partial.form')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection