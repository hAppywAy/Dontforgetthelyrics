<section id="contenu">
		<span class="titre_nouvelle">Connection</span>
		<div class="sous_titre"></div>
		<form style="margin-top: 20px;" action="<?php echo base_url().'connection/login/4545'; ?>" method="post">
			<input style="height: 20px; width: 30%" name="username" type="text" placeholder="Username" value="<?php echo set_value('username'); ?>" />
			<input style="height: 20px; width: 40%" name="password" type="password" placeholder="Password" />
			<br />
			<?php echo hash ('sha256', 'password', false); ?>
			<br />
			<input style="height: 30px; width: 15%" name="form_sent" value="Sign in" type="submit"/>
		</form>
		<?php echo form_error('username'); ?>
		<?php echo form_error('password'); ?>
</section>