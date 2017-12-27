<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
	<ul class="nav nav-pills flex-column">
		<li class="nav-item">
			<a class="nav-link <?php echo ($point == 'dash'? 'active' : null) ?>" href="<?php echo base_url()?>admin/dashboard">Dashboard <span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item">
			<a class="nav-link <?php echo ($point == 'reg'? 'active' : null) ?>" href="<?php echo base_url()?>staff/registration">Staff Registration</a>
		</li>
		<li class="nav-item">
			<a class="nav-link <?php echo ($point == 'users_list'? 'active' : null) ?>" href="<?php echo base_url()?>staff/list">Staff List</a>
		</li>
		<li class="nav-item">
			<a class="nav-link <?php echo ($point == 'std_form'? 'active' : null) ?>" href="<?php echo base_url()?>student">Admission</a>
		</li>
		<li class="nav-item">
			<a class="nav-link <?php echo ($point == 'std_list'? 'active' : null) ?>" href="<?php echo base_url()?>student/list">Student List</a>
		</li>
	</ul>

	<ul class="nav nav-pills flex-column">
		<li class="nav-item">
			<a class="nav-link" href="#">Nav item</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Nav item again</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">One more nav</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Another nav item</a>
		</li>
	</ul>

	<ul class="nav nav-pills flex-column">
		<li class="nav-item">
			<a class="nav-link" href="#">Nav item again</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">One more nav</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Another nav item</a>
		</li>
	</ul>
</nav>
