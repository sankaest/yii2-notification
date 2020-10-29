<?php

namespace sankaest\modules\notification\layers;

use yii\helpers\Json;
use sankaest\modules\notification\assets\JqueryToasterAsset;

/**
 * Class JqueryToastr
 * @package sankaest\modules\notification\layers
 *
 * This widget should be used in your main layout file as follows:
 * ---------------------------------------
 *  use sankaest\modules\notification\Wrapper;
 *
 *  echo Wrapper::widget([
 *      'layerClass' => 'sankaest\modules\notification\layers\JqueryToastr',
 *      'options' => [
 *          'settings' => [
 *              'toaster' => [
 *                  'css' => [
 *                      'position' => 'fixed',
 *                      'top' => '10px',
 *                      'right' => '10px',
 *                      'width' => '300px',
 *                      'zIndex' => 50000
 *                  ],
 *              ],
 *              'toast' => [
 *                  'fade' => 'slow',
 *              ],
 *              'timeout' => 3000
 *
 *          // and more for this library...
 *      ],
 *  ]);
 * ---------------------------------------
 */
class JqueryToaster extends Layer implements LayerInterface
{
    /**
     * @var array $defaultOptions
     */
    protected $defaultOptions = [
        'settings' => [
            'toaster' => [
                'css' => [
                    'position' => 'fixed',
                    'top' => '10px',
                    'right' => '10px',
                    'width' => '300px',
                    'zIndex' => 50000
                ],
            ],
            'toast' => [
                'fade' => 'slow',
            ],
            'timeout' => 3000
        ]
    ];

    /**
     * register asset
     */
    public function run()
    {
        $view = $this->getView();
        JqueryToasterAsset::register($view);
        parent::run();
    }

    /**
     * @param $options
     * @return string
     */
    public function getNotification($options)
    {
        $options['priority'] = $this->getStyle();
        $options['message'] = $this->getMessageWithTitle();

        $options = Json::encode($options);

        return "$.toaster($options);";
    }

    /**
     * @return string
     */
    public function getStyle()
    {
        switch ($this->type) {
            case self::TYPE_ERROR:
                $style = "danger";
                break;
            default:
                $style = $this->type;
        }
        return $style;
    }
}
