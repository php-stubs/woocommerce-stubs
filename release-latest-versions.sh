#!/usr/bin/env bash

set -e

WC_JSON="$(wget -q -O- "https://packagist.org/packages/woocommerce/woocommerce.json")"

# https://wordpress.org/plugins/woocommerce/advanced/
for V in 3.5  3.6  3.7  3.8; do
    # Find latest version
    printf -v JQ_FILTER '.package.versions[].version | select(test("^%s\\\\.%s\\\\.\\\\d+$"))' "${V%.*}" "${V#*.}"
    LATEST="$(jq -r "$JQ_FILTER" <<<"$WC_JSON" | sort -t "." -k 3 -g | tail -n 1)"
    if [ -z "$LATEST" ]; then
        echo "No version for ${V}!"
        continue;
    fi

    echo "Releasing version ${LATEST} ..."

    if git rev-parse "refs/tags/v${LATEST}" >/dev/null 2>&1; then
        echo "Tag exists!"
        continue;
    fi

    # Modify composer.json
    printf -v SED_EXP 's#\\("woocommerce/woocommerce"\\): "[0-9]\\+\\.[0-9]\\+\\.[0-9]\\+"#\\1: "%s"#' "$LATEST"
    sed -e "$SED_EXP" -i composer.json

    # Generate stubs
    composer update --no-interaction --no-suggest
    echo "Generating stubs ..."
    ./generate.sh

    # Tag version
    git commit --all -m "Generate stubs for WooCommerce ${LATEST}"
    git tag "v${LATEST}"
done
