<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Console.Templates.default.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<?php $controller = strtolower($pluralHumanName);?>
<div class="row">
	<div class="span8">

		<ul class="breadcrumb">
		  <li>
		    <?php echo "<?php echo \$this->Html->link('Inicio', '/')?>\n"?> <span class="divider">/</span>
		  </li>
		  <li>
		    <?php echo "<?php echo \$this->Html->link('{$pluralHumanName}', '/{$controller}')?>\n"?> <span class="divider">/</span>
		  </li>
		  <li class="active"><?php echo ucfirst($action) ?></li>
		</ul>
	
<?php 
echo "<?php echo \$this->Form->create
(
	'{$modelClass}',
	array
	(
		'url' => array
				(
					'controller' => '{$controller}',
					'action'	 => '{$action}'
				),
				'class'			=> 'well',
				'inputDefaults' => array
				(
				)
	)
);?>\n";
?>

<?php
		echo "\t<?php\n";
		foreach ($fields as $field) {
			if (strpos($action, 'add') !== false && $field == $primaryKey) {
				continue;
			} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
				echo "\t\techo \$this->Form->input('{$field}', array('class' => 'span5'));\n";
			}
		}
		if (!empty($associations['hasAndBelongsToMany'])) {
			foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
				echo "\t\techo \$this->Form->input('{$assocName}', array('class' => 'span5'));\n";
			}
		}
		echo "\t?>\n";
?>	
		
<?php
	echo "<?php echo \$this->Form->end(array('label' => 'Registrar','class' => 'btn btn-primary'));?>\n";
?>

</div> <!-- end main -->

<div class="span2 offset1 well">
	<h3><?php echo "<?php echo __('Opciones'); ?>"; ?></h3>
	<ul class="nav nav-pills">

<?php if (strpos($action, 'add') === false): ?>
<?php endif;?>
		<li><?php echo "<?php echo \$this->Html->link(__('Listar " . $pluralHumanName . "'), array('action' => 'index'));?>";?></li>
<?php
		$done = array();
		foreach ($associations as $type => $data) {
			foreach ($data as $alias => $details) {
				if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
					echo "\t\t<li><?php echo \$this->Html->link(__('Listar " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index')); ?> </li>\n";
					echo "\t\t<li><?php echo \$this->Html->link(__('Registrar " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add')); ?> </li>\n";
					$done[] = $details['controller'];
				}
			}
		}
?>
	</ul>

	<?php echo "<?php echo \$this->Form->postLink(__('Eliminar'), array('action' => 'delete', \$this->Form->value('{$modelClass}.{$primaryKey}')), array('class'=>'btn btn-danger'), __('Realmente desea eliminar # %s?', \$this->Form->value('{$modelClass}.{$primaryKey}'))); ?>";?>

</div>

	
</div>