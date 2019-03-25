@extends('layouts.app')

@section('content')

	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-title"> 

                	<h2> Usuarios <span class="pull-right"> <a role="button" class="btn btn-primary float-right" href="{{ route('users.create') }}"> Crear </a> </span> </h2>

                	</div>

                <div class="card-body">

                    @if (session('info'))

                        <div class="alert alert-success">

                            {{ session('info') }}

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

						  	@foreach($users as $user)
						    <tr>
						      <th scope="row">{{$user->id}}</th>
						      
						      <td>{{$user->name}}</td>

						      <td>
						      	<div class="btn-group" role="group">
						      @can('users.show')
						      
						      <a href="{{route('users.show', $user->id)}}" class="btn btn-primary btn-sm">Show</a>

						      @endcan

						      @can('users.edit')

						      <a href="{{route('users.edit', $user->id)}}" class="btn btn-info btn-sm">Edit</a>

						      @endcan

						      <span class="pull-left">
						      @can('users.destroy')
						      	
						      {!! Form::open(['route' =>['users.destroy', $user->id], 'method' => 'DELETE']) !!}

						      	<button class="btn btn-danger btn-sm">Eliminar</button>

						      {!! Form::close() !!}

						      @endcan
						      	</span>
						      </div>
						     </td>
						



						    </tr>
						    @endforeach
						  
						  </tbody>
					</table>

					<div class="float-right">

						{{$users->render()}}

					</div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection