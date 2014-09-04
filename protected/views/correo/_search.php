<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'idCorreo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cont',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'titulo',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textAreaRow($model,'notificacion',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
