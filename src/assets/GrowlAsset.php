<?php

namespace sankaest\modules\notification\assets;

use yii\web\AssetBundle;

/**
 * Class GrowlAsset
 * @package sankaest\modules\notification\layers
 */
class GrowlAsset extends AssetBundle
{
    /** @var string  */
    public $sourcePath = '@bower/jquery-growl';

    /** @var array $css */
    public $css = [
        'stylesheets/jquery.growl.css'
    ];

    /** @var array $js */
    public $js = [
        'javascripts/jquery.growl.js'
    ];

    /** @var array $depends */
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
