<div class="concepts view">
<h2><?php  echo __('Concept');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($concept['Concept']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Concepto'); ?></dt>
		<dd>
			<?php echo h($concept['Concept']['concepto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($concept['Concept']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($concept['Concept']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($concept['Concept']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($concept['Concept']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($concept['Concept']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Infraction'); ?></dt>
		<dd>
			<?php echo $this->Html->link($concept['Infraction']['codigo'], array('controller' => 'infractions', 'action' => 'view', $concept['Infraction']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Concept'), array('action' => 'edit', $concept['Concept']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Concept'), array('action' => 'delete', $concept['Concept']['id']), null, __('Realmente desea eliminar # %s?', $concept['Concept']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Concepts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Concept'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Infractions'), array('controller' => 'infractions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar| Infraction'), array('controller' => 'infractions', 'action' => 'add')); ?> </li>
	</ul>
</div>
