<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<a class="navbar-brand" href="#">LAA</a>
	<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active" style=" color: #ffffff; padding-left: 100px">
				<?php if($this->session->userdata('name')): ?>
					<?php echo "You are logged in as ".$this->session->userdata('name'); ?>
				<?php endif; ?>
			</li>
		</ul>
		<a class="btn btn-primary" href="<?php echo base_url()?>logout">Logout</a>
	</div>
</nav>
