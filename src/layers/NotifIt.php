<?php

namespace sankaest\modules\notification\layers;

use Yii;
use yii\helpers\Json;
use sankaest\modules\notification\assets\NotifItAsset;

/**
 * Class NotifIt
 * @package sankaest\modules\notification\layers
 *
 * This widget should be used in your main layout file as follows:
 * ```php
 *  use sankaest\modules\notification\Wrapper;
 *
 *  echo Wrapper::widget([
 *      'layerClass' => 'sankaest\modules\notification\layers\NotifIt',
 *      'options' => [
 *          'multiline' => true,
 *          'position' => 'center',
 *          'width' => 'all',
 *          'append' => true,
 *          'clickable' => true,
 *
 *          // and more for this library...
 *      ],
 *  ]);
 * ```
 */
class NotifIt extends Layer implements LayerInterface
{
    /**
     * @var array $defaultOptions
     */
    protected $defaultOptions = [
        'multiline' => true,
        'position' => 'center',
        'width' => 'all',
        'append' => true,
        'clickable' => true,
    ];

    /**
     * register asset
     */
    public function run()
    {
        NotifItAsset::register($this->getView());
        $this->overrideConfirm();
        parent::run();
    }


    /**
     * @param $options
     * @return string
     */
    public function getNotification($options)
    {
        $options['type'] = $this->type;
        $options['msg'] = $this->message;
        $options = Json::encode($options);

        return "notif($options);";
    }

    /**
     * Override System Confirm
     */
    public function overrideConfirm()
    {
        if ($this->overrideSystemConfirm) {

            $ok = Yii::t('noty', 'Ok');
            $cancel = Yii::t('noty', 'Cancel');

            $this->view->registerJs("
                yii.confirm = function(message, ok, cancel) {

                    notif_confirm({
                        'message': message,
                        'textaccept': '$ok',
                        'textcancel': '$cancel',
                        'callback': function(choice){
                            if(choice){
                                !ok || ok();
                            } else{
                                !cancel || cancel();
                            }
                        }
                    })

                }
            ");
        }
    }
}
