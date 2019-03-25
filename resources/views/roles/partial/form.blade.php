<div class="form-group">

	{!! Form::label('name', 'Nombre del Role') !!}
	{!! Form::text('name', null,['class' => 'form-control']) !!}

</div>

<div class="form-group">

	{!! Form::label('slug', 'Slug') !!}
	{!! Form::text('slug', null,['class' => 'form-control']) !!}

</div>

<div class="form-group">

	{!! Form::label('description', 'Descripcion del Role') !!}
	{!! Form::text('description', null,['class' => 'form-control']) !!}

</div>

<hr>

<h3>Permiso Especial</h3>

<div class="form-group">

	<label> {!! Form::radio('special', 'all-access') !!} Acceso Total</label> <br>
	<label> {!! Form::radio('special', 'no-access') !!} Ningun Aceeso</label>

</div>

<hr>

<h3>Lista de Permisos</h3>

	<div class="form-group">

		<ul class="list-unstyled">

			@foreach($permissions as $permission)

			<li>

				<label>

								{!! Form::checkbox('permissions[]', $permission->id , null) !!}
								{{ $permission->name }}
								<em>

									({{$permission->description  ?: 'Sin Descripcion'}})

								</em>

				</label>

			</li>

			@endforeach

		</ul>

	</div>

<div>
	{{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
</div>
	
