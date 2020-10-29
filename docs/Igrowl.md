# iGrowl

Important - this layer is not stable, because have conflict with bootstrap

Installation
--------

```bash
"sankaest/yii2-notification": "*",
"bower-asset/igrowl": "*"
```

to the ```require``` section of your `composer.json` file.


Usage
-----

```php
use sankaest\modules\notification\Wrapper;

echo Wrapper::widget([
    'layerClass' => 'sankaest\modules\notification\layers\Igrowl',
    // default options
    'options' => [
        'placement' => [
            'x'=>'right',
            'y'=>'top',
        ],
        'animation' => true,
        'delay' => 3000,

        // and more for this library here https://github.com/catc/iGrowl
    ],
]);

```
