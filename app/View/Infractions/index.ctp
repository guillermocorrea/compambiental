<div class="infractions index">
  <div class="page-header">
    <h1>Infracciones <small>Listado de los tipos de infracciones</small></h1>
  </div>

<table class="table table-bordered">
        <thead>
          <tr>
			<th><?php echo $this->Paginator->sort('codigo');?></th>
			<th><?php echo $this->Paginator->sort('descripcion');?></th>
			<th><?php echo $this->Paginator->sort('estado');?></th>
			<th class="actions"><?php echo __('Opciones');?></th>
		  </tr>
	    </thead>
	    <tbody>
	<?php
	foreach ($infractions as $infraction): ?>
	<tr>
		<td><?php echo h($infraction['Infraction']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($infraction['Infraction']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($infraction['Infraction']['estado']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $infraction['Infraction']['id'])); ?>
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
		echo $this->Paginator->prev(
			'&laquo; ' . __('Ant'), 
			array('escape'=>false, 'tag' => 'li'), 
			null, 
			array('class' => 'active', 'tag' => 'li'));

		echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentClass' => 'active'));

		echo $this->Paginator->next(
			__('Sig') . ' &raquo;', 
			array('escape'=>false, 'tag' => 'li'), 
			null, 
			array('class' => 'active', 'tag' => 'li'));
	?>
		</ul>
	</div> <!-- end pagination -->
</div>
<!--<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Registrar Infraction'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Comparendos'), array('controller' => 'comparendos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Comparendo'), array('controller' => 'comparendos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Values'), array('controller' => 'concepts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Value'), array('controller' => 'concepts', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->