<!--
/**
 * Created by IntelliJ IDEA.
 * User: TRAVELDEN DEV
 * Date: 09/10/2017
 * Time: 16:49
 */
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../../../favicon.ico">

	<title><?php echo $title ?></title>

	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">

</head>

<body>
<?php $this->load->view('layouts/header_nav') ?>
<div class="container-fluid">
	<div class="row">
		<?php $this->load->view('layouts/left_nav') ?>

		<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
			<h1>Staff Registration</h1>
			<dvi class="container">
				<div class="col-sm-12">

					<?php $this->load->view('helpers/flash') ?>
					<?php echo form_open('staff/process', array('class'=>'form-horizontal')); ?>
					<fieldset>
						<legend>Staff Registration <?php echo $edit_user->last_name?></legend>
						<div class="form-group">
							<label for="Title" class="col-lg-2 control-label">Title</label>
							<?php echo form_error('title'); ?>
							<div class="col-lg-10">
								<select class="form-control" name="title" id="select">
									<option value="<?php echo $edit_user->title?>"><?php echo $edit_user->title?></option>
									<option value="Mr.">Mr.</option>
									<option value="Mrs.">Mrs.</option>
									<option value="Ms.">Ms.</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="First Name" class="col-lg-2 control-label">First Name</label>
							<?php echo form_error('first_name'); ?>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="first_name" value="<?php echo $edit_user->first_name?>" placeholder="First Name">
							</div>
						</div>
						<div class="form-group">
							<label for="First Name" class="col-lg-2 control-label">Last Name</label>
							<?php echo form_error('last_name'); ?>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="last_name" value="<?php echo $edit_user->last_name?>" placeholder="First Name">
							</div>
						</div>
						<div class="form-group">
							<label for="Last Name" class="col-lg-2 control-label">Email</label>
							<?php echo form_error('username'); ?>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="username" value="<?php echo $edit_user->username?>" placeholder="Last Name">
							</div>
						</div>
						<div class="form-group">
							<label for="Role" class="col-lg-2 control-label">Gender</label>
							<div class="col-lg-10">
								<select class="form-control" name="gender" id="select">
									<option value="<?php echo $edit_user->gender?>"><?php echo $edit_user->gender?></option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="Role" class="col-lg-2 control-label">Role</label>
							<div class="col-lg-10">
								<select class="form-control" name="role" id="select">
									<option value="<?php echo $edit_user->role?>"><?php echo $edit_user->role?></option>
									<option value="Supper_Admin">Supper_Admin</option>
									<option value="Admin">Admin</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="Email" class="col-lg-2 control-label">Phone</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="phone" value="<?php echo $edit_user->phone?>" placeholder="Phone Number">
							</div>
						</div>
						<div class="form-group">
							<label for="Date Of Birth" class="col-lg-2 control-label">Date Of Birth</label>
							<div class="col-lg-10">
								<input type="date" class="form-control" name="date_of_birth" value="<?php echo $edit_user->date_of_birth?>">
							</div>
						</div>
						<div class="form-group">
							<label for="Password" class="col-lg-2 control-label">Status</label>
							<div class="col-lg-10">
								<select class="form-control" name="status" id="select">
									<option value="<?php echo $edit_user->status?>"><?php echo $edit_user->status?></option>
									<option value="Pending">Pending</option>
									<option value="Active">Active</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="Role" class="col-lg-2 control-label">Role</label>
							<div class="col-lg-10">
								<select class="form-control" name="role" id="select">
									<option value="<?php echo $edit_user->role?>"><?php echo $edit_user->role?></option>
									<option value="Supper_Admin">Supper_Admin</option>
									<option value="Admin">Admin</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="Marital Status" class="col-lg-2 control-label">Marital Status</label>
							<div class="col-lg-10">
								<select class="form-control" name="marital_status" id="select">
									<option value="<?php echo $edit_user->marital_status?>"><?php echo $edit_user->marital_status?></option>
									<option value="Single">Single</option>
									<option value="Married">Married</option>
									<option value="Widow">Widow</option>
									<option value="Widower">Widower</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-10 col-lg-offset-2">
								<input type="hidden" class="form-control" name="id" value="<?php echo $edit_user->id?>">
								<button type="reset" class="btn btn-default">Cancel</button>
								<button type="submit" class="btn btn-success">Submit</button>
							</div>
						</div>
					</fieldset>
					<?php echo form_close(); ?>
				</div>
			</dvi>
		</main>
	</div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
