<div class="infractors index">
	<div class="page-header">
    <h1><?php echo __('Personas');?> <small>Listado de personas registradas</small></h1>
  </div>
	

<table class="table table-bordered">
        <thead>
          <tr>
			<th><?php echo $this->Paginator->sort('tipo_documento');?></th>
			<th><?php echo $this->Paginator->sort('numero_documento');?></th>
			<th><?php echo $this->Paginator->sort('nombre_razon_social');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('telefono');?></th>
			<th><?php echo $this->Paginator->sort('direccion');?></th>
			<th><?php echo $this->Paginator->sort('estado');?></th>
			<th class="actions"><?php echo __('Opciones');?></th>
		  </tr>
	    </thead>
	    <tbody>
	<?php
	foreach ($infractors as $infractor): ?>
	<tr>
		<td><?php echo h($infractor['Infractor']['tipo_documento']); ?>&nbsp;</td>
		<td><?php echo h($infractor['Infractor']['numero_documento']); ?>&nbsp;</td>
		<td><?php echo h($infractor['Infractor']['nombre_razon_social']); ?>&nbsp;</td>
		<td><?php echo h($infractor['Infractor']['email']); ?>&nbsp;</td>
		<td><?php echo h($infractor['Infractor']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($infractor['Infractor']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($infractor['Infractor']['estado']); ?>&nbsp;</td>
		<td class="actions">
			<?php //echo $this->Html->link(__('Ver'), array('action' => 'view', $infractor['Infractor']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $infractor['Infractor']['id'])); ?>
			<?php //echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $infractor['Infractor']['id']), null, __('Realmente desea eliminar # %s?', $infractor['Infractor']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} de {:count} en total')
	));
	?>	</p>

	<div class="pagination">
		<ul>
	<?php
		echo $this->Paginator->prev('&laquo; ' . __('Ant'), array('escape'=>false, 'tag' => 'li'), null, array('class' => 'active', 'tag' => 'li'));
		echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentClass' => 'active'));
		echo $this->Paginator->next(__('Sig') . ' &raquo;', array('escape'=>false, 'tag' => 'li'), null, array('class' => 'active', 'tag' => 'li'));
	?>
		</ul>
	</div> <!-- end pagination -->
</div>

<!--<div class="span2 offset1 well">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul class="nav nav-pills">
		<li><?php echo $this->Html->link(__('Registrar Infractor'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Comparendos'), array('controller' => 'comparendos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Comparendo'), array('controller' => 'comparendos', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->