<?php

namespace sankaest\modules\notification\layers;

use yii\helpers\Json;
use sankaest\modules\notification\assets\ToastrAsset;

/**
 * Class Toastr
 * @package sankaest\modules\notification\layers
 *
 * This widget should be used in your main layout file as follows:
 * ---------------------------------------
 *  use sankaest\modules\notification\Wrapper;
 *
 *  echo Wrapper::widget([
 *      'layerClass' => 'sankaest\modules\notification\layers\Toastr',
 *      'options' => [
 *          'closeButton' => false,
 *          'debug' => false,
 *          'newestOnTop' => true,
 *
 *          // and more for this library...
 *      ],
 *  ]);
 * ---------------------------------------
 */
class Toastr extends Layer implements LayerInterface
{
    /**
     * @var array $defaultOptions
     */
    protected $defaultOptions = [
        'closeButton' => false,
        'debug' => false,
        'newestOnTop' => true,
    ];

    /**
     * register asset
     */
    public function run()
    {
        $view = $this->getView();
        ToastrAsset::register($view);
        parent::run();
    }

    /**
     * @param $options
     * @return string
     */
    public function getNotification($options)
    {
        $type = Json::encode($this->type);
        $message = Json::encode($this->getMessageWithTitle());
        $options = Json::encode($options);

        return "toastr[$type]($message, '', $options);";
    }
}
