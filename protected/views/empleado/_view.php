<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEmpleado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idEmpleado),array('view','id'=>$data->idEmpleado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula')); ?>:</b>
	<?php echo CHtml::encode($data->cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Correo_idCorreo')); ?>:</b>
	<?php echo CHtml::encode($data->Correo_idCorreo); ?>
	<br />


</div>