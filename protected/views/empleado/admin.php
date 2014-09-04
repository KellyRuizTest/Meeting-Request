<?php
$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	'Manage',
);



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').slideToggle('fast');
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


<h1>Manage Employee</h1>
<hr/>
<?php 
$this->beginWidget('zii.widgets.CPortlet', array());
$this->widget('bootstrap.widgets.TbMenu', array(
        'type'=>'pills',
        'items'=>array(
                array('label'=>'Home', 'icon'=>'home', 'url'=>Yii::app()->controller->createUrl('create'), 'active'=>true, 'linkOptions'=>array()),
                array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('list'),'linkOptions'=>array()),                
        ),
));
$this->endWidget();
?>
<hr/>
<div class="form-actions">
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'empleado-grid',
	'dataProvider'=>$model->search(),
        'type'=>'bordered condesed',
        'template'=>'{items}{pager}',
        'itemsCssClass'=>'striped bordered condensed',
	'filter'=>$model,
	'columns'=>array(
		'nombre',
		'cedula',
		'correo',
		 array(
                        'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{view}{update}{delete}',
			'buttons' => array(
			      'view' => array(
					'label'=> 'View',
					'options'=>array(
						'class'=>'btn btn-small view'
					)
				),	
                              'update' => array(
					'label'=> 'Modificar',
					'options'=>array(
						'class'=>'btn btn-small update'
					)
				),
				'delete' => array(
					'label'=> 'Delete',
					'options'=>array(
						'class'=>'btn btn-small delete'
					)
				)
			),
            'htmlOptions'=>array('style'=>'width: 115px'),
           )
        ),
	));?>

</div>