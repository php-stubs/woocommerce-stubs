# WooCommerce Stubs

[![Build Status](https://travis-ci.org/php-stubs/woocommerce-stubs.svg?branch=master)](https://travis-ci.org/php-stubs/woocommerce-stubs)

It provides stub declarations for [WooCommerce](https://woocommerce.com/)
functions, classes and interfaces.
These stubs can help plugin and theme developers leverage static analysis tools
like [PHPStan](https://github.com/phpstan/phpstan),
which is not able to parse WordPress as it is not OOP code.

The stubs are generated directly from the [source](https://github.com/woocommerce/woocommerce)
using [giacocorsiglia/stubs-generator](https://github.com/GiacoCorsiglia/php-stubs-generator).

### Requirements

- PHP >=7.1

### Installation

Require this package as a development dependency with [Composer](https://getcomposer.org).

```bash
composer require --dev php-stubs/woocommerce-stubs
```

Alternatively you may download `woocommerce-stubs.php` directly.

### Versioning

This package is versioned to match the WooCommerce version from which the stubs are generated.
