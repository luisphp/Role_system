@extends('layouts.app')

@section('content')

	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-title"> 

                	<h2> Roles <span class="pull-right"> <a role="button" class="btn btn-primary float-right" href="{{ route('roles.create') }}"> Crear </a> </span> </h2>

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

						  	@foreach($roles as $role)
						    <tr>
						      <th scope="row">{{$role->id}}</th>
						      
						      <td>{{$role->name}}</td>

						      <td>
						      	<div class="btn-group" role="group">
						      @can('roles.show')
						      
						      <a href="{{route('roles.show', $role->id)}}" class="btn btn-primary btn-sm">Show</a>

						      @endcan

						      @can('roles.edit')

						      <a href="{{route('roles.edit', $role->id)}}" class="btn btn-info btn-sm">Edit</a>

						      @endcan

						      <span class="pull-left">
						      @can('roles.destroy')
						      	
						      {!! Form::open(['route' =>['roles.destroy', $role->id], 'method' => 'DELETE']) !!}

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

						{{$roles->render()}}

					</div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection