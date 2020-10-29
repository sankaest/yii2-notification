<?php

namespace sankaest\modules\notification\assets;

use yii\web\AssetBundle;

/**
 * Class AlertAsset
 * @package sankaest\modules\notification\layers
 */
class AlertAsset extends AssetBundle
{
    /** @var array $depends */
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
