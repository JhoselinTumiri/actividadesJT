<!--Extiende el layout -->

<?php $__env->startSection('content'); ?>
<!--Empieza la sección -->
<div class="container">
	<div class="col-sm-offset-2 col-sm-8">

		<!-- En este punto IRA el formulario para añadir una nueva actividad -->
		<label for="dni">DNI</label>
		<input name="dni" id="dni" type="text" maxlength="9" size="12" required pattern="[0-9]{8}[a-z,A-Z]" />

		<label for="nombre">Nombre</label>
		<input name="nombre" id="nombre" type="text" maxlength="20" size="20" required />

		<!-- Actividades Actuales -->
		<?php if(count($actividades) > 0): ?>
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
						<?php $__currentLoopData = $actividades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actividad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<!--recorre el array de actividades -->
						<tr>
							<td class="table-text">
								<div><?php echo e($actividad->nombre); ?></div>
							</td>
							<td class="table-text">
								<div><?php echo e($actividad->fecha); ?></div>
							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>
<?php $__env->stopSection(); ?>
<!--termina la sección -->
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelJT\actividadesJT\resources\views/actividades.blade.php ENDPATH**/ ?>