<?php

script('modifiedwelcomeemail', 'admin');
style('modifiedwelcomeemail', 'admin');

/** @var array $_ */
/** @var \OCP\IL10N $l */
?>
<div id="modifiedwelcomeemail" class="section">
	<h2 class="inlineblock"><?php p($l->t('Welcome Email Structure')); ?></h2>
	<p class="settings-hint"><?php p($l->t('Configure the welcome email sent to new users.')); ?></p>
	<p>
		<label>
			<label for="welcome_email_subject" width="400" align="right">Email Subject</label>
			<input type="text" name="welcome_email_subject" class="welcome_email_subject" placeholder="Your account was created!" value="<?php p($_['welcome_email_subject']) ?>" style="width: 300px;" />
			<img class="svg action saved-info hidden" src="/core/img/actions/checkmark.svg" title="Configuration saved">
		</label>
	</p>
	<p>
		<label>
			<label for="welcome_email_header" width="400" align="right">Email Header</label>
			<input type="text" name="welcome_email_header" class="welcome_email_header" placeholder="Welcome to Nextcloud!" value="<?php p($_['welcome_email_header']) ?>" style="width: 300px;" />
			<img class="svg action saved-info hidden" src="/core/img/actions/checkmark.svg" title="Configuration saved">
		</label>
	</p>
	<p>
		<label>
			<label for="welcome_email_text" width="800" align="right">Email Body</label>
			<input type="text" name="welcome_email_text" class="welcome_email_text" placeholder="Welcome! Follow the link bellow to access your account" value="<?php p($_['welcome_email_text']) ?>" style="width: 800px;" />
			<img class="svg action saved-info hidden" src="/core/img/actions/checkmark.svg" title="Configuration saved">
		</label>
	</p>
	<p>
		<label>
			<label for="welcome_email_button_text" width="400" align="right">Bottom Button Text</label>
			<input type="text" name="welcome_email_button_text" class="welcome_email_button_text" placeholder="Go to your account" value="<?php p($_['welcome_email_button_text']) ?>" style="width: 300px;" />
			<img class="svg action saved-info hidden" src="/core/img/actions/checkmark.svg" title="Configuration saved">
		</label>
	</p>
	<p>
		<label>
			<label for="welcome_email_button_link" width="400" align="right">Bottom Button URL</label>
			<input type="text" name="welcome_email_button_link" class="welcome_email_button_link" placeholder="http://www.nextcloud.com" value="<?php p($_['welcome_email_button_link']) ?>" style="width: 300px;" />
			<img class="svg action saved-info hidden" src="/core/img/actions/checkmark.svg" title="Configuration saved">
		</label>
	</p>
</div>
