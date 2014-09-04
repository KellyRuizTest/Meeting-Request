<html>
    <head>        
        <link href="/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/fullcalendar/fullcalendar/fullcalendar.print.css" rel="stylesheet" media="print" />
        <script type="text/javascript" src="/assets/fullcalendar/lib/jquery.min.js"</script>
        <script type="text/javascript" src="/assets/fullcalendar/lib/jquery-ui.custom.min.js"</script>
        <script type="text/javascript" src="/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
    </head>

    <?php
    $this->breadcrumbs = array(
        'Reunions',
    );
    ?>
<?php echo Yii::app()->bootstrap->register(); ?>
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
<?php echo Yii::app()->user->name; ?>

        <div id='calendar'>
           

            
        </div>

    </body>
</html>

