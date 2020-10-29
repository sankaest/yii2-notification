# Growl

Installation
--------

```bash
"sankaest/yii2-notification": "*",
"bower-asset/jquery-growl": "*"
```

to the ```require``` section of your `composer.json` file.


Usage
-----

```php
use sankaest\modules\notification\Wrapper;

echo Wrapper::widget([
    'layerClass' => 'sankaest\modules\notification\layers\Growl',
    // default options
    'options' => [
       'fixed' => true,
       'size' => 'medium',
       'location' => 'tr',
       'delayOnHover' => true,

        // and more for this library here https://github.com/ksylvest/jquery-growl
    ],
]);

```
