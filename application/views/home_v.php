	<div class="row">
		<div class="col-xs-3">
		<?php if($this->session->userdata('logged_in')): ?>
			<h2>Logout</h2>
			
			<?php echo form_open('users/logout'); ?>
			<?php if($this->session->userdata('username')): ?>
				<p><?php echo "You are logged in as " . $this->session->userdata('username'); ?></p>

			<?php endif; ?>

				<?php $data = array(
					'class' => 'btn btn-primary',
					'name' => 'submit',
					'value' => 'Logout'
				)?>
				<?php echo form_submit($data); ?>
			<?php echo form_close(); ?>

		<?php else: ?>
			<h2>Login Form</h2>
			<?php $attributes = array('id' => 'login_form', 'class' => 'form_horizontal'); ?>

			<?php 
				$data_id = array(
					'class' => 'form-control',
					'name' => 'username',
					'placeholder' => 'Enter Username'
				);
			?>
			<?php 
				$data_pwd = array(
					'type' => 'password',
					'class' => 'form-control',
					'name' => 'password',
					'placeholder' => 'Enter Password'
				);
			?>
			<?php 
				$data_confirm_pwd = array(
					'type' => 'password',
					'class' => 'form-control',
					'name' => 'confirm_password',
					'placeholder' => 'Confirm Password'
				);
			?>			
			<?php 
				$data_btn = array(
					'class' => 'btn btn-primary',
					'name' => 'submit',
					'value' => 'Login'
				);
			?>

			<?php if ($this->session->flashdata('errors')): ?>
				<?php echo $this->session->flashdata('errors'); ?>
			<?php endif ?>

			<?php echo form_open('users/login', $attributes); ?>
				<div class="form-group">
					<?php echo form_label('Username'); ?>
					<?php echo form_input($data_id); ?>
				</div>
				<div class="form-group">
					<?php echo form_label('Password'); ?>
					<?php echo form_input($data_pwd); ?>
				</div>
				<div class="form-group">
					<?php echo form_label('Confirm Password'); ?>
					<?php echo form_input($data_confirm_pwd); ?>
				</div>				
				<div class="form-group">
					<?php echo form_submit($data_btn); ?>
				</div>
			<?php echo form_close(); ?>

		<?php endif; ?>
		</div>

		<div class="col-xs-9">
			<p class="bg-success">
				<?php  if($this->session->flashdata('login_success')): ?>
					<?php echo $this->session->flashdata('login_success'); ?>
				<?php endif; ?>
			</p>
			<p class="bg-danger">
				<?php  if($this->session->flashdata('login_falied')): ?>
					<?php echo $this->session->flashdata('login_falied'); ?>
				<?php endif; ?>
			</p>		
			<h2><?php echo $welcome; ?>	</h2>
		</div>
	</div>