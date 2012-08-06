<div class="users view">
<h2><?php  echo __('User');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primer Apellido'); ?></dt>
		<dd>
			<?php echo h($user['User']['primer_apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Segundo Apellido'); ?></dt>
		<dd>
			<?php echo h($user['User']['segundo_apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primer Nombre'); ?></dt>
		<dd>
			<?php echo h($user['User']['primer_nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Segundo Nombre'); ?></dt>
		<dd>
			<?php echo h($user['User']['segundo_nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Documento'); ?></dt>
		<dd>
			<?php echo h($user['User']['numero_documento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rol'); ?></dt>
		<dd>
			<?php echo h($user['User']['rol']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($user['User']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar User'), array('action' => 'delete', $user['User']['id']), null, __('Realmente desea eliminar # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Comparendos'), array('controller' => 'comparendos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar| Comparendo'), array('controller' => 'comparendos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comparendos');?></h3>
	<?php if (!empty($user['Comparendo'])):?>
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
		foreach ($user['Comparendo'] as $comparendo): ?>
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
