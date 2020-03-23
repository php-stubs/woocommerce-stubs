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
    ->sortByName()
;
