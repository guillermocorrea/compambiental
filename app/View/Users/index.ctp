<div class="users index">
	<h2><?php echo __('Usuarios');?></h2>

<table class="table table-striped">
        <thead>
          <tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('primer_apellido');?></th>
			<th><?php echo $this->Paginator->sort('primer_nombre');?></th>
			<th><?php echo $this->Paginator->sort('numero_documento');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('rol');?></th>
			<th><?php echo $this->Paginator->sort('estado');?></th>			
			<th class="actions"><?php echo __('Opciones');?></th>
		  </tr>
	    </thead>
	    <tbody>
	<?php
	foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['primer_apellido']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['primer_nombre']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['numero_documento']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['rol']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['estado']); ?>&nbsp;</td>
		<td class="actions">
			<?php //echo $this->Html->link(__('Ver'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php //echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $user['User']['id']), null, __('Realmente desea # %s?', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} de {:count} en total, desde {:start} hasta {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<!--<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Registrar User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Comparendos'), array('controller' => 'comparendos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Comparendo'), array('controller' => 'comparendos', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
