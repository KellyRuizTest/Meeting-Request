<html>
    <body>
        <div>
            
<?php
$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	'Create',
);
echo Yii::app()->bootstrap->register(); ?>
            
<h1>Create Employee</h1>
<hr/>
       
<?php 
$this->beginWidget('zii.widgets.CPortlet', array());
$this->widget('bootstrap.widgets.TbMenu', array(
        'type'=>'pills',
        'items'=>array(
                array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'),'active'=>true, 'linkOptions'=>array()),
                array('label'=>'List', 'icon'=>'book', 'url'=>Yii::app()->controller->createUrl('list'), 'linkOptions'=>array()),
                array('label'=>'Admin', 'icon'=>'user', 'url'=>Yii::app()->controller->createUrl('admin'), 'linkOptions'=>array()),
        ),
));
$this->endWidget();
?>

<hr/>                    

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
       </div>
    </body>
</html>

<style type="text/css">
    .bodyrecover {        
        width: 900px;
        height: 400px;
    }
</style>