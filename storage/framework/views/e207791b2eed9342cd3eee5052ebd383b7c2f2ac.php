<?php $__env->startSection('contenido'); ?>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Proveedor</h3>
			<p><?php echo e($proveedores->proveedor); ?></p>
		
			<div class="form-group">
				<label for="correo">Correo</label>
				<p><?php echo e($proveedor->correo); ?></p>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<p><?php echo e($proveedor->password); ?></p>
			</div>
				<div class="form-group">
				<label for="proveedor">Proveedor</label>
				<p><?php echo e($proveedor->proveedor}</p>
			</div>
			<div class="form-group">
				<label for="telefono">Telefono</label>
				<p>{{$proveedor->telefono); ?></p>
			</div>
			<div class="form-group">
				<label for="direccion">Direccion</label>
				<p><?php echo e($proveedor->direccion); ?></p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="panel panel-primary">
			<div class="panel-body">
				
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<table id="prov_cat" class="table table-striped table-bordered table-condensed table-hover">
						<thead style="background-color:#A9D0F5">
							<th>IdCat</th>
							<th>Categoria</th>
						</thead>
						
						<tbody>
							<?php foreach($prov_cat as $p): ?>
							<tr>
								<td><?php echo e($p->idcat); ?></td>
								<td><?php echo e($p->nombre); ?></td>

							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

				
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cpanelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>