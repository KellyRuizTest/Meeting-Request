<?php echo Yii::app()->bootstrap->register();?>
<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'sala-form',
	'enableAjaxValidation'=>false,
)); ?>
<fieldset>
    <legend>
	<p class="help-block">Fields with <span class="required">*</span> are required.</p>
    </legend>
	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nombre',array('class'=>'span5','maxlength'=>25)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'icon'=>'ok white',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
</fieldset>
</div>