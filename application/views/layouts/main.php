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
	<title><?php echo $title ?></title>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	<script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
</head>
<body>
<?php if(!$this->session->userdata('logged_in')== TRUE): ?>
<dvi class="container">
	<h3>Logout</h3>
	<?php echo form_open('logout'); ?>

	<?php if($this->session->userdata('username')): ?>
	<?php echo "You are logged in as ".$this->session->userdata('username'); ?>
		<br>
	<?php endif; ?>

	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	<?php echo form_close();?>
	<div class="col-sm-4">
		<?php $this->load->view('leftbar') ?>
	</div>
	<div class="col-sm-9">
		<?php $this->load->view($form_view); ?>
	</div>
</dvi>
<?php endif; ?>
</body>
</html>
