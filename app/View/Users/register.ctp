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

		echo $this->element('Users/form');		
?>
		<div class="margin_bottom_10"></div>

		<?php
		echo $this->Form->end(array('label' => 'Registrar','class' => 'btn btn-primary'));
		?>
	</div>
</div>
