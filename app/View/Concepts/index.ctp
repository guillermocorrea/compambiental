<div class="concepts index">
	<div class="page-header">
    <h1><?php echo __('Concepts');?> <small>Help text</small></h1>
  </div>
	

<table class="table table-bordered">
        <thead>
          <tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('concepto');?></th>
			<th><?php echo $this->Paginator->sort('valor');?></th>
			<th><?php echo $this->Paginator->sort('tipo');?></th>
			<th><?php echo $this->Paginator->sort('estado');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('infraction_id');?></th>
			<th class="actions"><?php echo __('Opciones');?></th>
		  </tr>
	    </thead>
	    <tbody>
	<?php
	foreach ($concepts as $concept): ?>
	<tr>
		<td><?php echo h($concept['Concept']['id']); ?>&nbsp;</td>
		<td><?php echo h($concept['Concept']['concepto']); ?>&nbsp;</td>
		<td><?php echo h($concept['Concept']['valor']); ?>&nbsp;</td>
		<td><?php echo h($concept['Concept']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($concept['Concept']['estado']); ?>&nbsp;</td>
		<td><?php echo h($concept['Concept']['created']); ?>&nbsp;</td>
		<td><?php echo h($concept['Concept']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($concept['Infraction']['id'], array('controller' => 'infractions', 'action' => 'view', $concept['Infraction']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $concept['Concept']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $concept['Concept']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $concept['Concept']['id']), null, __('Realmente desea # %s?', $concept['Concept']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} de {:count} en total')
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

<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Registrar Concept'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Infractions'), array('controller' => 'infractions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Infraction'), array('controller' => 'infractions', 'action' => 'add')); ?> </li>
	</ul>
</div>
