<h2>Actualizar perfil</h2>
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
					'action'	 => 'profile'
				),
				'class'			=> 'well',
				'inputDefaults' => array
				(
					//'label' => false//,
					//'error' => false
				)
			)
		); 
		echo $this->Form->input('id');
		
		echo $this->Form->input('primer_apellido',array('class' => 'span5'));
		echo $this->Form->input('segundo_apellido',array('class' => 'span5'));

		echo $this->Form->input('primer_nombre',array('class' => 'span5'));
		echo $this->Form->input('segundo_nombre',array('class' => 'span5'));

		echo $this->Form->input('email',array('type' => 'text', 'class' => 'span5'));

		echo $this->Form->input('numero_documento',array('type' => 'text', 'class' => 'span5'));
		echo $this->Form->input('password',array('type' => 'password', 'class' => 'span5'));
?>
		<div class="margin_bottom_10"></div>

		<?php
		echo $this->Form->end(array('label' => 'Actualizar','class' => 'btn btn-primary'));
		?>
	</div>
</div>