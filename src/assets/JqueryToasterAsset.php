<?php

namespace sankaest\modules\notification\assets;

use yii\web\AssetBundle;

/**
 * Class JqueryToaster
 * @package sankaest\modules\notification\layers
 */
class JqueryToasterAsset extends AssetBundle
{
    /** @var string  */
    public $sourcePath = '@bower/jquery.toaster';

    /** @var array $js */
    public $js = [
        'jquery.toaster.js'
    ];

    /** @var array $depends */
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}
