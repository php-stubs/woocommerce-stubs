<?php

return \StubsGenerator\Finder::create()
    ->in([
        'source/woocommerce/packages/*/src',
    ])
    // Action Scheduler.
    ->append(
        \StubsGenerator\Finder::create()
            ->in([
                'source/woocommerce/packages/action-scheduler/classes',
                // Current classes extend deprecated ones.
                'source/woocommerce/packages/action-scheduler/deprecated',
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
            ->sortByName()
    )
    // WC Admin
    ->append(
        \StubsGenerator\Finder::create()
            ->in([
                'source/woocommerce/packages/woocommerce-admin/includes',
            ])
            // Email templates.
            ->notPath('emails')
            // Update functions for internal use.
            ->notPath('wc-admin-update-functions.php')
            ->sortByName()
    )
    ->sortByName()
;
