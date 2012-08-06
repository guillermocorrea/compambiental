<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('primer_apellido');
		echo $this->Form->input('segundo_apellido');
		echo $this->Form->input('primer_nombre');
		echo $this->Form->input('segundo_nombre');
		echo $this->Form->input('numero_documento');
		echo $this->Form->input('password');
		echo $this->Form->input('rol');
		echo $this->Form->input('estado');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Users'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Comparendos'), array('controller' => 'comparendos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Comparendo'), array('controller' => 'comparendos', 'action' => 'add')); ?> </li>
	</ul>
</div>
