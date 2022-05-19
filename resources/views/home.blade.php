@extends('layout')
@section('title','Inicio')
@section('content')
	<br>	
	<div class="container">
		<div class="card">
		 	<div class="card-header">LISTA DE ALUMNOS</div>
		  	<div class="card-body">			
			  	<table class='table table-hover table-striped'>
					<thead>
						<tr>
							<th>Id</th>
							<th>Nombres </th>							
							<th>Apellidos</th>							
							<th>Identificación</th>
							<th>Genero</th>						
							<th>Fecha Nacimiento</th>
							<th>Edad</th>								
							<th>Profesor</th>	
							<th>Curso</th>								
							<th>Grupo Etario</th>
						</tr>
					</thead>
					<tbody>						
						@forelse($alumnos as $alumnoItem)							
								<tr>							
									<td>{{ $alumnoItem->id }}</td>
									<td>{{ $alumnoItem->primer_nombre.' '.$alumnoItem->segundo_nombre }}</td>								
									<td>{{ $alumnoItem->primer_apellido. ' '.$alumnoItem->segundo_apellido }}</td>								
									<td>{{ $alumnoItem->identificacion }}</td>
									<td>{{ $alumnoItem->genero }}</td>									
									<td>{{ date('Y/m/d', strtotime($alumnoItem->fch_nacimiento)) }}</td>
									<td></td>								
									<td>{{ $alumnoItem->profesor }}</td>
									<td>{{ $alumnoItem->curso }}</td>															
									<td></td>
									<td>
										<a href="{{ route('crear.edit', $alumnoItem->id ) }}"><button class='btn btn-success btn-sm'>Editar</button></a>
									</td>
									<td>								
										<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $alumnoItem->id }}">
										  Eliminar
										</button>									
									</td>
								</tr>							
						@include('partials.delete')						
						@empty
							<td>No hay registros para mostrar</td>													
						@endforelse	
					</tbody>
				</table>
		    </div>
	  	</div>
	</div>
@endsection

