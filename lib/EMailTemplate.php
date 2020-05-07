<?php

namespace OCA\ModifiedWelcomeEmail;

use OC\Mail\EMailTemplate as ParentTemplate;

class EMailTemplate extends ParentTemplate {

	public function setSubject(string $subject) {
		if ($this->emailId === 'settings.Welcome') {
			$welcome_email_subject = \OC::$server->getConfig()->getAppValue('modifiedwelcomeemail', 'welcome_email_subject');
			$this->subject = $welcome_email_subject;
			return;
		}
		$this->subject = $subject;
	}

	public function addHeading(string $title, $plainTitle = '') {
		if ($this->footerAdded) {
			return;
		}
		if ($this->emailId === 'settings.Welcome') {
			$welcome_email_header = \OC::$server->getConfig()->getAppValue('modifiedwelcomeemail', 'welcome_email_header');
			$this->htmlBody .= vsprintf($this->heading, [$welcome_email_header]);
			return;
		}
		parent::addHeading($title, $plainTitle);
	}

	public function addBodyButtonGroup(
		$textLeft, $urlLeft,
		$textRight, $urlRight,
		$plainTextLeft = '',
		$plainTextRight = '') {

		if ($this->emailId === 'settings.Welcome') {
			$welcome_email_button_text = \OC::$server->getConfig()->getAppValue('modifiedwelcomeemail', 'welcome_email_button_text');
			$welcome_email_button_link = \OC::$server->getConfig()->getAppValue('modifiedwelcomeemail', 'welcome_email_button_link');
			parent::addBodyButton($welcome_email_button_text, $welcome_email_button_link, $plainTextLeft);
			return;
		}
		parent::addBodyButtonGroup($textLeft, $urlLeft, $textRight, $urlRight, $plainTextLeft, $plainTextRight);
	}

	public function addBodyText(string $text, $plainText = '') {
		if ($this->footerAdded) {
			return;
		}
		if ($this->emailId === 'settings.Welcome') {
			// This bypasses the second body paragraph present by default in the new user template
			if (strpos($text, 'Your username') !== false) {
				return;
			}

			$this->ensureBodyListClosed();
			$this->ensureBodyIsOpened();

			$welcome_email_text = \OC::$server->getConfig()->getAppValue('modifiedwelcomeemail', 'welcome_email_text');
			$this->htmlBody .= vsprintf($this->bodyText, [$welcome_email_text]);
			return;
		}
		parent::addBodyText($text, $plainText);
	}

	public function addFooter(string $text = '', ?string $lang = null) {
		if ($this->footerAdded) {
			return;
		}
		$this->footerAdded = true;
		$this->ensureBodyIsClosed();
		$this->htmlBody .= '<br>';
		$this->htmlBody .= $this->tail;
		$this->plainBody .= PHP_EOL . '-- ' . PHP_EOL;
		$this->plainBody .= str_replace('<br>', PHP_EOL, $text);
	}
}
