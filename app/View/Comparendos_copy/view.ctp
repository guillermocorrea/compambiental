<div class="row">
	<div class="span8">

		<ul class="breadcrumb">
		  <li>
		    <?php echo $this->Html->link('Inicio', '/')?>
 <span class="divider">/</span>
		  </li>
		  <li>
		    <?php echo $this->Html->link('Comparendos', '/comparendos')?>
 <span class="divider">/</span>
		  </li>
		  <li class="active">View</li>
		</ul>


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
			<th><?php echo $this->Paginator->sort('infraction_id');?></th>
			<th><?php echo $this->Paginator->sort('infractor_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
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
			<?php echo $this->Html->link($comparendo['Infraction']['codigo'], array('controller' => 'infractions', 'action' => 'view', $comparendo['Infraction']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($comparendo['Infractor']['full_name'], array('controller' => 'infractors', 'action' => 'view', $comparendo['Infractor']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($comparendo['User']['numero_documento'], array('controller' => 'users', 'action' => 'view', $comparendo['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div> <!-- end main -->

<div class="span2 offset1">
	<h3>Opciones</h3>

	<ul class="nav nav-pills nav-stacked">
		<li><?php echo $this->Html->link(__('Editar Comparendo'), array('action' => 'edit', $comparendo['Comparendo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Comparendo'), array('action' => 'delete', $comparendo['Comparendo']['id']), null, __('Realmente desea eliminar # %s?', $comparendo['Comparendo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Comparendos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Comparendo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Infractions'), array('controller' => 'infractions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar| Infraction'), array('controller' => 'infractions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Infractors'), array('controller' => 'infractors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar| Infractor'), array('controller' => 'infractors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar| User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

</div><!-- end row -->

