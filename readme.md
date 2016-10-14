# Run the email builder
1. Download [MAMP](https://www.mamp.info/en/).
2. Clone this repo to a folder that MAMP can access.
3. Launch MAMP and make sure it's running a server.
4. Navigate to that folder to view the app localy (i.e. http://localhost:8888/email-builder/)

# Creating templates
There are three files that you **need** to create a template.

1. Content **.txt** file. This has the actualy content for the individual emails.
2. Blueprint **.yml** file. This defines the form fields for the panel/dashboard.
3. Template **.php** file. This defines how the email will look when combined with the content from the .txt files. Parts of this can be broken up into reusable 'snippets' for consistency.

![Folders for email files](https://www.evernote.com/l/AHH4n1bgrYVJYabtWrvD_TQAjbZLOEGMd90B/image.png)


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
