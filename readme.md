# How to create templates

1. Set up the email to display correctly:
	1. Extract the body of your email (Remove the header and footer sections and just take the main content part)
	2. Create a php file in site>templates and place the body section in there.
	3. Add this to the top of the file:

		<?php snippet('email-header') ?>

	4. Add this to the bottom of the file:

		<?php snippet('email-footer') ?>
		<?php snippet('email-inliner') ?>

	5. Add in (link: https://getkirby.com/docs/templates/hello-world text: templating language) to the sections you want to edit.
