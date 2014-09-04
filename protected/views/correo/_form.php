<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'correo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'cont',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'titulo',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textAreaRow($model,'notificacion',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
