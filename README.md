> [!IMPORTANT]
> Hello everyone! This is Viktor who runs the php-stubs organization. I am planning to stop contributing to the WordPress ecosystem because it is extremely difficult and I do not earn (min) €100/month.

Please support my work to avoid abandoning this package.

[![Sponsor](https://github.com/szepeviktor/.github/raw/master/.github/assets/github-like-sponsor-button.svg)](https://github.com/sponsors/php-stubs)

Thank you!

# WooCommerce Stubs

[![Packagist stats](https://img.shields.io/packagist/dt/php-stubs/woocommerce-stubs.svg)](https://packagist.org/packages/php-stubs/woocommerce-stubs/stats)
[![Packagist](https://img.shields.io/packagist/v/php-stubs/woocommerce-stubs.svg?color=4CC61E&style=popout)](https://packagist.org/packages/php-stubs/woocommerce-stubs)
[![Tweet](https://img.shields.io/badge/Tweet-share-d5d5d5?style=social&logo=twitter)](https://twitter.com/intent/tweet?text=https%3A%2F%2Fgithub.com%2Fphp-stubs%2Fwoocommerce-stubs&url=I%20use%20php-stubs%2Fwoocommerce-stubs%20for%20IDE%20completion%20and%20static%20analysis)
[![Build Status](https://app.travis-ci.com/php-stubs/woocommerce-stubs.svg?branch=master)](https://app.travis-ci.com/php-stubs/woocommerce-stubs)

This package provides stub declarations for the [WooCommerce plugin](https://wordpress.org/plugins/woocommerce/)
functions, classes and interfaces.
These stubs can help plugin and theme developers leverage IDE completion
and static analysis tools like [PHPStan](https://github.com/phpstan/phpstan).

The stubs are generated directly from the [source](https://github.com/woocommerce/woocommerce)
using [php-stubs/generator](https://github.com/php-stubs/generator).

## Requirements

- PHP >=7.1

## Installation

Require this package as a development dependency with [Composer](https://getcomposer.org).

```bash
composer require --dev php-stubs/woocommerce-stubs
```

Alternatively you may download `woocommerce-stubs.php` directly.

## Usage in PHPStan

Include stubs in PHPStan configuration file.

```yaml
parameters:
    bootstrapFiles:
        - vendor/php-stubs/woocommerce-stubs/woocommerce-stubs.php
        #- vendor/php-stubs/woocommerce-stubs/woocommerce-packages-stubs.php
```

## Support package maintenance

Please consider supporting this work.

[![Sponsor](https://github.com/szepeviktor/.github/raw/master/.github/assets/github-like-sponsor-button.svg)](https://github.com/sponsors/php-stubs)

Thank you!
