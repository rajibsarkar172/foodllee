<table id="example" class="table table-bordered table-hover">
	<thead>
		<tr>
			<?php
				foreach($columns as $field=>$label){
			?>
				<td><?=$label?></td>
			<?php
				}
			?>
			<th>Action</th>
		</tr>
	</thead>

	<tbody>
	<?php
		foreach($user_list as $user){
	?>
		<tr>
			<?php
				foreach($columns as $field=>$label){
			?>
				<td><?=$user[$field]?></td>
			<?php
				}
			?>
			<td>
				<a href="<?=$base_url.$active_controller.'/view/'.$user['id']?>" class="btn btn-primary">View</a>
				<a href="<?=$base_url.$active_controller.'/edit/'.$user['id']?>" class="btn btn-primary">Edit</a>
				<a href="<?=$base_url.$active_controller.'/delete/'.$user['id']?>" class="btn btn-danger">Delete</a>
			</td>
		</tr>
	<?php
		}
	?>
	</tbody>
</table>