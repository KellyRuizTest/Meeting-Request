<html>
<body>
<div>
<?php
$this->breadcrumbs=array(
	'Reunions'=>array('index'),
	'Manage',
);



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('reunion-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php echo Yii::app()->bootstrap->register();?>    
<h1>Manage Meeting</h1>
<hr/>      
<?php
    $this->beginWidget('zii.widgets.CPortlet', array());
    $this->widget('bootstrap.widgets.TbMenu', array(
            'type'=>'pills',
            'items'=>array(
            array('label'=>'Home', 'icon'=>'home', 'url'=>array('index')),
            array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>array('create')),
            array('label'=>'Admin', 'icon'=>'user', 'url'=>array('admin'),'active'=>true),
                    //array('label'=>'Settings', 'icon'=>'cog', 'url'=>'#'),

                ),
            ));
    
$this->endWidget(); ?>
<hr/>
<br>
<?php
    $this->beginWidget('zii.widgets.CPortlet', array());
    $this->widget('bootstrap.widgets.TbMenu', array(
            'type'=>'pills',
            'items'=>array(
                array('label'=>'Generar PDF', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GeneratePdf'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
		array('label'=>'Generar Excel', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),

                ),
            ));
    
$this->endWidget(); ?>
<?php
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'reunion-grid',
	'dataProvider'=>$model->search(),
	'type'=>'bordered condesed',
        'template'=>'{items}{pager}',
	'columns'=>array(	
		'nombre',
		'fecha',
		'hora_init',
                'hora_final',
                array(
                    'name'=>'Sala_idSala',
                    'value'=>'$data->sala()->nombre',
                ),
                array(
                    'name'=>'Empleado_idEmpleado',
                    'value'=>'$data->empleado()->nombre',
                ), 
                //'Empleado_idEmpleado',
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
                                'htmlOptions'=>array('style'=>'width: 125px'),
                        ),
                        
                ),
                 'htmlOptions'=>array('style'=>'width: 55px, align:center'),
            )
        ); 

?>          
</div>            
</body>
</html>