<?php

namespace sankaest\modules\notification\assets;

use yii\web\AssetBundle;

/**
 * Class NotyAsset
 * @package sankaest\modules\notification\layers
 */
class NotifyjsAsset extends AssetBundle
{
    public $sourcePath = '@bower/notifyjs/dist';

    public $js = [
        'notify.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    /**
     * @inheritdoc
     * Register css files as per the request
     * @param \yii\web\View $view
     */
    public function registerAssetFiles($view)
    {
        parent::registerAssetFiles($view);
    }
}
