@extends('layouts.app')
<!--Extiende el layout -->

@section('content')
<!--Empieza la sección -->
<div class="container">
	<div class="col-sm-offset-2 col-sm-8">

		<!-- En este punto IRA el formulario para añadir una nueva actividad -->
		<label for="dni">DNI</label>
		<input name="dni" id="dni" type="text" maxlength="9" size="12" required pattern="[0-9]{8}[a-z,A-Z]" />

		<label for="nombre">Nombre</label>
		<input name="nombre" id="nombre" type="text" maxlength="20" size="20" required />

		<!-- Actividades Actuales -->
		@if (count($actividades) > 0)
		<!--COMPLETA: Si el nº de actividades es >0 -->
		<div class="panel panel-default">
			<div class="panel-heading">
				Actividades Actuales
			</div>

			<div class="panel-body">
				<table class="table table-striped task-table">
					<thead>
						<th>Actividad</th>
						<th>Fecha</th>
					</thead>
					<tbody>
						@foreach ($actividades as $actividad)
						<!--recorre el array de actividades -->
						<tr>
							<td class="table-text">
								<div>{{ $actividad->nombre  }}</div>
							</td>
							<td class="table-text">
								<div>{{ $actividad->fecha}}</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		@endif
	</div>
</div>
@endsection
<!--termina la sección -->