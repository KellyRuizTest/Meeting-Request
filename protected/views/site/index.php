<?php
$this->pageTitle = Yii::app()->name;
?>
<?php date_default_timezone_set("America/Caracas"); ?>

<h2>Welcome to <?php echo CHtml::encode(Yii::app()->name); ?></h2>

<?php echo Yii::app()->bootstrap->register(); ?>



<!--<div class="container-well">           --> 
    <div id="homeCarousel" class="carousel slide" data-ride="carousel">
       
        <div class="carousel-inner">

            <div class="item active">
                <img src="images/activereduc.jpg" class="img-rounded" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        
                        <p>Samsung en Venezuela se caracteriza por estar a la vanguardía de la tecnología
                        teniendo siempre el deseo de reforzar la marca dentro del país.</p>
                        <p><a class="btn btn-lg btn-primary" href="www.samsung.com/ve" role="button">Learn More</a></p>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/sala2reduc.jpg" class="img-rounded" >
                <div class="container">
                    <div class="carousel-caption">
                        <h4>Salón Salto Angel</h4>
                        <p>Mirad porque os lleva este nombre este importante salón de reuniones en SEVEN</p>
                        <p><a class="btn btn-lg btn-primary" href="www.samsung.com/ve" role="button">Learn More</a></p>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/sala1reduc.jpg" class="img-rounded" >
               <div class="container">
                    <div class="carousel-caption">
                        <h4>Salón Avila</h4>
                        <p>Mirad porque os lleva este nombre este importante salón de reuniones, que cuenta con todas las comodidades
                        para realizar las reuniones mas importantes dentro de la corporación</p>
                        <p><a class="btn btn-lg btn-primary" href="www.samsung.com/ve" role="button">Learn More</a></p>
                    </div>
                </div>
            </div>

        </div>
        <a class="carousel-control left" href="#homeCarousel" role="button" data-slide="prev">&lsaquo;<span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="carousel-control right" href="#homeCarousel" role="button" data-slide="next">&rsaquo;<span class="glyphicon glyphicon-chevron-right"></span></a>
        <!--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>-->
    </div>
<!-- </div> -->


<p>Aquí podrás encontrar información sobre la salas de reuniones</p>

<ul>
    <li>Agendar Reuniones</li>
    <li>Ver Información de Reuniones</li>
    <li>Ver Salas Disponibles</li>
</ul>

