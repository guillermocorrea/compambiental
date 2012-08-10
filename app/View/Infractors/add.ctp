<div class="row">
	<div class="span8">

		<ul class="breadcrumb">
		  <li>
		    <?php echo $this->Html->link('Inicio', '/')?>
 <span class="divider">/</span>
		  </li>
		  <li>
		    <?php echo $this->Html->link('Personas', '/infractors')?>
 <span class="divider">/</span>
		  </li>
		  <li class="active">Registrar</li>
		</ul>
	
<?php echo $this->Form->create
(
	'Infractor',
	array
	(
		'url' => array
				(
					'controller' => 'infractors',
					'action'	 => 'add'
				),
				'class'			=> 'well',
				'inputDefaults' => array
				(
				)
	)
);?>

	<?php
		echo $this->Form->input('tipo_documento',array('type'=>'select', 'label'=>'Tipo de Persona', 'options'=>Configure::read('TipoPersona'), 'class'=>'span5'));
		//echo $this->Form->input('tipo_documento', array('class' => 'span5'));
		echo $this->Form->input('numero_documento', array('class' => 'span5'));
		echo $this->Form->input('nombre_razon_social', array('class' => 'span5'));
		echo $this->Form->input('email', array('class' => 'span5'));
		echo $this->Form->input('telefono', array('class' => 'span5'));
		echo $this->Form->input('direccion', array('class' => 'span5'));
	?>
	
		
<?php echo $this->Form->end(array('label' => 'Registrar','class' => 'btn btn-primary'));?>

</div> <!-- end main -->

<div class="span2 offset1 well">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul class="nav nav-pills">

		<li><?php echo $this->Html->link(__('Listar Personas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Comparendos'), array('controller' => 'comparendos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Comparendo'), array('controller' => 'comparendos', 'action' => 'add')); ?> </li>
	</ul>

	<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Infractor.id')), array('class'=>'btn btn-danger'), __('Realmente desea eliminar # %s?', $this->Form->value('Infractor.id'))); ?>
</div>

	
</div>