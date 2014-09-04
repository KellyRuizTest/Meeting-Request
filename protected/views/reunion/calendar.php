<html>
    <head>
        <!--<link rel="stylesheet" type="text/css" href="/assets/fullcalendar/fullcalendar/fullcalendar.css" />
        <link rel="stylesheet" type="text/css" href="/assets/fullcalendar/fullcalendar/fullcalendar.print.css" media="print" />
        <script type="text/javascript" src="/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
        <script type="text/javascript" src="/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>-->
    </head>

    <?php /* Yii::app()->clientScript->registerCoreScript('jquery') 
      ->registerScriptFile( Yii::app()->baseUrl . '/fullcalendar/fullcalendar/fullcalendar.css')
      ->registerScriptFile( Yii::app()->baseUrl . '/fullcalendar/fullcalendar/fullcalendar.print.css')
      ->registerScriptFile( Yii::app()->baseUrl . '/fullcalendar/fullcalendar/fullcalendar.min.js')
      ->registerScriptFile( Yii::app()->baseUrl . '/fullcalendar/fullcalendar/fullcalendar.js')
     */ ?>

    <body>
        <h1>Meeting</h1>
        <hr />

        <div class="form">
            <?php
            $this->beginWidget('zii.widgets.CPortlet', array());
            $this->widget('bootstrap.widgets.TbMenu', array(
                'type' => 'pills',
                'items' => array(
                    array('label' => 'Create', 'icon' => 'home', 'url' => array('create'), 'active' => true),
                    // array('label'=>'List', 'icon'=>'book', 'url'=>array('list')),
                    array('label' => 'Admin', 'icon' => 'user', 'url' => array('admin')),
                //array('label'=>'Settings', 'icon'=>'cog', 'url'=>'#'),
                ),
            ));
            $this->endWidget();
            ?>
            <hr/>
        </div>

        <div id="calendar"></div>
        <br>
        <br>
        <br>
        <br>
        </hr>
     
        <?php
        foreach ($model as $event) {

    $fechaCreated = $event->fecha;
    $hourCreated = $event->hora_init;
    $hourFinished = $event->hora_final;
    
    echo "{"; echo "<br>";
    echo "title: '" . $event->nombre . "',"; echo "<br>";
    echo "start: '" . $event->fecha . " $hourCreated"."',"; echo "<br>";
    echo "start: '" . $event->fecha . " $hourFinished"."',"; echo "<br>";
    
    //echo "allDay: false,";
    //echo "url: '" . Yii::app()->createUrl("reunion/view", array("id"=>$event->id)) . "'";
    echo "},";echo "<br>";
}
?>
        
        <div id='tftf'>

            <?php
            $this->widget('ext.fullcalendar.EFullCalendarHeart', array(
                //'themeCssFile'=>'cupertino/jquery-ui.min.css',
                'options' => array(
                    'header' => array(
                        'left' => '',
                        'center' => '',
                        'right' => '',
                    ),
                    'events' => $this->createUrl('/reunion/calendar'), // URL to get event
            )));
            ?>



        </div>
    </body>
</html>

<script type="text/javascript">

    $(document).ready(function() {

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            events: [
<?php
foreach ($model as $event) {

    $fechaCreated = $event->fecha;
    //echo $event->fecha;
    $hourCreated = $event->hora_init;
    $hourFinished = $event->hora_final;
    //echo $fechaCreated;
    //echo $event->hora_init;
    //echo $event->fecha;
    echo "{";
    echo "title: '" . $event->nombre . "',";
    echo "start: '" . $event->fecha . "',";
    //echo "end  : '" . $fechaCreated . ",". $hourFinished . "',";
    //echo "allDay: false,";
    //echo "url: '" . Yii::app()->createUrl("reunion/view", array("id"=>$event->id)) . "'";
    echo "},";
}
?>
            ]

        });
    });
</script>

<script type="text/javascript">

    $($(document).ready(function() {
    $('#calendar').click(function (){

    $('#tftf').hide("fast");
    });
            });

</script>

<style type='text/css'>
    #calendar {
        width: 900px;
        margin: 0 auto;
    }
</style>
