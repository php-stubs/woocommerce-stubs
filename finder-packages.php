<?php

return \StubsGenerator\Finder::create()
    ->in([
        'source/woocommerce/packages/*/src',
        'source/woocommerce/packages/action-scheduler/classes',
        // Current classes extend deprecated ones.
        'source/woocommerce/packages/action-scheduler/deprecated',
        'source/woocommerce/packages/woocommerce-admin/includes',
    ])
    ->append(
        \StubsGenerator\Finder::create()
            ->files()
            ->depth('< 1')
            ->name('functions.php')
            ->in(['source/woocommerce/packages/action-scheduler'])
    )
    // Uses WP-CLI.
    ->notPath('WP_CLI')
    // Exclude email templates.
    ->notPath('emails')
    // Update functions.
    ->notPath('wc-admin-update-functions.php')
    ->sortByName()
;
