<?php
$this->breadcrumbs=array(
	'Salas'=>array('index'),
	'Manage',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('sala-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h1>Manage Room</h1>
<hr/>
<br>
<?php 
$this->beginWidget('zii.widgets.CPortlet', array());
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'reunion-grid',
	'dataProvider'=>$model->search(),
	'type'=>'bordered condesed',
        'template'=>'{items}{pager}',
	'columns'=>array(	
		'nombre',
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
                        ),
                        
                ),
                'htmlOptions'=>array('class'=>'fondoso', 'style'=>'width: 805px, align:center'),
            )
        );
$this->endWidget();
?>
