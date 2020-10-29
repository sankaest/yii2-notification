<?php

namespace sankaest\modules\notification\layers;

use yii\helpers\Json;
use sankaest\modules\notification\assets\IgrowlAsset;

/**
 * Class Igrowl
 * @package sankaest\modules\notification\layers
 *
 * This widget should be used in your main layout file as follows:
 * ```php
 *  use sankaest\modules\notification\Wrapper;
 *
 *  echo Wrapper::widget([
 *      'layerClass' => 'sankaest\modules\notification\layers\Igrowl',
 *      'options' => [
 *          'placement' => [
 *              'x'=>'right',
 *              'y'=>'top',
 *          ],
 *          'animation' => true,
 *          'delay' => 3000,
 *
 *          // and more for this library...
 *      ],
 *  ]);
 * ```
 */
class Igrowl extends Layer implements LayerInterface
{
    /**
     * @var array $defaultOptions
     */
    protected $defaultOptions = [
        'placement' => [
            'x' => 'right',
            'y' => 'top',
        ],
        'animation' => true,
        'delay' => 3000,
    ];

    /**
     * register asset
     */
    public function run()
    {
        $view = $this->getView();
        IgrowlAsset::register($view);
        parent::run();
    }

    /**
     * @param $options
     * @return string
     */
    public function getNotification($options)
    {
        $options['title'] = $this->title;
        $options['message'] = $this->message;
        $options['type'] = $this->type;

        $options = Json::encode($options);

        return "$.iGrowl($options);";
    }
}
