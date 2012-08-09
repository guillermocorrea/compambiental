<?php
// scripts
//$this->Html->script('lib/jquery-ui-1.9/jquery-ui.min', array('inline' => false));
/*$this->Html->css('themes/base/jquery-ui.min', array('inline' => false));
$this->Html->script('lib/jquery-ui-1.9/jquery.ui.core.min', array('inline' => false));
$this->Html->script('lib/jquery-ui-1.9/jquery.ui.widget.min', array('inline' => false));
$this->Html->script('lib/jquery-ui-1.9/jquery.ui.button.min', array('inline' => false));
$this->Html->script('lib/jquery-ui-1.9/jquery.ui.spinner.min', array('inline' => false));*/
?>

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
	//echo $this->Form->input('Infraction.estado', array('label' => 'Activo'));
		
	echo $this->Site->generateRelatedConceptsInputs($this->request->data['Concept']);
		//debug($this->request->data['Infraction']);
	echo $this->Site->generateConceptInput(count($this->request->data['Concept']), null, $this->request->data['Infraction']['id']);
		
	?>
	
		
<?php echo $this->Form->end(array('name'=>'save', 'label' => 'Guardar','class' => 'btn btn-primary'));?>

</div> <!-- end main -->

<div class="span2 offset1 well">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul class="nav nav-pills">

		<li><?php echo $this->Html->link(__('Listar Infracciones'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Comparendos'), array('controller' => 'comparendos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Comparendo'), array('controller' => 'comparendos', 'action' => 'add')); ?> </li>
	</ul>
	<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->request->data['Infraction']['id']), array('class'=>'btn btn-danger'), __('Realmente desea eliminar esta infraccion # %s?', $this->request->data['Infraction']['codigo'])); ?>
</div>

	
</div>