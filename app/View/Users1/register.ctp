<h2>Registrar usuario</h2>
<hr>
<div class="row-fluid">
	<div class="span8">
		<?php
		echo $this->Form->create
		(
			'User',
			array
			(
				'url' => array
				(
					'controller' => 'users',
					'action'	 => 'register'
				),
				'class'			=> 'well',
				'inputDefaults' => array
				(
					//'label' => false//,
					//'error' => false
				)
			)
		); 

		echo $this->Form->input('primer_apellido',array('class' => 'span5'));
		echo $this->Form->input('segundo_apellido',array('class' => 'span5'));

		echo $this->Form->input('primer_nombre',array('class' => 'span5'));
		echo $this->Form->input('segundo_nombre',array('class' => 'span5'));

		echo $this->Form->input('email',array('type' => 'text', 'class' => 'span5'));

		echo $this->Form->input('numero_documento',array('type' => 'text', 'class' => 'span5'));
		echo $this->Form->input('password',array('type' => 'password', 'class' => 'span5'));

		echo $this->Form->input('rol',array('type'=>'select', 'options'=>Configure::read('Rols'), 'class' => 'span5'));

		echo $this->Form->input('estado',array('label' => 'Activo'));		
?>
		<div class="margin_bottom_10"></div>

		<?php
		echo $this->Form->end(array('label' => 'Registrar','class' => 'btn btn-primary'));
		?>
	</div>
</div>
