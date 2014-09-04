<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idReunion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idReunion),array('view','id'=>$data->idReunion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sala_idSala')); ?>:</b>
	<?php echo CHtml::encode($data->Sala_idSala); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Empleado_idEmpleado')); ?>:</b>
	<?php echo CHtml::encode($data->Empleado_idEmpleado); ?>
	<br />


</div>