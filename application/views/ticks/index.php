<script type="text/javascript">
	$(document).ready(function(){
		// where minutes is your every minutes
		var minutes = 15;

		setInterval(function() {
		  $.ajax({
			  url: '<?php echo base_url('ticks/generate') ?>',
			  dataType : 'html',
			  type : 'post',
			  data : {'page' : 'listing'},
			  beforeSend: function( xhr ) {
				// i'm tired and i don't have enough time to make igat2 of my code hehe
			  },
			  success : function(data) {
				$(".table").html(data);
			  }	
			})
		}, 1000 * 60 * minutes); 
	});
</script>

<div class="container">
	<h1>Ticks</h1>
	<table class="table">
		<?php if(count($ticks) > 0) { ?>
		<thead>
			<tr>
				<?php foreach ($ticks[0] as $key => $value) { ?>
					<td><?php echo $key; ?></td>
				<?php } ?>
			</tr>
		</thead>
		<tbody class="ticks-listing">
			<?php foreach ($ticks as $tick) { ?>
				<tr>
					<?php foreach ($tick as $value) { ?>
						<td><?php echo $value; ?></td>
					<?php } ?>
				</tr>
			<?php } ?>
		</tbody>
		<?php } else { ?> 
		<tr>
			<td>
				<h2> processing... </h2>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
