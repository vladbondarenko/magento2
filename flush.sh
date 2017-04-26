#!/bin/bash

cd /var/www/html
su -s /bin/bash -c "php bin/magento cache:flush" nginx
su -s /bin/bash -c "php bin/magento deploy:mode:set developer" nginx
su -s /bin/bash -c "php bin/magento deploy:mode:set production" nginx
su -s /bin/bash -c "php bin/magento cache:flush" nginx
su -s /bin/bash -c "php bin/magento setup:static-content:deploy" nginx
su -s /bin/bash -c "php bin/magento setup:static-content:deploy -l uk_UA" nginx
su -s /bin/bash -c "php bin/magento setup:di:compile" nginx
su -s /bin/bash -c "php bin/magento indexer:reindex" nginx
su -s /bin/bash -c "php bin/magento cache:flush" nginx
su -s /bin/bash -c "php bin/magento maintenance:disable" nginx
#su -s /bin/bash -c "php bin/magento module:disable Magento_NewRelicReporting --clear-static-content" nginx
#su -s /bin/bash -c "php bin/magento module:disable Magento_Braintree --clear-static-content" nginx
#su -s /bin/bash -c "php bin/magento module:disable Magento_Paypal --clear-static-content" nginx