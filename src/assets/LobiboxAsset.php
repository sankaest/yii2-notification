<?php

namespace sankaest\modules\notification\assets;

use yii\web\AssetBundle;

/**
 * Class LobiboxlAsset
 * @package sankaest\modules\notification\layers
 */
class LobiboxAsset extends AssetBundle
{
    /** @var string  */
    public $sourcePath = '@bower/lobibox/dist';

    /** @var array $css */
    public $css = [
        'css/lobibox.min.css'
    ];

    /** @var array $js */
    public $js = [
        'js/lobibox.min.js'
    ];

    /** @var array $depends */
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
