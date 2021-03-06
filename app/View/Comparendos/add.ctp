<?php //$this->Html->script('lib/bootstrap-typeahead', array('inline'=>false));?>
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
				'class'			=> 'well',
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
			<legend>Datos del Infractor</legend>
			<div class="inline-block-form">
				<div>
<?php

		// Datos del infractor
		//echo $this->Form->input('Infractor.tipo_documento', array('class' => 'span1'));
		echo $this->Form->input('Infractor.tipo_documento',array('id'=>'InfractorTipoDocumento', 'type'=>'select', 'label'=>'Tipo de Persona', 'options'=>Configure::read('TipoPersona'), 'class'=>'span2'));

echo $this->Form->input('Infractor.infractor_id',array('type' => 'hidden','id'=>'InfractorId',
	'value'=>0,'class'=>'hide','label'=>false));
//echo $this->Form->input('numero_documento', array('id'=>'InfractorNumeroDocumento', 'label'=>'Número de Documento', 
//	'class'=>'span2','type' => 'text', 'error' => false,'data-provide'=>'typeahead', 'data-source'=>'[]',
//	));


		echo $this->Form->input('Infractor.numero_documento', array('id'=>'InfractorNumeroDocumento', 'label'=>'Número de Documento', 'class' => 'span2'));
		echo $this->Form->input('Infractor.nombre_razon_social', array('id'=>'InfractorNombre', 'class' => 'span2', 'label'=>'Nombre'));

?>
				</div>
				<div>
<?php
		// Datos del infractor
		// echo $this->Form->input('Infractor.tipo_documento', array('class' => 'span1'));
		echo $this->Form->input('Infractor.email',array('class'=>'span2'));
		echo $this->Form->input('Infractor.telefono', array('label'=>'Teléfono', 'class' => 'span2', 'label'=>'Teléfono'));
		echo $this->Form->input('Infractor.direccion', array('label'=>'Dirección', 'class' => 'span2', 'label'=>'Dirección'));

?>
				</div>
			</div>
			<div id="infractor_id"></div>
		</fieldset>	

		<fieldset>
			<legend>Datos de la Infracción</legend>
<?php
		echo $this->Form->input('tipo_sancion', array('label'=>'Tipo de Sanción', 'class' => 'span5 disabled', 'disabled'));
?>
	<div class="inline-block-form">
<?php
		echo $this->Form->input('codigo_infraccion', array('label'=>'Código', 'class' => 'span2'));
		echo $this->Form->input('concept_id', array('label'=>'Valor', 'class' => 'span3'));
?>
	</div>

	</fieldset>	
<?php
		// echo $this->Form->input('valor', array('class' => 'span5'));
		echo $this->Form->input('observaciones', array('class' => 'span5'));
		// echo $this->Form->input('estado', array('class' => 'span5'));
		
		// echo $this->Form->input('infractor_id', array('class' => 'span5'));
		// echo $this->Form->input('user_id', array('class' => 'span5'));
	?>
<fieldset>
			<legend>Datos del Funcionario</legend>
			<div class="inline-block-form">
	<?php
		echo $this->Form->input('Funcionario.numero_documento', array('label'=>'Número de Documento', 'class' => 'span2'));
		echo $this->Form->input('Funcionario.nombre', array('class' => 'span3'));
		/*echo $this->Form->input('fecha', array('class' => 'span5'));
		echo $this->Form->input('hora', array('class' => 'span5'));
		echo $this->Form->input('tipo_sancion', array('class' => 'span5'));
		echo $this->Form->input('lugar', array('class' => 'span5'));
		echo $this->Form->input('valor', array('class' => 'span5'));
		echo $this->Form->input('observaciones', array('class' => 'span5'));
		echo $this->Form->input('estado', array('class' => 'span5'));
		echo $this->Form->input('concept_id', array('class' => 'span5'));
		echo $this->Form->input('infractor_id', array('class' => 'span5'));
		echo $this->Form->input('user_id', array('class' => 'span5'));*/
	?>
	</div>
	</fieldset>	
		
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