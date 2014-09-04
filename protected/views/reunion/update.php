<?php
$this->breadcrumbs=array(
	'Reunions'=>array('index'),
	$model->idReunion=>array('view','id'=>$model->idReunion),
	'Update',
);
?>

<h1>Update <?php echo $model->nombre; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>