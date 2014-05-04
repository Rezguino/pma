<?php echo $this->Form->create('User'); ?>




<div class="login">
	<div class="login-screen">
		<div class="login-icon">
			<img src="images/login/icon.png" alt="Welcome to Mail App" />
			<h4>Welcome    to <small> PMA App</small></h4>
		</div>

		<div class="login-form">
			<div class="form-group">
				<?= $this->Form->input('username', array(
					'class' => 'form-control login-field',
					'placeholder' => 'Your name'));?>

				</div>

				<div class="form-group">
					<?= $this->Form->input('password', array(
						'class' => 'form-control login-field',
						'placeholder' => 'Your password'));?>
					</div>

					<div class="form-group">
						<?= $this->Form->input('group', array(
							'class' => 'form-control login-field',
							'placeholder' => 'Your group name'));?>
						</div>

						<div class="form-group">
							 <?= $this->Form->input('tag', array(
           'data-role' => 'tagsinput',
           'value' => 'test',
           'class' => 'form-horizontal'));?>
							
							</div>





					</div>
					<?php echo $this->Form->submit('Sign in', array(
						'div' => 'form-group',
						'class' => 'btn btn-success btn-lg btn-block'
						)); ?>
						<?= $this->Form->end();?>

					</div>
				</div>
			</div>