<?php
$this->breadcrumbs=array(
	'Salas'=>array('index'),
	$model->idSala=>array('view','id'=>$model->idSala),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sala','url'=>array('index')),
	array('label'=>'Create Sala','url'=>array('create')),
	array('label'=>'View Sala','url'=>array('view','id'=>$model->idSala)),
	array('label'=>'Manage Sala','url'=>array('admin')),
);
?>

<h1>Update Sala <?php echo $model->idSala; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>