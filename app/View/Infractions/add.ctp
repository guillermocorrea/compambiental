<div class="row">
	<div class="span8">

		<ul class="breadcrumb">
		  <li>
		    <?php echo $this->Html->link('Inicio', '/')?>
 <span class="divider">/</span>
		  </li>
		  <li>
		    <?php echo $this->Html->link('Infracciones', '/infractions')?>
 <span class="divider">/</span>
		  </li>
		  <li class="active">Registrar</li>
		</ul>
	
<?php echo $this->Form->create
(
	'Infraction',
	array
	(
		'url' => array
				(
					'controller' => 'infractions',
					'action'	 => 'add'
				),
				'class'			=> 'well',
				'inputDefaults' => array
				(
				)
	)
);?>

	<?php
		echo $this->Form->input('codigo', array('class' => 'span5'));
		echo $this->Form->input('descripcion', array('class' => 'span5'));
		echo $this->Form->input('estado', array('label'=>'Activo'));
	?>
	
		
<?php echo $this->Form->end(array('label' => 'Registrar','class' => 'btn btn-primary'));?>

</div> <!-- end main -->

<div class="span2 offset1 well">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Infractions'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Comparendos'), array('controller' => 'comparendos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Comparendo'), array('controller' => 'comparendos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Valores'), array('controller' => 'concepts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Valor'), array('controller' => 'concepts', 'action' => 'add')); ?> </li>
	</ul>
</div>

	
</div>