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
		  <li class="active">Add</li>
		</ul>
	
<?php echo $this->Form->create
(
	'Concept',
	array
	(
		'url' => array
				(
					'controller' => 'concepts',
					'action'	 => 'add'
				),
				'class'			=> 'well',
				'inputDefaults' => array
				(
				)
	)
);?>

	<?php
		echo $this->Form->input('concepto', array('class' => 'span5'));
		echo $this->Form->input('valor', array('class' => 'span5'));
		echo $this->Form->input('tipo', array('class' => 'span5'));
		echo $this->Form->input('estado', array('class' => 'span5'));
		echo $this->Form->input('infraction_id', array('class' => 'span5'));
	?>
	
		
<?php echo $this->Form->end(array('label' => 'Registrar','class' => 'btn btn-primary'));?>

</div> <!-- end main -->

<div class="span2 offset1 well">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Concepts'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Infractions'), array('controller' => 'infractions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Infraction'), array('controller' => 'infractions', 'action' => 'add')); ?> </li>
	</ul>
</div>

	
</div>