<style>
th{
	text-align:right;
}
</style>
<div class="panel panel-primary"> 
	<div class="panel-heading"> 
		<h3 class="panel-title">
		User Details
		</h3> 
	</div>
	<div class="panel-body">
		<table class="table table-bordered table-stripped table-hover">
			<tr>
				<th>User Name : </th>
				<td><?=$user_details['username']?></td>
			</tr>
			<tr>
				<th>Full Name : </th>
				<td><?=$user_details['fullname']?></td>
			</tr>
			<tr>
				<th>Profile Picture : </th>
				<td><img width="150px" height="180px" src="<?=$image_url.'profile_pic/'.$user_details['profile_pic']?>"/></td>
			</tr>
			<tr>
				<th>User Type : </th>
				<td><?=$user_details['usertype']?></td>
			</tr>
			<tr>
				<th>Mobile : </th>
				<td><?=$user_details['mobile']?></td>
			</tr>
			<tr>
				<th>Phone : </th>
				<td><?=$user_details['phone']?></td>
			</tr>
			<tr>
				<th>Email : </th>
				<td><?=$user_details['email']?></td>
			</tr>
			<tr>
				<th>Gender : </th>
				<td><?=$user_details['gender']?></td>
			</tr>
			<tr>
				<th>Date Of Birth : </th>
				<td><?=$user_details['dob']?></td>
			</tr>
			<tr>
				<th>Address : </th>
				<td><?=$user_details['general_address']?></td>
			</tr>
			<tr>
				<th>Address In Map: </th>
				<td>
					<div class="gllpLatlonPicker">
						<div class="gllpMap">Google Maps</div>
						<input type="hidden" class="gllpLatitude" value="<?=$user_details['latitude']?>"/>
						<input type="hidden" class="gllpLongitude" value="<?=$user_details['lognitude']?>"/>
						<input type="hidden" class="gllpZoom" value="15"/>
					</div>
				</td>
			</tr>
		</table>
	</div> 
</div>