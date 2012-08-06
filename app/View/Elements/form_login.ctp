<?php
if(AuthComponent::user('id') == null) {
	?>
<h1>Login</h1>
<hr>

<?php 
echo $this->Form->create
(
	'User',
	array
	(
		'url' => array
		(
			'controller' => 'users',
			'action'	 => 'login'
		),
		'class'			=> 'well',
		'inputDefaults' => array
		(
			'label' => false//,
			//'error' => false
		)
	)
); 

?>

<div class="control-group">
            <label class="control-label" for="UserNumeroDocumento">N&uacute;mero de documento</label>
            <div class="controls">
<?php
echo $this->Form->input('numero_documento',array('type'=>'text', 'placeholder' => 'Numero documento','class' => 'span3 focused'));
?> 
			</div>
        </div>

<div class="control-group">
            <label class="control-label" for="UserPassword">Contrase&ntilde;a</label>
            <div class="controls">
<?php
echo $this->Form->input('password',array('placeholder' => 'Contraseña', 'type' => 'password', 'class' => 'span3 focused'));
?>             
			</div>
        </div>

<button class="btn btn-primary"><i class="icon-play-circle icon-white"></i> Login</button> 
</form>
<?php 
}
else {
	echo "Bienvenido " . AuthComponent::user('primer_apellido') . " " . AuthComponent::user('primer_nombre');
} 
?>