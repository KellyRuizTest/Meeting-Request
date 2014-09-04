<?php
$this->breadcrumbs=array(
	'Correos'=>array('index'),
	$model->idCorreo,
);

$this->menu=array(
	array('label'=>'List Correo','url'=>array('index')),
	array('label'=>'Create Correo','url'=>array('create')),
	array('label'=>'Update Correo','url'=>array('update','id'=>$model->idCorreo)),
	array('label'=>'Delete Correo','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->idCorreo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Correo','url'=>array('admin')),
);
?>

<h1>View Correo #<?php echo $model->idCorreo; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'idCorreo',
		'cont',
		'titulo',
		'notificacion',
	),
)); ?>
