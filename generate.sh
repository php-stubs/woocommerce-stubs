#!/usr/bin/env bash
#
# Generate WooCommerce stubs from the source directory.
#

HEADER=$'/**\n * Generated stub declarations for WooCommerce.\n * @see https://woocommerce.com\n * @see https://github.com/php-stubs/woocommerce-stubs\n */'

FILE="woocommerce-stubs.php"
FILE_PKGS="woocommerce-packages-stubs.php"

set -e

test -f "$FILE"
test -f "$FILE_PKGS"
test -d "source/woocommerce"

# Exclude globals.
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
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
#printf '\n%s\n' "define('WC_VERSION', '0.0.0');" >>"$FILE"
printf '\nnamespace {\n%s\n}\n' "define('WC_VERSION', '0.0.0');" >>"$FILE"

# Packages.
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder-packages.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE_PKGS"
# FIXME Add modern core arguments.
##sed -e 's#^\s*public function feedback(\$string#&, ...$args#' -i "$FILE_PKGS"
