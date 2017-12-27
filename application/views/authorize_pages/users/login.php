<!--
/**
 * Created by IntelliJ IDEA.
 * User: TRAVELDEN DEV
 * Date: 09/10/2017
 * Time: 16:49
 */
-->
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	<script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
</head>
<body>

<dvi class="container">
	<div class="col-sm-4">
		<?php $this->load->view('leftbar') ?>
	</div>
	<div class="col-sm-9">
		<?php $this->load->view('helpers/flash') ?>
		<?php echo form_open('login/process', array('class'=>'form-horizontal')); ?>
		<fieldset>
			<legend>Login Users</legend>
			<div class="form-group">
				<label for="Username" class="col-lg-2 control-label">Username</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" name="username" placeholder="Username">
				</div>
			</div>
			<div class="form-group">
				<label for="Password" class="col-lg-2 control-label">Password</label>
				<div class="col-lg-10">
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-10 col-lg-offset-2">
					<button type="reset" class="btn btn-default">Cancel</button>
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
			</div>
		</fieldset>
		<?php echo form_close(); ?>
	</div>
</dvi>
</body>
</html>
