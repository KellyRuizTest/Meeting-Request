<?php
$this->breadcrumbs=array(
	'Correos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Correo','url'=>array('index')),
	array('label'=>'Manage Correo','url'=>array('admin')),
);
?>

<h1>Create Correo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>