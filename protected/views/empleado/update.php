<?php
$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->idEmpleado=>array('view','id'=>$model->idEmpleado),
	'Update',
);?>
<?php echo Yii::app()->bootstrap->register();?>

<h1>Update Empleado </h1>
<hr/>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>