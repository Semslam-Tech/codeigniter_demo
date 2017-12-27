<!--
/**
 * Created by IntelliJ IDEA.
 * User: TRAVELDEN DEV
 * Date: 09/10/2017
 * Time: 13:14
 */-->

<!DOCTYPE html>
<html>
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
<div class="container-fluid">
	<div class="row">
		<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
			<h1>Staff Registration</h1>
			<dvi class="container">
				<div class="col-sm-12">

					<?php $this->load->view('helpers/flash') ?>
					<?php echo form_open('enquiry/process', array('class'=>'form-horizontal')); ?>
					<fieldset>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="Title" class="col-lg-2 control-label">Title</label>
								<?php echo form_error('Title'); ?>
								<div class="col-lg-10">
									<select class="form-control" name="title" id="select">
										<option value="Mr.">Mr.</option>
										<option value="Mrs.">Mrs.</option>
										<option value="Ms.">Ms.</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="First Name" class="col-lg-2 control-label">First Name</label>
								<?php echo form_error('First Name'); ?>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="first_name" placeholder="First Name">
								</div>
							</div>
							<div class="form-group">
								<label for="Last Name" class="col-lg-2 control-label">Last Name</label>
								<?php echo form_error('last_name'); ?>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="last_name" placeholder="Last Name">
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="Email" class="col-lg-2 control-label">Email</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="email" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="Email" class="col-lg-2 control-label">Phone</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="phone" placeholder="Phone Number">
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="Date Of Birth" class="col-lg-2 control-label">Date Of Birth</label>
								<div class="col-lg-10">
									<input type="date" class="form-control" name="date_of_birth">
								</div>
							</div>
							<div class="form-group">
								<label for="Date Of Birth" class="col-lg-2 control-label">Address</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="address">
								</div>
							</div>
							<div class="form-group">
								<label for="State" class="col-lg-2 control-label">State</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="state">
								</div>
							</div>
							<div class="form-group">
								<label for="Nationality" class="col-lg-2 control-label">Nationality</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="nationality">
								</div>
							</div>
							<div class="form-group">
								<label for="Course" class="col-lg-2 control-label">Course</label>
								<div class="col-lg-10">
									<select class="form-control" name="course" id="select">
										<option value="1">IATA FOUNDATION IN TRAVEL & TOURISM WITH AMADEUS</option>
										<option value="2">IATA TRAVEL & TOURISM CONSULTANT</option>
										<option value="3">IATA MANAGING THE TRAVEL BUSINESS</option>
									</select>
								</div>
							</div>

						</div>
						<div class="col-sm-12">
							<h1>ONE</h1>
							<div class="form-group">
								<label for="Image" class="col-lg-2 control-label">School Name</label>
								<div class="col-lg-3">
									<input type="text" class="form-control" name="school_name[0]">
								</div>
							</div>
							<div class="form-group">
								<label for="Image" class="col-lg-2 control-label">Programme</label>
								<div class="col-lg-3">
									<input type="text" class="form-control" name="programme[0]">
								</div>
							</div>
							<div class="form-group">
								<label for="Image" class="col-lg-2 control-label">Start Date</label>
								<div class="col-lg-3">
									<input type="date" class="form-control" name="start_date[0]">
								</div>
							</div>
							<div class="form-group">
								<label for="Image" class="col-lg-2 control-label">End Date</label>
								<div class="col-lg-3">
									<input type="date" class="form-control" name="end_date[0]">
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<h1>TWO</h1>
							<div class="form-group">
								<label for="Image" class="col-lg-2 control-label">School Name</label>
								<div class="col-lg-3">
									<input type="text" class="form-control" name="school_name[1]">
								</div>
							</div>
							<div class="form-group">
								<label for="Image" class="col-lg-2 control-label">Programme</label>
								<div class="col-lg-3">
									<input type="text" class="form-control" name="programme[1]">
								</div>
							</div>
							<div class="form-group">
								<label for="Image" class="col-lg-2 control-label">Start Date</label>
								<div class="col-lg-3">
									<input type="date" class="form-control" name="start_date[1]">
								</div>
							</div>
							<div class="form-group">
								<label for="Image" class="col-lg-2 control-label">End Date</label>
								<div class="col-lg-3">
									<input type="date" class="form-control" name="end_date[1]">
								</div>
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
		</main>
	</div>
	<script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
