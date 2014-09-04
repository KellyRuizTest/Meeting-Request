<html>
    <body>
        <h1>Room</h1>
        <div contextmenu="imagen">
            
<hr/>
<?php
$this->breadcrumbs=array(
	'Salas',
);



echo Yii::app()->bootstrap->register();?>

<?php date_default_timezone_set("America/Caracas"); ?>
<?php $this->beginWidget('zii.widgets.CPortlet', array()); 
$this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'pills', // '', 'tabs', 'pills' (or 'list')
    'items'=>array(
                
                array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'active'=>true, 'linkOptions'=>array()),
                array('label'=>'Admin', 'icon'=>'home', 'url'=>Yii::app()->controller->createUrl('admin'),'linkOptions'=>array()),
                
    ),
)); 

$this->endWidget();?>
<hr/>
        </div>
        <br>
        <div class="imaginado">
             <div class="codigito">
                 <h1><div class="starburst4"><span><span><span><span> Disponibilidad de Salas</span></span></span></span></div></h1>
                 <h6><?php Sala::model()->imageupload() ?> </h6>
            </div>
            <div class="centralizado">                                                   
                <?php
                    $avilaObjec = Sala::model()->aviladis();                    
                    if ($avilaObjec->disponibilidad == 0){
                        $avila = CHtml::imageButton(Yii::app()->baseUrl."/images/Avilaiconcheck.png", array('class'=>'span3', 'a href'=>'/parteweb/sala/admin'));                                                       
                        echo CHtml::link($avila, array('reunion/create'));
                        echo CHtml::image(Yii::app()->baseUrl."/images/indicacion.png");
                    }else{                        
                        $avila = CHtml::imageButton(Yii::app()->baseUrl."/images/Avilaiconcancel.png", array('class'=>'span3', 'a href'=>'/parteweb/sala/admin'));                                                       
                        echo CHtml::link($avila, array('reunion/admin'));
                        echo CHtml::image(Yii::app()->baseUrl."/images/indicacion.png");                            
                    }                                    
                
                ?>
                
                <?php                     
                    $roqueObjec = Sala::model()->roquesadis();
                    if ($roqueObjec->disponibilidad == 0){
                        $roques = CHtml::imageButton(Yii::app()->baseUrl."/images/Roquesiconcheck.png", array('class'=>'span3', 'a href'=>'/parteweb/sala/admin'));
                        echo CHtml::link($roques, array('reunion/create'));
                        echo CHtml::image(Yii::app()->baseUrl."/images/indicacion.png");
                    }else{
                        $roques = CHtml::imageButton(Yii::app()->baseUrl."/images/Roquesiconcancel.png", array('class'=>'span3', 'a href'=>'/parteweb/sala/admin'));
                        //echo CHtml::link($roques, array('reunion/create'));
                        echo CHtml::image(Yii::app()->baseUrl."/images/indicacion.png");                    
                    }?>
                
                    <?php 
                    $saltoObjec = Sala::model()->angeldis();
                    if ($saltoObjec->disponibilidad == 0){
                        $salto = CHtml::imageButton(Yii::app()->baseUrl."/images/Angeliconcheck.png", array('class'=>'span3'));
                        echo CHtml::link($salto, array('reunion/create'));
                    }else{
                        $salto = CHtml::imageButton(Yii::app()->baseUrl."/images/Angeliconcancel.png", array('class'=>'span3'));
                        //echo CHtml::link($salto, array('reunion/create'));
                    }
                    ?>
            </div>
            <div class="centralizado">
                    <?php 
                    $turpialObjec = Sala::model()->turpialdis();
                        if ($turpialObjec->disponibilidad == 0){
                        $turpial = CHtml::imageButton(Yii::app()->baseUrl."/images/Turpialiconcheck.png", array('class'=>'span3', 'a href'=>'/parteweb/sala/admin'));
                        echo CHtml::link($turpial, array('reunion/create'));
                        echo CHtml::image(Yii::app()->baseUrl."/images/indicacion.png");
                    }else{
                        $turpial = CHtml::imageButton(Yii::app()->baseUrl."/images/Turpialiconcancel.png", array('class'=>'span3', 'a href'=>'/parteweb/sala/admin'));
                        echo CHtml::link($turpial, array('reunion/admin'));
                        echo CHtml::image(Yii::app()->baseUrl."/images/indicacion.png");                      
                    }
                    ?>                                                
                    <?php
                    $orquideaObjec = Sala::model()->orquideadis();
                    if ($orquideaObjec->disponibilidad == 0){
                        $orquidea = CHtml::imageButton(Yii::app()->baseUrl."/images/Orquideaiconcheck.png", array('class'=>'span3', 'a href'=>'/parteweb/sala/admin'));
                        echo CHtml::link($orquidea, array('reunion/create'));
                        echo CHtml::image(Yii::app()->baseUrl."/images/indicacion.png");                    
                    }else{
                        $orquidea = CHtml::imageButton(Yii::app()->baseUrl."/images/Orquideaiconcancel.png", array('class'=>'span3', 'a href'=>'/parteweb/sala/admin'));
                        echo CHtml::link($orquidea, array('reunion/admin'));
                        echo CHtml::image(Yii::app()->baseUrl."/images/indicacion.png");                    
                    }                    
                    ?>
                    <?php 
                    $roraimaObjec = Sala::model()->roraimadis();
                    if ($roraimaObjec->disponibilidad == 0){
                        $roraima = CHtml::imageButton(Yii::app()->baseUrl."/images/Roraimaiconcheck.png", array('class'=>'span3', 'a href'=>'/parteweb/sala/admin'));
                        echo CHtml::link($roraima, array('reunion/create'));
                    }else {
                        $roraima = CHtml::imageButton(Yii::app()->baseUrl."/images/Roraimaiconcancel.png", array('class'=>'span3', 'a href'=>'/parteweb/sala/admin'));
                        echo CHtml::link($roraima, array('reunion/admin'));
                    }
                    ?>
            </div>
            
           
           
        </div>        
    </body>
</html>

<style type="text/css">
    .centralizado {
        float: left;
        width: 900px;
        height: 150px;
        text-align: center;
    }
    .imaginado{
        float: left;
        width: 800px;
        height: 400px;
        background-repeat: no-repeat;
        background-position: center;
    }
    .codigito{
        float: left;
        width: 900px;
        height: 120px;
        text-align: center;
    }
</style>