# How to create templates

## Set up the email to display correctly:
1. Extract the body of your email (Remove the header and footer sections and just take the main content part)
2. Create a php file in site>templates and place the body section in there.
3. Add this to the top of the file: 
	```html
	<?php snippet('email-header') ?>
	```
4. Add this to the bottom of the file:
	```html
	<?php snippet('email-footer') ?>
	<?php snippet('email-inliner') ?>
	```
5. Add in [templating language](https://getkirby.com/docs/templates/hello-world) to the sections you want to edit.

## Set up the blueprint to be edited on the panel
Blueprints are the forms that control the [templating language](https://getkirby.com/docs/templates/hello-world) from the Panel.

1. Create a .yml file in site > blueprints. 
2. Follow the documentation [here](https://getkirby.com/docs/panel/blueprints) to set up the editable parts of the email. **Note:** [Structured data](https://getkirby.com/docs/cheatsheet/panel-fields/structure) is really useful for setting up complicated elements that repeat (i.e. media boxes or cards).