@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <h2 class="card-title">Actualizar Producto </h2>

                    <div class="card-body">
                        @if (session('info'))
                            <div class="alert alert-success">
                                {{ session('info') }}
                            </div>
                        @endif

                        {!! Form::model($product, ['route' => ['products.update', $product->id],'method' => 'PUT']) !!}

                        @include('products.partial.form')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection