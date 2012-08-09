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
		  <li class="active">Add</li>
		</ul>
	
<?php echo $this->Form->create
(
	'Comparendo',
	array
	(
		'url' => array
				(
					'controller' => 'comparendos',
					'action'	 => 'add'
				),
				'class'			=> 'well',
				'inputDefaults' => array
				(
				)
	)
);?>

	<?php
		echo $this->Form->input('fecha', array('class' => 'span5'));
		echo $this->Form->input('hora', array('class' => 'span5'));
		echo $this->Form->input('tipo_sancion', array('class' => 'span5'));
		echo $this->Form->input('lugar', array('class' => 'span5'));
		echo $this->Form->input('valor', array('class' => 'span5'));
		echo $this->Form->input('observaciones', array('class' => 'span5'));
		echo $this->Form->input('estado', array('class' => 'span5'));
		echo $this->Form->input('infraction_id', array('class' => 'span5'));
		echo $this->Form->input('infractor_id', array('class' => 'span5'));
		echo $this->Form->input('user_id', array('class' => 'span5'));
	?>
	
		
<?php echo $this->Form->end(array('label' => 'Registrar','class' => 'btn btn-primary'));?>

</div> <!-- end main -->

<div class="span2 offset1 well">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul class="nav nav-pills">

		<li><?php echo $this->Html->link(__('Listar Comparendos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Infractions'), array('controller' => 'infractions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Infraction'), array('controller' => 'infractions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Infractors'), array('controller' => 'infractors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Infractor'), array('controller' => 'infractors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>

	<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Comparendo.id')), array('class'=>'btn btn-danger'), __('Realmente desea eliminar # %s?', $this->Form->value('Comparendo.id'))); ?>
</div>

	
</div>