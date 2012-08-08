<div class="row">
	<div class="span8">

		<ul class="breadcrumb">
		  <li>
		    <?php echo $this->Html->link('Inicio', '/')?>
 <span class="divider">/</span>
		  </li>
		  <li>
		    <?php echo $this->Html->link('Concepts', '/concepts')?>
 <span class="divider">/</span>
		  </li>
		  <li class="active">View</li>
		</ul>


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
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div> <!-- end main -->

<div class="span2 offset1">
	<h3>Opciones</h3>

	<ul class="nav nav-pills nav-stacked">
		<li><?php echo $this->Html->link(__('Editar Concept'), array('action' => 'edit', $concept['Concept']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Concept'), array('action' => 'delete', $concept['Concept']['id']), null, __('Realmente desea eliminar # %s?', $concept['Concept']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Concepts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Concept'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Infractions'), array('controller' => 'infractions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar| Infraction'), array('controller' => 'infractions', 'action' => 'add')); ?> </li>
	</ul>
</div>

</div><!-- end row -->

