# NotifIt
!["NotifIt"](img/notifit.jpg)

Installation
--------

```bash
"sankaest/yii2-notification": "*",
"bower-asset/notifit": "^1.1"
```

to the ```require``` section of your `composer.json` file.


Usage
-----

```php
use sankaest\modules\notification\Wrapper;

echo Wrapper::widget([
    'layerClass' => 'sankaest\modules\notification\layers\NotifIt',
    // default options
    'options' => [
        'multiline' => true,
        'position' => 'center',
        'width' => 'all',
        'clickable' => true,

        // and more for this library...
    ],
]);

```
