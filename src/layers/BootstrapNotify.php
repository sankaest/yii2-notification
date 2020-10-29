<?php

namespace sankaest\modules\notification\layers;

use yii\helpers\Json;
use sankaest\modules\notification\assets\BootstrapNotifyAsset;

/**
 * Class BootstrapNotify
 * @package sankaest\modules\notification\layers
 *
 * This widget should be used in your main layout file as follows:
 * ---------------------------------------
 *  use sankaest\modules\notification\Wrapper;
 *
 *  echo Wrapper::widget([
 *      'layerClass' => 'sankaest\modules\notification\layers\BootstrapNotify',
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
class BootstrapNotify extends Layer implements LayerInterface
{

    /**
     * @var array $defaultOptions
     */
    protected $defaultOptions = [
        'newest_on_top' => false,
        'showProgressbar' => false,
        'placement' => [
            'from' => 'top',
            'align' => 'right'
        ]
    ];

    /**
     * register asset
     */
    public function run()
    {
        $view = $this->getView();
        BootstrapNotifyAsset::register($view);
        parent::run();
    }

    /**
     * @param $options
     * @return string
     */
    public function getNotification($options)
    {
        $options['type'] = $this->getType();
        $options = Json::encode($options);

        $data['message'] = $this->getMessageWithTitle();
        //$data['title'] = $this->title;
        $data = Json::encode($data);

        return "$.notify($data, $options);";
    }

    /**
     * @return string
     */
    public function getType()
    {
        switch ($this->type) {
            case self::TYPE_ERROR:
                $type = 'danger';
                break;
            default:
                $type = $this->type;
        }
        return $type;
    }

}
