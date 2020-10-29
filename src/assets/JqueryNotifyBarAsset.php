<?php

namespace sankaest\modules\notification\assets;

use yii\web\AssetBundle;

/**
 * Class JqueryNotifyBarAsset
 * @package sankaest\modules\notification\layers
 */
class JqueryNotifyBarAsset extends AssetBundle
{
    /** @var string  */
    public $sourcePath = '@bower/jqnotifybar';

    /** @var array $css */
    public $css = [
        'css/jquery.notifyBar.css'
    ];

    /** @var array $js */
    public $js = [
        'jquery.notifyBar.js'
    ];

    /** @var array $depends */
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
