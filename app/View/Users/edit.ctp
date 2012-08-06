<div class="row-fluid">
	<div class="span8">

		<ul class="breadcrumb">
		  <li>
		    <?php echo $this->Html->link('Inicio', '/')?> <span class="divider">/</span>
		  </li>
		  <li>
		    <?php echo $this->Html->link('Usuarios', '/users')?> <span class="divider">/</span>
		  </li>
		  <li class="active">Editar</li>
		</ul>
	
	<?php
		echo $this->Form->create
		(
			'User',
			array
			(
				'url' => array
				(
					'controller' => 'users',
					'action'	 => 'edit'
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
			echo $this->element('Users/form');
		?>
		
	<?php echo $this->Form->end(array('label' => 'Guardar','class' => 'btn btn-primary'));?>

	</div>
</div>