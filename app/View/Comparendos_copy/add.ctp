<?php $this->Html->script('lib/jquery.maskedinput-1.3.min', array('inline'=>false));?>
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
		  <li class="active">Registrar</li>
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
				'class'			=> 'well bg-comparendo',
				'inputDefaults' => array
				(
				)
	)
);?>

<div class="inline-block-form">
	<?php
		echo $this->Form->input('fecha', array('class' => 'span2'));
		echo $this->Form->input('hora', array('class' => 'span2'));
		// echo $this->Form->input('tipo_sancion', array('class' => 'span5'));
		echo $this->Form->input('lugar', array('class' => 'span5'));
?>
</div>
		<fieldset>
			<legend>Datos del infractor</legend>
			<div class="inline-block-form">
				<div>
<?php
		// Datos del infractor
		//echo $this->Form->input('Infractor.tipo_documento', array('class' => 'span1'));
		echo $this->Form->input('Infractor.tipo_documento',array('type'=>'select', 'label'=>'Tipo de Persona', 'options'=>Configure::read('TipoPersona'), 'class'=>'span2'));
		echo $this->Form->input('Infractor.numero_documento', array('label'=>'Número de Documento', 'class' => 'span2'));
		echo $this->Form->input('Infractor.nombre_razon_social', array('id'=>'InfractorNombre', 'class' => 'span2', 'label'=>'Nombre'));

?>
				</div>
				<div>
<?php
		// Datos del infractor
		// echo $this->Form->input('Infractor.tipo_documento', array('class' => 'span1'));
		echo $this->Form->input('Infractor.email',array('id'=>'InfractorEmail', 'class'=>'span2'));
		echo $this->Form->input('Infractor.telefono', array('id'=>'InfractorTelefono','label'=>'Teléfono', 'class' => 'span2', 'label'=>'Teléfono'));
		echo $this->Form->input('Infractor.direccion', array('id'=>'InfractorDireccion','label'=>'Dirección', 'class' => 'span2', 'label'=>'Dirección'));

?>
				</div>
			</div>
			<div id="infractor_id"></div>
		</fieldset>	


<?php
		echo $this->Form->input('tipo_sancion', array('label'=>'Tipo de Sanción', 'class' => 'span5 disabled', 'disabled'));
		// echo $this->Form->input('valor', array('class' => 'span5'));
		echo $this->Form->input('observaciones', array('class' => 'span5'));
		// echo $this->Form->input('estado', array('class' => 'span5'));
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
		<li><?php echo $this->Html->link(__('Listar Infracciones'), array('controller' => 'infractions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Persona'), array('controller' => 'infractors', 'action' => 'add')); ?> </li>
	</ul>

	<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Comparendo.id')), array('class'=>'btn btn-danger'), __('Realmente desea eliminar este comparendo # %s?', $this->Form->value('Comparendo.id'))); ?>
</div>

	
</div>