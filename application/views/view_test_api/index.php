<div class="panel panel-primary"> 
	<div class="panel-heading"> 
		<h3 class="panel-title">
		Panel title
		</h3> 
	</div> 
	<div class="panel-body">
		<?php
			echo $this->element("grid_board");
		?>
	</div> 
</div>
<script type="text/javascript" language="javascript" class="init">
	$(document).ready(function() {
		var table = $('#example').DataTable();
	} );
</script>