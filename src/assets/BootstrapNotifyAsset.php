<?php

namespace sankaest\modules\notification\assets;

use yii\web\AssetBundle;

/**
 * Class BootstrapNotifyAsset
 * @package sankaest\modules\notification\layers
 */
class BootstrapNotifyAsset extends AssetBundle
{
    /** @var string  */
    public $sourcePath = '@bower/remarkable-bootstrap-notify';

    /** @var array $js */
    public $js = [
        'bootstrap-notify.min.js'
    ];

    /** @var array $depends */
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
