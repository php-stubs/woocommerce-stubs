<?php

return \StubsGenerator\Finder::create()
    ->in('woocommerce')
    // Templates.
    // $ ls includes/shipping/*/includes/*.php
    ->notPath('includes/shipping/flat-rate/includes/settings-flat-rate.php')
    ->notPath('includes/shipping/legacy-flat-rate/includes/settings-flat-rate.php')
    // Uses WP-CLI.
    // $ grep -rFl 'WP_CLI_Command'
    ->notPath('includes/libraries/action-scheduler/classes/ActionScheduler_WPCLI_Scheduler_command.php')
    // Legacy WooCommerce API.
    ->notPath('includes/api/legacy')
    ->sortByName()
;
