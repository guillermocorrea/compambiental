<div class="comparendos index">
	<div class="page-header">
    <h1><?php echo __('Comparendos');?> <small>Help text</small></h1>
  </div>
	

<table class="table table-bordered">
        <thead>
          <tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('fecha');?></th>
			<th><?php echo $this->Paginator->sort('hora');?></th>
			<th><?php echo $this->Paginator->sort('tipo_sancion');?></th>
			<th><?php echo $this->Paginator->sort('lugar');?></th>
			<th><?php echo $this->Paginator->sort('valor');?></th>
			<th><?php echo $this->Paginator->sort('observaciones');?></th>
			<th><?php echo $this->Paginator->sort('estado');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('concept_id');?></th>
			<th><?php echo $this->Paginator->sort('infractor_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th class="actions"><?php echo __('Opciones');?></th>
		  </tr>
	    </thead>
	    <tbody>
	<?php
	foreach ($comparendos as $comparendo): ?>
	<tr>
		<td><?php echo h($comparendo['Comparendo']['id']); ?>&nbsp;</td>
		<td><?php echo h($comparendo['Comparendo']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($comparendo['Comparendo']['hora']); ?>&nbsp;</td>
		<td><?php echo h($comparendo['Comparendo']['tipo_sancion']); ?>&nbsp;</td>
		<td><?php echo h($comparendo['Comparendo']['lugar']); ?>&nbsp;</td>
		<td><?php echo h($comparendo['Comparendo']['valor']); ?>&nbsp;</td>
		<td><?php echo h($comparendo['Comparendo']['observaciones']); ?>&nbsp;</td>
		<td><?php echo h($comparendo['Comparendo']['estado']); ?>&nbsp;</td>
		<td><?php echo h($comparendo['Comparendo']['created']); ?>&nbsp;</td>
		<td><?php echo h($comparendo['Comparendo']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($comparendo['Concept']['valor'], array('controller' => 'concepts', 'action' => 'view', $comparendo['Concept']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($comparendo['Infractor']['full_name'], array('controller' => 'infractors', 'action' => 'view', $comparendo['Infractor']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($comparendo['User']['numero_documento'], array('controller' => 'users', 'action' => 'view', $comparendo['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $comparendo['Comparendo']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $comparendo['Comparendo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $comparendo['Comparendo']['id']), null, __('Realmente desea eliminar # %s?', $comparendo['Comparendo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} de {:count} registro(s) en total')
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

<div class="span2 offset1 well">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul class="nav nav-pills">
		<li><?php echo $this->Html->link(__('Registrar Comparendo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Concepts'), array('controller' => 'concepts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Concept'), array('controller' => 'concepts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Infractors'), array('controller' => 'infractors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Infractor'), array('controller' => 'infractors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
