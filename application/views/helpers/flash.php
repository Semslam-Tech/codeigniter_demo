<p style="color: #ffffff; background-color: #aa0000">
	<?php if($this->session->flashdata('errors')): ?>
		<?php echo $this->session->flashdata('errors'); ?>
	<?php endif; ?>
</p>
<p style="color: #ffffff; background-color: #00CC00">
	<?php if($this->session->flashdata('success')): ?>
		<?php echo $this->session->flashdata('success'); ?>
	<?php endif; ?>
</p>
<p style="color: #ffffff; background-color: #e0a800">
	<?php if($this->session->flashdata('info')): ?>
		<?php echo $this->session->flashdata('info'); ?>
	<?php endif; ?>
</p>
