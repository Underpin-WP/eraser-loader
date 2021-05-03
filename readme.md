# Underpin Eraser Loader

Loader That assists with adding GDPR-compliant erasers to a WordPress website.

## Installation

### Using Composer

`composer require underpin/eraser-loader`

### Manually

This plugin uses a built-in autoloader, so as long as it is required _before_
Underpin, it should work as-expected.

`require_once(__DIR__ . '/underpin-erasers/erasers.php');`

## Setup

1. Install Underpin. See [Underpin Docs](https://www.github.com/underpin-wp/underpin)
1. Register new erasers menus as-needed.

## Example

A very basic example could look something like this.

```php
// Register eraser
underpin()->erasers()->add( 'eraser', [
	'id'                  => 'example-eraser',                      // required
	'name'                => __( 'translate-able name', 'domain' ), // required
	'erase_item_callback' => '__return_true',                       // Required. See Eraser::erase_item
	'get_items_callback'  => '__return_true',                       // Required. See Eraser::get_items
] );
```

Alternatively, you can extend `Eraser` and reference the extended class directly, like so:

```php
underpin()->erasers()->add('eraser-key','Namespace\To\Class');
```