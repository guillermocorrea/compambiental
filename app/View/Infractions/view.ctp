<div class="infractions view">
<h2><?php  echo __('Infraction');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($infraction['Infraction']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($infraction['Infraction']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($infraction['Infraction']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($infraction['Infraction']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($infraction['Infraction']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($infraction['Infraction']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Infraction'), array('action' => 'edit', $infraction['Infraction']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Infraction'), array('action' => 'delete', $infraction['Infraction']['id']), null, __('Realmente desea eliminar # %s?', $infraction['Infraction']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Infractions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Infraction'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Comparendos'), array('controller' => 'comparendos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar| Comparendo'), array('controller' => 'comparendos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Values'), array('controller' => 'concepts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar| Value'), array('controller' => 'concepts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comparendos');?></h3>
	<?php if (!empty($infraction['Comparendo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __(' Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Hora'); ?></th>
		<th><?php echo __('Tipo Sancion'); ?></th>
		<th><?php echo __('Lugar'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Infraction Id'); ?></th>
		<th><?php echo __('Infractor Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($infraction['Comparendo'] as $comparendo): ?>
		<tr>
			<td><?php echo $comparendo[' id'];?></td>
			<td><?php echo $comparendo['fecha'];?></td>
			<td><?php echo $comparendo['hora'];?></td>
			<td><?php echo $comparendo['tipo_sancion'];?></td>
			<td><?php echo $comparendo['lugar'];?></td>
			<td><?php echo $comparendo['valor'];?></td>
			<td><?php echo $comparendo['observaciones'];?></td>
			<td><?php echo $comparendo['estado'];?></td>
			<td><?php echo $comparendo['created'];?></td>
			<td><?php echo $comparendo['modified'];?></td>
			<td><?php echo $comparendo['infraction_id'];?></td>
			<td><?php echo $comparendo['infractor_id'];?></td>
			<td><?php echo $comparendo['user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'comparendos', 'action' => 'view', $comparendo['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'comparendos', 'action' => 'edit', $comparendo['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'comparendos', 'action' => 'delete', $comparendo['id']), null, __('Realmente desea eliminar # %s?', $comparendo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Registrar Comparendo'), array('controller' => 'comparendos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Values');?></h3>
	<?php if (!empty($infraction['Value'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Concepto'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Infraction Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($infraction['Value'] as $value): ?>
		<tr>
			<td><?php echo $value['id'];?></td>
			<td><?php echo $value['concepto'];?></td>
			<td><?php echo $value['valor'];?></td>
			<td><?php echo $value['tipo'];?></td>
			<td><?php echo $value['estado'];?></td>
			<td><?php echo $value['created'];?></td>
			<td><?php echo $value['modified'];?></td>
			<td><?php echo $value['infraction_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'concepts', 'action' => 'view', $value['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'concepts', 'action' => 'edit', $value['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'concepts', 'action' => 'delete', $value['id']), null, __('Realmente desea eliminar # %s?', $value['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Registrar Value'), array('controller' => 'concepts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
