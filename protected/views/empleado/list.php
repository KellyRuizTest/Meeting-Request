<?php
$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	'Manage',
);



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('empleado-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<h1>List Employee</h1>
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

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'empleado-grid',
	'dataProvider'=>$model->search(),
        'type'=>'bordered condesed',
        'template'=>'{items}{pager}',
	'filter'=>$model,
	'columns'=>array(
		'nombre',
		'cedula',
		'correo',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => '',
		),
        ),
        'htmlOptions' => array('class'=>'fondoso'),
	));?>
