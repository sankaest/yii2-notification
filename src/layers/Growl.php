<?php

namespace sankaest\modules\notification\layers;

use yii\helpers\Json;
use sankaest\modules\notification\assets\GrowlAsset;

/**
 * Class Growl
 * @package sankaest\modules\notification\layers
 *
 * This widget should be used in your main layout file as follows:
 * ---------------------------------------
 *  use sankaest\modules\notification\Wrapper;
 *
 *  echo Wrapper::widget([
 *      'layerClass' => 'sankaest\modules\notification\layers\Growl',
 *      'options' => [
 *          'fixed' => true,
 *          'size' => 'medium',
 *          'location' => 'tr',
 *          'delayOnHover' => true,
 *
 *          // and more for this library...
 *      ],
 *  ]);
 * ---------------------------------------
 */
class Growl extends Layer implements LayerInterface
{

    /**
     * @var array $defaultOptions
     */
    protected $defaultOptions = [
        'fixed' => true,
        'size' => 'medium',
        'location' => 'tr',
        'delayOnHover' => true,
    ];

    /**
     * register asset
     */
    public function run()
    {
        $view = $this->getView();
        GrowlAsset::register($view);
        parent::run();
    }


    /**
     * @param $options
     * @return string
     */
    public function getNotification($options)
    {
        $data = $options;

        $data['message'] = $this->message;
        $data['title'] = $this->title;

        $style = $this->getStyle();
        $msg = Json::encode($data);

        return " $.growl$style($msg);";
    }


    /**
     * @return string
     */
    public function getStyle()
    {
        switch ($this->type) {
            case self::TYPE_ERROR:
                $style = '.error';
                break;
            case self::TYPE_SUCCESS:
                $style = '.notice';
                break;
            case self::TYPE_WARNING:
                $style = '.warning';
                break;
            default:
                $style = '';
        }
        return $style;
    }
}
