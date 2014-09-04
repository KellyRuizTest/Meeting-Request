<?php
$this->breadcrumbs=array(
	'Correos',
);

$this->menu=array(
	array('label'=>'Create Correo','url'=>array('create')),
	array('label'=>'Manage Correo','url'=>array('admin')),
);
?>

<h1>Correos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
