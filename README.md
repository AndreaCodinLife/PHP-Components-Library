<p align="center">
<img src="https://github.com/AndreaCodinLife/PHP-Components-Library/blob/e1f472dc58078708073b7775679de721fac5f5d4/php-components-library-logo.png" alt="drawing" width="200"/></p>

# PHP Components Library  <img src="https://img.shields.io/badge/Status-Beta-success" />
PHP Components Library is a library whose main purpose is to integrate components with PHP functions.

## How to use it

| Required | Link |
| ------ | ------ |
| Tailwind | http://tailwindcss.com |
| Flowbite | &nbsp;&nbsp;&nbsp;&nbsp;✅&nbsp;&nbsp;&nbsp;&nbsp;included |

- Add the code component you like in your assets folder.

Example:
```php
include_once 'assets/path_to_file/buttons.php';
```
- Include the component in your php files.

Example of a button component in your html code (must be a .php file):
```php
//buttonAdd('Label of the button', 'page to go when clicked',padding [optionnal])
<?php buttonAdd('ADD PARAGRAPH', 'add_paragraph.php'); ?>
```
Result:<br>
<img src="https://github.com/AndreaCodinLife/PHP-Components-Library/blob/3231efa0eb48e5252fd085f016afeba307deb057/add-paragraph-button.png" alt="drawing" width="200"/>

## Features

- Integrate simple components with a single call of a function
- Easy to use
- Customizable

## Behind

PHP Components Library is made from Flowbite components for Tailwind
