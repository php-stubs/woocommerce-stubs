<?php

return \StubsGenerator\Finder::create()
    ->in([
        'source/woocommerce/packages/*/src',
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
;
