<?php

return \StubsGenerator\Finder::create()
    ->in('source/woocommerce/includes')
    ->append(\StubsGenerator\Finder::create()->files()->depth('< 1')->name('woocommerce.php')->in(['source/woocommerce']))
    // Exclude woocommerce.com API as is uses the woocommerce-rest-api packages.
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
    // Uses WP-CLI.
    // $ grep -rFl 'WP_CLI_Command'
    ->notPath('libraries/action-scheduler/classes/ActionScheduler_WPCLI_Scheduler_command.php')
    ->sortByName()
;
