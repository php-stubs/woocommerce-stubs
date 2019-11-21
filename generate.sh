#!/usr/bin/env bash

HEADER=$'/**\n * Generated stub declarations for WooCommerce.\n * @see https://woocommerce.com\n * @see https://github.com/php-stubs/woocommerce-stubs\n */'

FILE="woocommerce-stubs.php"

set -e

test -f "$FILE"
test -d "woocommerce"

# Exclude globals.
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --force \
    --finder=finder.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE"

# There are no WC functions to read these constants.
# See define_constants() in includes/class-woocommerce.php
printf '\nnamespace {\n    %s\n}\n' "define('WC_VERSION', '0.0.0');" >>"$FILE"
