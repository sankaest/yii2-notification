<?php

namespace sankaest\modules\notification\layers;

use yii\helpers\Json;
use sankaest\modules\notification\assets\JqueryNotifyAsset;

/**
 * Class JqueryNotify
 * @package sankaest\modules\notification\layers
 *
 * This widget should be used in your main layout file as follows:
 * ---------------------------------------
 *  use sankaest\modules\notification\Wrapper;
 *
 *  echo Wrapper::widget([
 *      'layerClass' => 'sankaest\modules\notification\layers\JqueryNotify',
 *      'options' => [
 *         'theme' => 'default', // or 'dark-theme'
 *              'position' =>[
 *                  'x' => 'right',
 *                  'y' => 'top'
 *              ],
 *          'overlay' => false,
 *          'overflowHide' => false,
 *          'autoHide' => true,
 *
 *          // and more for this library
 *      ],
 *  ]);
 * ---------------------------------------
 */
class JqueryNotify extends Layer implements LayerInterface
{
    /**
     * @var array $defaultOptions
     */
    protected $defaultOptions = [
        'theme' => 'default', // or 'dark-theme'
        'position' =>[
            'x' => 'right',
            'y' => 'top'
        ],
        'overlay' => false,
        'overflowHide' => false,
        'autoHide' => true,
    ];

    /**
     * register asset
     */
    public function run()
    {
        JqueryNotifyAsset::register($this->getView());
        parent::run();
    }

    /**
     * @param $options
     * @return string
     */
    public function getNotification($options)
    {
        $options['type'] = $this->type;
        $options['title'] = $this->title;
        $options['message'] = $this->message;
        $options = Json::encode($options);

        return "notify($options);";
    }
}
