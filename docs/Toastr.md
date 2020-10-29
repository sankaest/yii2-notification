# Toastr

Installation
--------

```bash
"sankaest/yii2-notification": "*",
"bower-asset/toastr": "^2.1"
```

to the ```require``` section of your `composer.json` file.


Usage
-----

```php
use sankaest\modules\notification\Wrapper;

echo Wrapper::widget([
    'layerClass' => 'sankaest\modules\notification\layers\Toastr',
    // default options
    'options' => [
       'closeButton' => false,
       'debug' => false,
       'newestOnTop' => true,

        // and more for this library...
    ],
]);

```
