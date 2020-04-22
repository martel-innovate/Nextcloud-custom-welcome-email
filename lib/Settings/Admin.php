<?php

namespace OCA\ModifiedWelcomeEmail\Settings;

use OCP\AppFramework\Http\TemplateResponse;
use OCP\IConfig;
use OCP\IL10N;
use OCP\Settings\ISettings;

class Admin implements ISettings {

	protected $appName;
	protected $config;

	public function __construct($appName, IConfig $config) {
		$this->appName = $appName;
		$this->config = $config;
	}

	public function getForm() {
		$welcome_email_text = $this->config->getAppValue($this->appName, 'welcome_email_text', '');
		$welcome_email_subject = $this->config->getAppValue($this->appName, 'welcome_email_subject', '');
		$welcome_email_header = $this->config->getAppValue($this->appName, 'welcome_email_header', '');
		$welcome_email_button_text = $this->config->getAppValue($this->appName, 'welcome_email_button_text', '');
		$welcome_email_button_link = $this->config->getAppValue($this->appName, 'welcome_email_button_link', '');

		return new TemplateResponse($this->appName, 'admin', [
			'welcome_email_text' => $welcome_email_text,
			'welcome_email_subject' => $welcome_email_subject,
			'welcome_email_header' => $welcome_email_header,
			'welcome_email_button_text' => $welcome_email_button_text,
			'welcome_email_button_link' => $welcome_email_button_link,
		], 'blank');
	}

	public function getSection() {
		return 'server';
	}

	public function getPriority() {
		return 20;
	}
}
