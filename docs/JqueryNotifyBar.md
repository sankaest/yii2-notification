# Jquery Notify Bar

Installation
--------

```bash
"sankaest/yii2-notification": "*",
"bower-asset/jqnotifybar": "^1.5"
```

to the ```require``` section of your `composer.json` file.


Usage
-----

```php
use sankaest\modules\notification\Wrapper;

echo Wrapper::widget([
    'layerClass' => 'sankaest\modules\notification\layers\JqueryNotifyBar'
    // default options
    'options' => [
        'position' => 'top',
        'delay' => 3000,
        'animationSpeed' => 'normal',

        // and more for this library herehttps://github.com/dknight/jQuery-Notify-bar
    ],
]);

```
