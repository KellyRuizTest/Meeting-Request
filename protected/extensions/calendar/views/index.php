<div id='fullcalendar'></div>
<script>
$(document).ready(function() {
	$('#fullcalendar').fullCalendar({
		events: [
<?php foreach ($events as $data): ?>
						{
								id: '<?php echo $data['idReunion']; ?>',
								title : '<?php echo $data['nombre']; ?>',
								start  : '<?php echo $data['fecha']; ?>',
								end  : '<?php echo $data['fecha']; ?>',
								href  : '<?php echo $data['href']; ?>',
		         },
<?php endforeach; ?>		         
		     ],
		eventClick : function(event) {
			send(event.id, event.href);
		},		     
	});
});
</script>
