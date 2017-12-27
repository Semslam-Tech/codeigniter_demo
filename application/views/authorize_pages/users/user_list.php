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
			<h1>Staff List</h1>
			<?php $this->load->view('helpers/flash') ?>
			<h2>Section title</h2>
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
					<tr>
						<th>#</th>
						<th>Image</th>
						<th>Full Name</th>
						<th>Gender</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Role</th>
						<th>Status</th>
						<th>Modified</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
						<?php if(count($users)): ?>
							<?php foreach ($users as $item): ?>
								<tr>
									<td><?php echo $item->id ?></td>
									<td>
										<?php if($item->image != null): ?>
										<img style="width: 60px;height: 70px" src=<?php echo $item->image;?>>
										<?php else: ?>
											<?php if($item->gender == 'Male'): ?>
												<img style="width: 60px;height: 70px" src=<?php echo base_url()?>assets/img/avatar3.png>
											<?php else: ?>
												<img style="width: 60px;height: 70px" src=<?php echo base_url()?>assets/img/avatar6.png>
											<?php endif; ?>
										<?php endif; ?>
									</td>
									<td><?php echo $item->title ?> <?php echo $item->first_name ?> <?php echo $item->last_name ?></td>
									<td><?php echo $item->gender ?></td>
									<td><?php echo $item->phone ?></td>
									<td><?php echo $item->username ?></td>
									<td><?php echo $item->role ?></td>
									<td><?php echo $item->status == 'Pending'? '<p style="background-color: #e0a800; color: #ffffff">'.$item->status.'</p>':'<p style="background-color: limegreen; color: #ffffff">'.$item->status.'</p>' ?></td>
									<td><?php echo $item->modified ?></td>
									<td>
										<a class="btn btn-primary" href="<?php echo base_url();?>staff/profile/<?php echo $item->id; ?>">Preview</a>
										<a class="btn btn-success" href="<?php echo base_url();?>staff/edit/<?php echo $item->id; ?>">Edit</a>
										<a class="btn btn-success" href="<?php echo base_url();?>staff/delete/<?php echo $item->id; ?>">Delete</a>
									</td>
								</tr>
							<?php endforeach; ?>
						<?php else: ?>
								<tr>
									<td>No Record Found!</td>
								</tr>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
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
