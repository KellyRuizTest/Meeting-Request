<?php
$this->breadcrumbs=array(
	'Reunions'=>array('index'),
	$model->idReunion,
);
?>

<h1>View Reunion </h1>
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

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
        'type'=>'bordered',
	'attributes'=>array(
		'nombre',
		'fecha',
		'hora_init',
                'hora_final',
                    array(
                            'name'=>'Sala_idSala',
                            'value'=>$model->sala()->nombre,
                    ),
	),
)); ?>
