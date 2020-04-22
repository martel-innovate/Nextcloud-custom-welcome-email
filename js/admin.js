$(document).ready(function() {
	var $welcome_email_text = $('#modifiedwelcomeemail').find('.welcome_email_text');
	var $welcome_email_subject = $('#modifiedwelcomeemail').find('.welcome_email_subject');
	var $welcome_email_header = $('#modifiedwelcomeemail').find('.welcome_email_header');
	var $welcome_email_button_text = $('#modifiedwelcomeemail').find('.welcome_email_button_text');
	var $welcome_email_button_link = $('#modifiedwelcomeemail').find('.welcome_email_button_link');

	$welcome_email_text.change(function(event) {
		var value = event.target.value;
		OC.AppConfig.setValue('modifiedwelcomeemail', 'welcome_email_text', value);
		$welcome_email_text.next("img").show(0).delay(500).fadeOut('slow');
	});

	$welcome_email_subject.change(function(event) {
		var value = event.target.value;
		OC.AppConfig.setValue('modifiedwelcomeemail', 'welcome_email_subject', value);
		$welcome_email_subject.next("img").show(0).delay(500).fadeOut('slow');
	});

	$welcome_email_header.change(function(event) {
		var value = event.target.value;
		OC.AppConfig.setValue('modifiedwelcomeemail', 'welcome_email_header', value);
		$welcome_email_header.next("img").show(0).delay(500).fadeOut('slow');
	});

	$welcome_email_button_text.change(function(event) {
		var value = event.target.value;
		OC.AppConfig.setValue('modifiedwelcomeemail', 'welcome_email_button_text', value);
		$welcome_email_button_text.next("img").show(0).delay(500).fadeOut('slow');
	});

	$welcome_email_button_link.change(function(event) {
		var value = event.target.value;
		OC.AppConfig.setValue('modifiedwelcomeemail', 'welcome_email_button_link', value);
		$welcome_email_button_link.next("img").show(0).delay(500).fadeOut('slow');
	});
});
