<?php
$this->breadcrumbs=array(
	'Reunions'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List Reunion','url'=>array('index')),
	array('label'=>'Manage Reunion','url'=>array('admin')),
);*/
?>

<h1>Create Meeting</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>