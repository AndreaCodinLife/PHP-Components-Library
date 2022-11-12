<p align="center">
<img src="https://github.com/AndreaCodinLife/PHP-Components-Library/blob/e1f472dc58078708073b7775679de721fac5f5d4/php-components-library-logo.png" alt="drawing" width="200"/></p>

# PHP Components Library
PHP Components Library is a library whose main purpose is to integrate components with PHP functions.

## How to use it

| Required | Link |
| ------ | ------ |
| Tailwind | http://tailwindcss.com |
| Flowbite | &nbsp;&nbsp;&nbsp;&nbsp;✅&nbsp;&nbsp;&nbsp;&nbsp;included |

Add the code component you like in your assets folder and include them in your php files

Example:
```php
include_once 'assets/path_to_file/buttons.php';
```
Example of a button component in your html code (must be a .php file):
```php
//buttonAdd('Label of the button', 'page to go when clicked',padding [optionnal])
<?php buttonAdd('Add paragraph', 'add_paragraph.php', TRUE); ?>
```
Result:


## Features

- Integrate simple components with a single call of a function
- Easy to use
- Customizable

## Behind

PHP Components Library is made from Flowbite components for Tailwind
