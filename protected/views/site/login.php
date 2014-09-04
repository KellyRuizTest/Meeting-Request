<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<?php echo Yii::app()->bootstrap->register();?>

<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<div class="form-actions">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'reunion-form',
	'enableAjaxValidation'=>false,
        'method'=>'post',
        'type'=>'horizontal',
        'htmlOptions'=>array(
                'enctype'=>'multipart/form-data'
                )
                )); ?>

	
	<div class="row-fluid">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>		
	</div>

	<div class=" row-fluid ">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	
        <div class="row-fluid">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Login',
		)); ?>
	</div>
        
<?php $this->endWidget(); ?>
</div><!-- form -->
