<div class="row">
	<div class="span9">

		<ul class="breadcrumb">
		  <li>
		    <?php echo $this->Html->link('Inicio', '/')?>
 <span class="divider">/</span>
		  </li>
		  <li>
		    <?php echo $this->Html->link('Infracciones', '/infractions')?>
 <span class="divider">/</span>
		  </li>
		  <li class="active">Detalles</li>
		</ul>

<table class="table table-bordered">
        <thead>
          <tr>
            <th>C&oacute;digo</th>
            <th>Descripci&oacute;n</th>
            <th>Estado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo h($infraction['Infraction']['codigo']); ?>&nbsp;</td>
            <td><?php echo h($infraction['Infraction']['descripcion']); ?>&nbsp;</td>
            <td><?php echo h($infraction['Infraction']['estado']); ?>&nbsp;</td>
          </tr>
        </tbody>
      </table>
</div> <!-- end main -->

<div class="span2 offset1">
	<h3><?php echo __('Opciones'); ?></h3>

	<ul class="nav nav-pills nav-stacked">
		<li><?php echo $this->Html->link(__('Editar Infraction'), array('action' => 'edit', $infraction['Infraction']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Infraction'), array('action' => 'add')); ?> </li>
	</ul>
</div> 

</div><!-- end row -->

<div class="row">
	<div class="span9">
		<h3><?php echo __('Related Values');?></h3>
		<?php if (!empty($infraction['Concept'])):?>
		<table class="table table-bordered">
		<tr>
			<th><?php echo __('Concepto'); ?></th>
			<th><?php echo __('Valor'); ?></th>
			<th><?php echo __('Tipo'); ?></th>
			<th><?php echo __('Estado'); ?></th>
			<th class="actions"><?php echo __('Actions');?></th>
		</tr>
		<?php
			$i = 0;
			foreach ($infraction['Concept'] as $value): ?>
			<tr>
				<td><?php echo $value['concepto'];?></td>
				<td><?php echo $value['valor'];?></td>
				<td><?php echo $value['tipo'];?></td>
				<td><?php echo $value['estado'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('Ver'), array('controller' => 'concepts', 'action' => 'view', $value['id'])); ?>
					<?php echo $this->Html->link(__('Editar'), array('controller' => 'concepts', 'action' => 'edit', $value['id'])); ?>
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
</div>
