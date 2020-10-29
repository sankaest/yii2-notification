<?php

namespace sankaest\modules\notification\layers;

use yii\helpers\Json;
use sankaest\modules\notification\assets\NotifyjsAsset;

/**
 * Class Notifyjs
 * @package sankaest\modules\notification\layers
 *
 * This widget should be used in your main layout file as follows:
 * ---------------------------------------
 *  use sankaest\modules\notification\Wrapper;
 *
 *  echo Wrapper::widget([
 *      'layerClass' => 'sankaest\modules\notification\layers\Notifyjs',
 *      'options' => [
 *          // whether to hide the notification on click
 *          'clickToHide' => true,
 *
 *          // whether to auto-hide the notification
 *          'autoHide' => true,
 *
 *          // if autoHide, hide after milliseconds
 *          'autoHideDelay' => 5000,
 *
 *          // show the arrow pointing at the element
 *          'arrowShow' => true,
 *
 *          // arrow size in pixels
 *          'arrowSize' => 5,
 *
 *          // position defines the notification position though uses the defaults below
 *          'position' => '...',
 *
 *          // default positions
 *          'elementPosition' => 'bottom left',
 *          'globalPosition' => 'top right',
 *
 *          // default style
 *          'style' => 'bootstrap',
 *
 *          // default class (string or [string])
 *          'className' => 'error',
 *
 *          // show animation
 *          'showAnimation' => 'slideDown',
 *
 *          // show animation duration
 *          'showDuration' => 400,
 *
 *          // hide animation
 *          'hideAnimation' => 'slideUp',
 *
 *          // hide animation duration
 *          'hideDuration' => 200,
 *
 *          // padding between element and notification
 *          'gap' => 2
 *
 *          // and more for this library https://notifyjs.com
 *      ],
 *  ]);
 * ---------------------------------------
 */
class Notifyjs extends Layer implements LayerInterface
{
    /**
     * @var array $defaultOptions
     */
    protected $defaultOptions = [
        'clickToHide' => true,
        'autoHide' => true,
        'autoHideDelay' => 5000,
        'arrowShow' => true,
        'arrowSize' => 5,
        'position' => 'top right',
        'elementPosition' => 'bottom left',
        'globalPosition' => 'top right',
        'style' => 'bootstrap',
        'className' => 'error',
        'showAnimation' => 'slideDown',
        'showDuration' => 400,
        'hideAnimation' => 'slideUp',
        'hideDuration' => 200,
        'gap' => 2
    ];

    /**
     * register asset
     */
    public function run()
    {
        $view = $this->getView();
        NotifyjsAsset::register($view);
        parent::run();
    }


    /**
     * @param $options
     * @return string
     */
    public function getNotification($options)
    {
        $options['className'] = $this->getStyle();
        $options = Json::encode($options);

        return "$.notify('$this->message', $options);";
    }


    /**
     * @return string
     */
    public function getStyle(){
        switch ($this->type) {
            case self::TYPE_WARNING:
                $style = "warn";
                break;
            default:
                $style = $this->type;
        }
        return $style;
    }
}
