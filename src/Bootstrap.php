<?php

namespace sankaest\modules\notification;

use yii\base\BootstrapInterface;

/**
 * noty module bootstrap class.
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        // add module I18N category
        if (!isset($app->i18n->translations['notification'])) {
            $app->i18n->translations['notification'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'sourceLanguage' => 'en-US',
                'basePath' => '@sankaest/modules/notification/messages',
            ];
        }
    }
}
