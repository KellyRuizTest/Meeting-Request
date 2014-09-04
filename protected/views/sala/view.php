
<h1>View Room </h1>
<hr/>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
        'type'=>'bordered',
	'attributes'=>array(
		'nombre',
	),
)); ?>
