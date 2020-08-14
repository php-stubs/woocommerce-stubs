<?php

return \StubsGenerator\Finder::create()
    ->in(['source/woocommerce/packages/*/src'])
    // Action Scheduler.
    ->append(
        \StubsGenerator\Finder::create()
            ->in([
                'source/woocommerce/packages/action-scheduler/classes',
                // Current classes extend deprecated ones.
                'source/woocommerce/packages/action-scheduler/deprecated',
            ])
            // Uses WP-CLI.
            ->notPath('WP_CLI')
            ->sortByName(true)
    )
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/woocommerce/packages/action-scheduler'])
            ->files()
            ->depth('< 1')
            ->path('functions.php')
    )
    // WC Admin "includes".
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/woocommerce/packages/woocommerce-admin/includes'])
            // Email templates.
            ->notPath('emails')
            // Update functions for internal use.
            ->notPath('wc-admin-update-functions.php')
            ->sortByName(true)
    )
    ->sortByName(true)
;
