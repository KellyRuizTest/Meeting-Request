<?php
$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->idEmpleado,
);
?>

<h1> View Employee </h1>
<hr/>
<?php 
$this->beginWidget('zii.widgets.CPortlet', array());
$this->widget('bootstrap.widgets.TbMenu', array(
        'type'=>'pills',
        'items'=>array(
                array('label'=>'Home', 'icon'=>'home', 'url'=>Yii::app()->controller->createUrl('create'), 'active'=>true, 'linkOptions'=>array()),
                array('label'=>'Admin', 'icon'=>'user', 'url'=>Yii::app()->controller->createUrl('admin'),'linkOptions'=>array()),                
        ),
));
$this->endWidget();
?>
<hr/>
<br>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
        'type'=>'bordered',
	'attributes'=>array(
		'nombre',
		'cedula',
                'correo',
	),
)); ?>