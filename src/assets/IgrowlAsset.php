<?php

namespace sankaest\modules\notification\assets;

use yii\web\AssetBundle;

/**
 * Class IgrowlAsset
 * @package sankaest\modules\notification\layers
 */
class IgrowlAsset extends AssetBundle
{
    /** @var string  */
    public $sourcePath = '@bower/igrowl';

    /** @var array $css */
    public $css = [
        'stylesheets/igrowl.min.css',
        'stylesheets/animate.min.css',
        'stylesheets/font css/feather.css'
    ];

    /** @var array $js */
    public $js = [
        'javascripts/igrowl.min.js'
    ];

    /** @var array $depends */
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
