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
		  <li class="active">Editar</li>
		</ul>
	
<?php echo $this->Form->create
(
	'Infraction',
	array
	(
		'url' => array
				(
					'controller' => 'infractions',
					'action'	 => 'edit'
				),
				'class'			=> 'well',
				'inputDefaults' => array
				(
				)
	)
);?>

	<?php
	echo $this->Form->input('Infraction.id', array('class' => 'span5'));
	echo $this->Form->input('Infraction.codigo', array('class' => 'span5'));
	echo $this->Form->input('Infraction.descripcion', array('class' => 'span5'));
	echo $this->Form->input('Infraction.estado', array('label' => 'Activo'));
		
	echo $this->Site->generateRelatedConceptsInputs($this->request->data['Concept']);
		//debug($this->request->data['Infraction']);
	echo $this->Site->generateConceptInput(count($this->request->data['Concept']), null, $this->request->data['Infraction']['id']);
		
	?>
	
		
<?php echo $this->Form->end(array('name'=>'save', 'label' => 'Guardar','class' => 'btn btn-primary'));?>

</div> <!-- end main -->

<div class="span2 offset1 well">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Infracciones'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Comparendos'), array('controller' => 'comparendos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Comparendo'), array('controller' => 'comparendos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Values'), array('controller' => 'concepts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Value'), array('controller' => 'concepts', 'action' => 'add')); ?> </li>
	</ul>
</div>

	
</div>