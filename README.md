# Yii Cleanapp

Clean Yii application template.

**Yii Framework version:** 1.1.13

## Features

* Preconfigured .htaccess and .gitignore files
* Git ignored file main-local.php to store private application config
* Custom migration template with variable to copy/paste SQL query
* Console config uses main config to avoid code duplication
* Preconfigured frendly urls
* YII_DEBUG is enabled when client IP is 127.0.0.1
* Full/Zero error reporting depending on YII_DEBUG
* Fake CApplication class with phpdoc comments describing components for editor autocomplete function
* protected/init.sh script that fixes file permissions
* DB schema caching enabled with cache flushing after "migrate" command ([description in Russian](http://codesex.org/component/content/article/4-php-scripts/50-yii-framework-schema-cache))
* ClientScript package "jquery" is connected to public CDN's ([Google](https://developers.google.com/speed/libraries/devguide), [Yandex](http://api.yandex.ru/jslibs/), [Media Temple](http://code.jquery.com/))

+ Lot of small changes.

## Preinstalled extensions

* [yiidebugtb](http://www.yiiframework.com/extension/yiidebugtb/)
