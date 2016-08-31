# How to create templates

## Set up the email to display correctly:
1. Extract the body of your email (Remove the header and footer sections and just take the main content part)
2. Create a php file in site>templates and place the body section in there.
3. Add this to the top of the file:

```html
`<?php snippet('email-header') ?>`
```

4. Add this to the bottom of the file:

```html
<?php snippet('email-footer') ?>
<?php snippet('email-inliner') ?>
```

5. Add in [templating language](https://getkirby.com/docs/templates/hello-world) to the sections you want to edit.

## Set up the blueprint to be edited on the panel:
1. Create a file in site>blueprints
