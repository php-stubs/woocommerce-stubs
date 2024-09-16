<?php

return \StubsGenerator\Finder::create()
    ->in('source/woocommerce/includes')
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/woocommerce'])
            ->files()
            ->depth('< 1')
            ->path('woocommerce.php')
    )
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/woocommerce/src'])
            ->notPath('Internal')
            // Uses woocommerce/blueprint
            ->notPath('Admin/Features/Blueprint')
            ->sortByName(true)
    )
    // WC_Query uses this internal trait
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/woocommerce/src/Internal/Traits'])
            ->files()
            ->depth('< 1')
            ->path('AccessiblePrivateMethods.php')
    )
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/woocommerce/src/Internal/Admin/BlockTemplates'])
            ->files()
            ->depth('< 1')
            //->path('AbstractBlockTemplate.php')
    )
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/woocommerce/src/Internal/Traits'])
            ->files()
            ->depth('< 1')
            ->path('OrderAttributionMeta.php')
    )
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/woocommerce/lib/packages/Detection'])
            ->files()
            ->depth('< 1')
            ->path('MobileDetect.php')
    )
/*
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/woocommerce/src/Internal/Admin'])
            ->files()
            ->depth('< 1')
            ->path('CouponsMovedTrait.php')
    )
*/
/*
    // Comment out existing interface exclusion
    // $ editor vendor/php-stubs/generator/src/NodeVisitor.php:352
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/woocommerce/vendor/psr/container/src'])
            ->sortByName(true)
    )
*/
    // Exclude woocommerce.com API as is uses the woocommerce-rest-api package.
    ->notPath('wccom-site/rest-api/endpoints')
    // Exclude WP-CLI command as is extends Plugin_Command.
    ->notPath('cli/class-wc-cli-com-extension-command.php')
    // Templates.
    ->notPath('admin/views')
    ->notPath('admin/helper/views')
    ->notPath('admin/importers/views')
    ->notPath('admin/marketplace-suggestions/templates')
    ->notPath('admin/marketplace-suggestions/views')
    ->notPath('admin/meta-boxes/views')
    ->notPath('admin/plugin-updates/views')
    ->notPath('admin/settings/views')
    // $ ls includes/shipping/*/includes/*.php
    ->notPath('shipping/flat-rate/includes/settings-flat-rate.php')
    ->notPath('shipping/legacy-flat-rate/includes/settings-flat-rate.php')
    // Legacy WooCommerce API.
    ->notPath('api/legacy')
    ->notPath('legacy/api')
    // Update functions.
    ->notPath('wc-update-functions.php')
    ->sortByName(true)
;
