<div class="panel panel-primary"> 
	<div class="panel-heading"> 
		<h3 class="panel-title">
		Create New User For Receiver
		</h3> 
	</div>

	<div class="panel-body">
		<form action="<?=$base_url.$active_controller.'/registration_as_receiver'?>" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="username">User Name</label>
					<input type="text" name="username" class="form-control" id="username" placeholder="username" value="<?=set_value("username")?>">
					<?php echo form_error('username'); ?>
				</div>
				<input type="hidden" name="usertype" value="<?="Provider"?>"/>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="fullname">Full Name</label>
					<input type="text" name="fullname" class="form-control" id="fullname" placeholder="Full Name" value="<?=set_value("fullname")?>">
					<?php echo form_error('fullname'); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control" id="password" placeholder="Password" value="<?=set_value("password")?>">
					<?php echo form_error('password'); ?>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="confirm_password">Confirm Password</label>
					<input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Password" value="<?=set_value("confirm_password")?>">
					<?php echo form_error('confirm_password'); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="mobile">Mobile</label>
					<input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile" value="<?=set_value("mobile")?>">
					<?php echo form_error('mobile'); ?>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" value="<?=set_value("phone")?>">
					<?php echo form_error('phone'); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?=set_value("email")?>">
					<?php echo form_error('email'); ?>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="confirm_email">Confirm Email</label>
					<input type="email" name="confirm_email" class="form-control" id="confirm_email" placeholder="Confirm Email" value="<?=set_value("confirm_email")?>">
					<?php echo form_error('confirm_email'); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="gender">Gender</label>
					<?php
						echo form_dropdown('gender',$gender,set_value('gender'),'class="form-control" id="gender"');
					?>
					<?php echo form_error('gender'); ?>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="dob">Date Of Birth</label>
					<input type="text" name="dob" class="form-control datetimepicker" id="dob" placeholder="08-10-1993" value="<?=set_value("dob")?>">
					<?php echo form_error('dob'); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="district_id">District</label>
					<?php
						echo form_dropdown('district_id', $district_list, set_value('district_id'), 'class="form-control" id="district_id"');
					?>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="thana_id">Thana</label>
					<?php
						echo form_dropdown('thana_id', $thana_list, set_value('thana_id'), 'class="form-control" id="thana_id"');
					?>
					<?php echo form_error('thana_id'); ?>
				</div>
			</div>
		</div>
		<div class="row gllpLatlonPicker">
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label for="general_address">General Address</label>
							<input type="text" name="general_address" class="form-control gllpLocationName" id="general_address" placeholder="General Address" value="<?=set_value("general_address")?>">
							<?php echo form_error('general_address'); ?>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<label for="latitude">Latitude</label>
							<input type="text" name="latitude" class="form-control gllpLatitude" id="latitude" value="23.8018225" value="<?=set_value("latitude")?>">
							<?php echo form_error('latitude'); ?>
						</div>
					</div>
					<input type="hidden" class="gllpZoom" value="10"/>
					<div class="col-sm-12">
						<div class="form-group">
							<label for="longitude">Longitude</label>
							<input type="text" name="lognitude" class="form-control gllpLongitude" id="longitude" value="90.366426" value="<?=set_value("longitude")?>">
							<?php echo form_error('lognitude'); ?>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<label for="profile_pic">Upload Profile Pic</label>
							<input type="file" name="profile_pic" class="form-control" id="profile_pic">
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-12">
						<input type="text" class="gllpSearchField">
						<input type="button" class="gllpSearchButton" value="search">
						<br/>
						<div class="gllpMap">Google Maps</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="is_displayed"value="Yes"> Check To View Profile Picture
					</label>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
		</form>
	</div> 
</div>
<script type="text/javascript">
	$( document ).ready(function() {
		$("#district_id").change(function(){
			var district_id = $(this).val();
			$.ajax({
				url: "<?=$base_url.'ajax/get_thana_list'?>",
				type: "POST",
				data : {'district_id':district_id},
				success: function(result){
					//console.log(result);
					$("#thana_id").html(result);
				}
			});
		});
	});
</script>