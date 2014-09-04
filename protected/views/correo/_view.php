<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCorreo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idCorreo),array('view','id'=>$data->idCorreo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cont')); ?>:</b>
	<?php echo CHtml::encode($data->cont); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notificacion')); ?>:</b>
	<?php echo CHtml::encode($data->notificacion); ?>
	<br />


</div>