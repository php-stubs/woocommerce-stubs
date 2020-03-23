<?php

return \StubsGenerator\Finder::create()
    ->in([
        'source/woocommerce/packages/*/src',
        'source/woocommerce/packages/action-scheduler/classes',
        ])
    ->append(
        \StubsGenerator\Finder::create()
            ->files()
            ->depth('< 1')
            ->name('functions.php')
            ->in(['source/woocommerce/packages/action-scheduler'])
    )
    ->append(
        \StubsGenerator\Finder::create()
            ->files()
            ->depth('< 1')
            ->name('ActionScheduler_AdminView_Deprecated.php')
            ->in(['source/woocommerce/packages/action-scheduler/deprecated'])
    )
    // Exclude command classes as is uses the wp-cli package.
    ->notPath('WP_CLI')
    ->sortByName()
;
