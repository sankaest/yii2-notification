<?php

namespace sankaest\modules\notification\controllers;

use Yii;
use yii\helpers\Json;
use yii\web\Controller;
use sankaest\modules\notification\Wrapper;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $layerClass = Yii::$app->request->post('layerClass');
        $layerClass = trim($layerClass, '"');

        $config = Yii::$app->request->post('config');
        $config = Json::decode($config);
        $config['layerClass'] = $layerClass;

        $wrapper = new Wrapper($config);

        return $wrapper->ajaxCallback();
    }
}
