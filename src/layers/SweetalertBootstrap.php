<?php

namespace sankaest\modules\notification\layers;

use sankaest\modules\notification\assets\SweetalertBootstrapAsset;

/**
 * Class SweetalertBootsrap
 * @package sankaest\modules\notification\layers
 *
 * This widget should be used in your main layout file as follows:
 * ```php
 *  use sankaest\modules\notification\Wrapper;
 *
 *  echo Wrapper::widget([
 *      'layerClass' => 'sankaest\modules\notification\layers\SweetalertBootsrap',
 *      'options' => [
 *          'showCancelButton' => false,
 *          'closeOnConfirm' => false,
 *          'disableButtonsOnConfirm' => true,
 *          'html' => false
 *
 *          // and more for this library...
 *      ],
 *  ]);
 * ```
 */
class SweetalertBootstrap extends Sweetalert implements LayerInterface
{
    /**
     * Register required assets
     */
    public function registerAssets()
    {
        $view = $this->getView();
        SweetalertBootstrapAsset::register($view);
    }

}
