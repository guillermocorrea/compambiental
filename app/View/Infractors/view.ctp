<div class="row">
	<div class="span8">

		<ul class="breadcrumb">
		  <li>
		    <?php echo $this->Html->link('Inicio', '/')?>
 <span class="divider">/</span>
		  </li>
		  <li>
		    <?php echo $this->Html->link('Infractors', '/infractors')?>
 <span class="divider">/</span>
		  </li>
		  <li class="active">View</li>
		</ul>


<table class="table table-bordered">
        <thead>
          <tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('tipo_documento');?></th>
			<th><?php echo $this->Paginator->sort('numero_documento');?></th>
			<th><?php echo $this->Paginator->sort('nombre_razon_social');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('telefono');?></th>
			<th><?php echo $this->Paginator->sort('direccion');?></th>
			<th><?php echo $this->Paginator->sort('estado');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			  </tr>
	    </thead>
	    <tbody>
	<?php
	foreach ($infractors as $infractor): ?>
	<tr>
		<td><?php echo h($infractor['Infractor']['id']); ?>&nbsp;</td>
		<td><?php echo h($infractor['Infractor']['tipo_documento']); ?>&nbsp;</td>
		<td><?php echo h($infractor['Infractor']['numero_documento']); ?>&nbsp;</td>
		<td><?php echo h($infractor['Infractor']['nombre_razon_social']); ?>&nbsp;</td>
		<td><?php echo h($infractor['Infractor']['email']); ?>&nbsp;</td>
		<td><?php echo h($infractor['Infractor']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($infractor['Infractor']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($infractor['Infractor']['estado']); ?>&nbsp;</td>
		<td><?php echo h($infractor['Infractor']['created']); ?>&nbsp;</td>
		<td><?php echo h($infractor['Infractor']['modified']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div> <!-- end main -->

<div class="span2 offset1">
	<h3>Opciones</h3>

	<ul class="nav nav-pills nav-stacked">
		<li><?php echo $this->Html->link(__('Editar Infractor'), array('action' => 'edit', $infractor['Infractor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Infractor'), array('action' => 'delete', $infractor['Infractor']['id']), null, __('Realmente desea eliminar # %s?', $infractor['Infractor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Infractors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Infractor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Comparendos'), array('controller' => 'comparendos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar| Comparendo'), array('controller' => 'comparendos', 'action' => 'add')); ?> </li>
	</ul>
</div>

</div><!-- end row -->

<div class="row">
	<div class="span12">
	<h3><?php echo __('Related Comparendos');?></h3>
	<?php if (!empty($infractor['Comparendo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __(' Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Hora'); ?></th>
		<th><?php echo __('Tipo Sancion'); ?></th>
		<th><?php echo __('Lugar'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Infraction Id'); ?></th>
		<th><?php echo __('Infractor Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($infractor['Comparendo'] as $comparendo): ?>
		<tr>
			<td><?php echo $comparendo[' id'];?></td>
			<td><?php echo $comparendo['fecha'];?></td>
			<td><?php echo $comparendo['hora'];?></td>
			<td><?php echo $comparendo['tipo_sancion'];?></td>
			<td><?php echo $comparendo['lugar'];?></td>
			<td><?php echo $comparendo['valor'];?></td>
			<td><?php echo $comparendo['observaciones'];?></td>
			<td><?php echo $comparendo['estado'];?></td>
			<td><?php echo $comparendo['created'];?></td>
			<td><?php echo $comparendo['modified'];?></td>
			<td><?php echo $comparendo['infraction_id'];?></td>
			<td><?php echo $comparendo['infractor_id'];?></td>
			<td><?php echo $comparendo['user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'comparendos', 'action' => 'view', $comparendo['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'comparendos', 'action' => 'edit', $comparendo['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'comparendos', 'action' => 'delete', $comparendo['id']), null, __('Realmente desea eliminar # %s?', $comparendo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Registrar Comparendo'), array('controller' => 'comparendos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
</div> <!-- end related -->
