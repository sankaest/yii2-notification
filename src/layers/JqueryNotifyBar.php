<?php

namespace sankaest\modules\notification\layers;

use yii\helpers\Json;
use sankaest\modules\notification\assets\JqueryNotifyBarAsset;

/**
 * Class JqNotifyBar
 * @package sankaest\modules\notification\layers
 *
 * This widget should be used in your main layout file as follows:
 * ```php
 *  use sankaest\modules\notification\Wrapper;
 *
 *  echo Wrapper::widget([
 *      'layerClass' => 'sankaest\modules\notification\layers\JqueryNotifyBar',
 *      'options' => [
 *          'position' => 'top',
 *          'delay' => 3000,
 *          'animationSpeed' => 'normal',
 *
 *          // and more for this library...
 *      ],
 *  ]);
 * ```
 */
class JqueryNotifyBar extends Layer implements LayerInterface
{
    /**
     * @var array $defaultOptions
     */
    protected $defaultOptions = [
        'position' => 'top',
        'delay' => 3000,
        'animationSpeed' => 'normal',
    ];

    /**
     * register asset
     */
    public function run()
    {
        $view = $this->getView();
        JqueryNotifyBarAsset::register($view);
        parent::run();
    }

    /**
     * @param $options
     * @return string
     */
    public function getNotification($options)
    {
        $options['html'] = $this->message;
        $options['cssClass'] = $this->type;
        $options = Json::encode($options);

        return "jQuery.notifyBar($options);";
    }
}
