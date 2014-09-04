<?php echo Yii::app()->bootstrap->register();?>
<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'reunion-form',
	'enableAjaxValidation'=>true,
        'method'=>'post',
        'type'=>'horizontal',
        'htmlOptions'=>array(
                'enctype'=>'multipart/form-data'
                )
                )); ?>

    <fieldset>
        <legend>
	<p class="help-block">Fields with <span class="required">*</span> are required.</p>
        
 <?php 
        Yii::app()->user->setFlash('info', '<strong>Heads up!</strong> This alert needs your attention, but it\'s not super important.');
 ?>
        </legend>
    
        <div class="control-group"> 
            
	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nombre',array('class'=>'span5','maxlength'=>35)); ?>
            
        <label class="control-label"><?php echo $form->labelEx($model,'fecha'); ?> </label>
            
            <div class="controls">
 
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',
                array(
                    'model'=>$model,
                    'name'=>'datepicker',
                    'attribute'=>'fecha',
                    'value'=>$model->fecha,
                    'options'=>array(
                        'showAnim'=>'clip',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
                        'dateFormat'=>'dd/mm/yy',
                        'showButtonPanel'=>true,
                        'changeYear'=>'true',
                        'changeMonth'=>'true',
                        ),
                    'htmlOptions'=>array(
                    'style'=>'height:40px;', 'class'=>'span3',
                    ),
            ));
            ?>
                
            </div><br>
            
            <label class="control-label"><?php echo $form->labelEx($model,'hora_init'); ?> </label>
            
            <div class="controls">
                <?php $this->widget('CMaskedTextField', array(
                    'model' => $model,
                    'attribute' => 'hora_init',
                    'mask' => '58:10',
                    'charMap'=>array('5'=>'[0-1]', '8'=>'[0-9]', '1'=>'[0-5]', '0'=>'[0-9]'),
                    'htmlOptions' => array('size' => 4, 'class'=>'span3', 'placeholder'=>'07:00')
                    )); 
                ?>
            </div><br>
            
            <label class="control-label"><?php echo $form->labelEx($model,'hora_final'); ?> </label>
            
            <div class="controls">
                <?php $this->widget('CMaskedTextField', array(
                    'model' => $model,
                    'attribute' => 'hora_final',
                    'mask' => '58:10',
                    'charMap'=>array('5'=>'[0-1]', '8'=>'[0-9]', '1'=>'[0-5]', '0'=>'[0-9]'),
                    'htmlOptions' => array('size' => 4, 'class'=>'span3', 'placeholder'=>'07:00')
                    )); 
                ?>
            </div><br>
      
      
                
	<?php echo $form->dropDownListRow($model,'Sala_idSala', $model->sala('all'), array('prompt'=>'Seleccione', 'class'=>'span5')); ?>

	<?php echo $form->dropDownListRow($model,'Empleado_idEmpleado', $model->empleado('all'), array('prompt'=>'Seleccione Empleado','class'=>'span5')); ?>
   
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'icon'=>'ok white',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>
        </div>
    </fieldset>
<?php $this->endWidget(); ?>
</div>