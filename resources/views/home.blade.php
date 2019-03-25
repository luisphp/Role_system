
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel">
                <div class="panel-title">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('info') }}
                        </div>
                    @endif

                    Iniciaste sesion!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
