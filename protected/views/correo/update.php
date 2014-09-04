<?php
$this->breadcrumbs=array(
	'Correos'=>array('index'),
	$model->idCorreo=>array('view','id'=>$model->idCorreo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Correo','url'=>array('index')),
	array('label'=>'Create Correo','url'=>array('create')),
	array('label'=>'View Correo','url'=>array('view','id'=>$model->idCorreo)),
	array('label'=>'Manage Correo','url'=>array('admin')),
);
?>

<h1>Update Correo <?php echo $model->idCorreo; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>