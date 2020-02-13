# WooCommerce Stubs

[![Build Status](https://travis-ci.com/php-stubs/woocommerce-stubs.svg?branch=master)](https://travis-ci.com/php-stubs/woocommerce-stubs)

This package provides stub declarations for [WooCommerce](https://woocommerce.com/)
functions, classes and interfaces.
These stubs can help plugin and theme developers leverage static analysis tools
like [PHPStan](https://github.com/phpstan/phpstan),
which is not able to parse WooCommerce as it is not clean OOP code.

Stubs are generated directly from the [source](https://github.com/woocommerce/woocommerce)
using [giacocorsiglia/stubs-generator](https://github.com/GiacoCorsiglia/php-stubs-generator).

### Requirements

- PHP >=7.1

### Installation

Require this package as a development dependency with [Composer](https://getcomposer.org).

```bash
composer require --dev php-stubs/woocommerce-stubs
```

Alternatively you may download `woocommerce-stubs.php` directly.

### Usage in PHPStan

Include all stubs in PHPStan configuration file.

```yaml
parameters:
    autoload_files:
        - %rootDir%/../../php-stubs/wordpress-stubs/wordpress-stubs.php
        - %rootDir%/../../php-stubs/woocommerce-stubs/woocommerce-stubs.php
        #- %rootDir%/../../php-stubs/woocommerce-stubs/woocommerce-packages-stubs.php
```
