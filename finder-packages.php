<?php

return \StubsGenerator\Finder::create()
    // No more from 8.5 on
    // ->in(['source/woocommerce/packages/*/src'])
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
    ->sortByName(true)
;
