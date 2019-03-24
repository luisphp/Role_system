@extends('layouts.app')

@section('content')

	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-heading"> 

                	<h2>  Productos </h2> 

                	<span class="float-right">

                		<a href="{{route('products.create')}}" class="btn-primary btn-sm float-right">Crear</a> 

                	</span>

                	</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <table class="table table-hover">
						  <thead>
						    <tr>
						      <th scope="col">id</th>
						      <th scope="col">Nombre</th>
						      <th scope="col">Action</th>
						    </tr>
						  </thead>
						  <tbody>

						  	@foreach($products as $product)
						    <tr>
						      <th scope="row">{{$product->id}}</th>
						      <td>{{$product->name}}</td>


						      @can('products.show')
						      
						      <td><a href="{{route('products.show', $product->id)}}" class="btn-primary btn-sm">Show</td>

						      @endcan

						      @can('products.edit')

						      <td><a href="{{route('products.edit', $product->id)}}" class=" btn-info btn-sm">Edit</td>

						      @endcan

						      <td>
						      @can('products.destroy')

						      {!! Form::open(['route' =>['products.destroy',$product->id], 'method' => 'DELETE']) !!}

						      	<button class="btn btn-danger btn-sm">Eliminar</button>

						      {!! Form::close() !!}

						      @endcan
						      <td>



						    </tr>
						    @endforeach
						  
						  </tbody>
					</table>

					{{$products->render()}}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection