<?php
$this->breadcrumbs=array(
	'Salas'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List Sala','url'=>array('index')),
	array('label'=>'Manage Sala','url'=>array('admin')),
);*/
?>

<h1>Create Room</h1>



<?php

/*
$this->beginWidget('zii.widgets.CPortlet', array());
$this->widget('bootstrap.widgets.TbMenu', array(
        'type'=>'pills',
        'items'=>array(
                array('label'=>'Crear', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'),'active'=>true, 'linkOptions'=>array()),
                array('label'=>'Listar', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
        ),
));
$this->endWidget();
*/?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>