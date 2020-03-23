<?php

return \StubsGenerator\Finder::create()
    ->in([
        'source/woocommerce/packages/*/src',
        'source/woocommerce/packages/action-scheduler/classes',
        'source/woocommerce/packages/action-scheduler/deprecated',
        'source/woocommerce/packages/action-scheduler/lib',
        ])
        ->append(
            \StubsGenerator\Finder::create()
                ->files()
                ->depth('< 1')
                ->name('functions.php')
                ->in(['source/woocommerce/packages/action-scheduler'])
        )
        ->sortByName()
;
