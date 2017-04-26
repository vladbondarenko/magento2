#!/bin/bash

su -s /bin/bash -c "./composer require magento/product-community-edition 2.1.6 --no-update" nginx
su -s /bin/bash -c "./composer update" nginx
su -s /bin/bash -c "rm -rf var/di var/generation" nginx
su -s /bin/bash -c "php bin/magento cache:flush" nginx
su -s /bin/bash -c "php bin/magento setup:upgrade" nginx
su -s /bin/bash -c "php bin/magento setup:di:compile" nginx
su -s /bin/bash -c "php bin/magento indexer:reindex" nginx