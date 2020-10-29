# Noty

Installation
--------

```bash
"sankaest/yii2-notification": "*",
"bower-asset/noty": "^2.3"
```

to the ```require``` section of your `composer.json` file.


Usage
-----

```php
use sankaest\modules\notification\Wrapper;

echo Wrapper::widget([
    'layerClass' => 'sankaest\modules\notification\layers\Noty',
    'layerOptions'=>[
        'registerAnimateCss' => false,
        'registerButtonsCss' => false
    ],
    // default options
    'options' => [
        'dismissQueue' => true,
        'layout' => 'topRight',
        'timeout' => 3000,
        'theme' => 'relax',

        // and more for this library...
    ],
]);

```
