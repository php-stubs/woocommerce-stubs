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
    // Exclude woocommerce.com API as is uses the woocommerce-rest-api package.
    ->notPath('wccom-site/rest-api/endpoints')
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
    ->sortByName()
;
