<html>
    <body>
        
        <div style="background-image: url(/parteweb/images/Samsungmod.png); background-repeat: no-repeat; background-position: center" >
            
            <?php //echo CHtml::image(Yii::app()->baseUrl."/images/Samsung.png"); ?>
        
            <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                    'id'=>'empleado-form',
                    'enableAjaxValidation'=>false,
            )); ?>
            
     
                <p class="help-block">Fields with <span class="required">*</span> are required.</p>
                
                <br>
                <?php echo $form->errorSummary($model); ?>

                <?php echo $form->textFieldRow($model,'nombre',array('class'=>'span3','maxlength'=>25)); ?>

                <?php echo $form->textFieldRow($model,'cedula',array('class'=>'span3')); ?>

                <?php //echo $form->textFieldRow($model,'Correo_idCorreo',array('class'=>'span5')); ?>

                <?php echo $form->textFieldRow($model,'correo',array('class'=>'span3')); ?>
                <br>
        </div>
                <div class="form-actions">
                    <?php $this->widget('bootstrap.widgets.TbButton', array(
                            'buttonType'=>'submit',
                            'type'=>'primary',
                            'icon'=>'ok white',
                            'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
                </div>
            
            
        </div>
<?php $this->endWidget(); ?>
    </body>
</html>

<style type="text/css">
    .bodyrecover {        
        width: 900px;
        height: 400px;
    }
</style>