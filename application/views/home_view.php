<!--
 * Created by IntelliJ IDEA.
 * User:  Ibrahim Olanrewaju Abdulsemiu
 * Date: 09/10/2017
 * Time: 15:50
-->

<h2>Hello Can you see me</h2>


<?php if($this->session->flashdata('errors')): ?>
	<?php echo $this->session->flashdata('errors'); ?>
<?php endif; ?>
<?php if($this->session->flashdata('success')): ?>
	<?php echo $this->session->flashdata('success'); ?>
<?php endif; ?>
<?php echo form_open('enquiry/add', array('class'=>'form-horizontal')); ?>
	<fieldset>
		<legend>Legend</legend>
		<div class="form-group">
			<label for="Username" class="col-lg-2 control-label">Username</label>
			<div class="col-lg-10">
				<input type="text" class="form-control" name="email" placeholder="Username">
			</div>
		</div>
		<div class="form-group">
			<label for="Password" class="col-lg-2 control-label">Password</label>
			<div class="col-lg-10">
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
		</div>
		<div class="form-group">
			<!--<label for="Confirm Password" class="col-lg-2 control-label">Confirm Password</label>-->
			<?php echo form_label('Confirm Password','Confirm',array('class'=>'col-lg-2 control-label')); ?>
			<div class="col-lg-10">
				<!--<input type="password" class="form-control" name="password" placeholder="Password">-->

				<?php echo form_password(array('class'=>'form-control','name'=>'confirm_password','placeholder'=>'Re-enter password'))?>
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
