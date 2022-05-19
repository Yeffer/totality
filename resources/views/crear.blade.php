@extends('layout')
@section('title','crear')
@section('content')	

<div class="container" id="productos">
<br>
<div class="card">
  	<div class="card-header">NUEVO ALUMNO</div>
 		<div class="card-body">
			<form class="form-horizontal" id="clienteForm" method="POST" action="{{ route('crear.store') }}">
				@csrf
			  	<div class="form-group row">
			     	<label class="control-label col-sm-2" for="primerNombre">Primer Nombre:</label>
			    	<div class="col-sm-10">          
				        <input type="text" 
				        	   name="primerNombre"
				        	   id="primerNombre" 
				        	   placeholder="Ingrese primer nombre" 
				        	   class="form-control" 
				        	   value="" 
				        >
				        {!! $errors->first('primerNombre', '<small>:message</small><br>')  !!}
			      	</div>
				</div>
				<div class="form-group row">
			     	<label class="control-label col-sm-2" for="segundoNombre">Segundo Nombre:</label>
			    	<div class="col-sm-10">          
				        <input type="text" 
				        	   name="segundoNombre"
				        	   id="segundoNombre" 
				        	   placeholder="Ingrese segundo nombre" 
				        	   class="form-control" 
				        	   value="" 
				        >
				        {!! $errors->first('segundoNombre', '<small>:message</small><br>')  !!}
			      	</div>
				</div>
				<div class="form-group row">
			     	<label class="control-label col-sm-2" for="primerApellido">Primer Apellido:</label>
			    	<div class="col-sm-10">          
				        <input type="text" 
				        	   name="primerApellido"
				        	   id="primerApellido" 
				        	   placeholder="Ingrese primer apellido" 
				        	   class="form-control" 
				        	   value="" 
				        >
				        {!! $errors->first('primerApellido', '<small>:message</small><br>')  !!}
			      	</div>
				</div>
				<div class="form-group row">
			     	<label class="control-label col-sm-2" for="segundoApellido">Segundo Apellido:</label>
			    	<div class="col-sm-10">          
				        <input type="text" 
				        	   name="segundoApellido"
				        	   id="segundoApellido" 
				        	   placeholder="Ingrese segundo apellido" 
				        	   class="form-control" 
				        	   value="" 
				        >
				        {!! $errors->first('segundoApellido', '<small>:message</small><br>')  !!}
			      	</div>
				</div>
			    <div class="form-group row">
			      	<label class="control-label col-sm-2" for="identificacion">Identificación:</label>
			     	<div class="col-sm-10">
			        	<input type="number" 
			        		   id="identificacion"
			        		   placeholder="Ingrese identificacion"
			        		   name="identificacion"
			        		   class="form-control"
			        		   value="">
			        	{!! $errors->first('identificacion', '<small>:message</small><br>')  !!}
			      	</div>
			    </div>
			    <div class="form-group row">
			      	<label class="control-label col-sm-2" for="categoria">Genero:</label>
			      	<div class="col-sm-10">          
			        	<select class="form-control" id="genero"   name="genero" aria-label="Default select example">
			        		<option value="">Seleccione...</option> 			        		
			        		<option value="masculino">Masculino</option>
			        		<option value="femenino">Femenino</option>							
			        	</select>
			        	{!! $errors->first('genero', '<small>:message</small><br>')  !!}		
			      	</div>
		    	</div>
			    <div class="form-group row">
			      	<label class="control-label col-sm-2" for="fchNacimiento">Fecha de nacimiento:</label>
			     	<div class="col-sm-10">
			     		<input type="text" 
			     			   id="datepicker" 
			     			   name="date"
			     			   placeholder="Ingrese fecha de nacimiento"
			     			   class="date form-control"
			     			   value="">
			        	{!! $errors->first('fchNacimiento', '<small>:message</small><br>')  !!}
			      	</div>
			    </div>
			   	<div class="form-group row">
			      	<label class="control-label col-sm-2" for="profesor">Profesor:</label>
			      	<div class="col-sm-10">          
			        	<select class="form-control" id="profesor"   name="profesor" aria-label="Default select example">
			        		<option value="">Seleccione...</option> 
			        		@forelse($profesor as $profesorItem)
			        			<option value="{{ $profesorItem->id}}">{{ $profesorItem->nombre}}</option>
							@empty
								<td>No hay registros para mostrar</td>
							@endforelse									        	
			        	</select>
			        	{!! $errors->first('profesor', '<small>:message</small><br>')  !!}		
			      	</div>
		    	</div>

		    	<div class="form-group row">
			      	<label class="control-label col-sm-2" for="curso">Curso:</label>
			      	<div class="col-sm-10">          
			        	<select class="form-control" id="curso"   name="curso" aria-label="Default select example">
			        		<option value="">Seleccione...</option> 
			        		@forelse($curso as $cursoItem)
			        			<option value="{{ $cursoItem->id}}">{{ $cursoItem->nombre}}</option>
							@empty
								<td>No hay registros para mostrar</td>
							@endforelse									        	
			        	</select>
			        	{!! $errors->first('curso', '<small>:message</small><br>')  !!}		
			      	</div>
		    	</div>
		    	<div class="form-group row">        
		      		<div class="col-sm-offset-2 col-sm-10">
		        		<button type="submit" class="btn btn-primary" id="registro">Nuevo</button>
		      		</div>
		    	</div>
		  	</form>
  		</div>
	</div>
@endsection

@section('script')
  <script type="text/javascript">
        $('#datepicker').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
         });
    </script>
@endsection

