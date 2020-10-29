# Bootstrap Alert

Installation
--------

```bash
"sankaest/yii2-notification": "*",
```

to the ```require``` section of your `composer.json` file.


Usage
-----

```php
use sankaest\modules\notification\Wrapper;

echo Wrapper::widget();

```
Since v.2.1 ```'layerClass' => 'sankaest\modules\notification\layers\Alert'``` is default for this module
