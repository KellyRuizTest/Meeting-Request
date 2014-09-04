<?php
$this->breadcrumbs=array(
	'Empleados',
);

?>
<?php echo Yii::app()->bootstrap->register();?>
<h1>Employee</h1>
<hr/>

<?php 
$this->beginWidget('zii.widgets.CPortlet', array());
$this->widget('bootstrap.widgets.TbMenu', array(
        'type'=>'pills',
        'items'=>array(
                array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'active'=>true, 'linkOptions'=>array()),
                array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('admin'),'linkOptions'=>array()),
                array('label'=>'Admin', 'icon'=>'user', 'url'=>Yii::app()->controller->createUrl('admin'),'linkOptions'=>array()),
        ),
));
$this->endWidget();

?>
<hr/>
<?php echo CHtml::image(Yii::app()->baseUrl."/images/Samsung.png"); ?>



