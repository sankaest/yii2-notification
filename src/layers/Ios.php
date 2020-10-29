<?php

namespace sankaest\modules\notification\layers;

use yii\helpers\Json;

/**
 * Class Ios
 * @package sankaest\modules\notification\layers
 *
Parameter 	Default 	Expects
delay 	5000 	Number (milliseconds)
sticky 	false 	Boolean
className 	"message" 	String
title 	"Notification" 	String
message 	"Lorem ipsum dolor sit amet." 	String
url 	null 	String (url)
click 	null 	Function
 *
// default example
ios.notify();

// an example message
ios.notify({
title: "Michael Bluth",
message: "It's as plain as the Ann on egg's face."
});
 */
class Ios extends Layer implements LayerInterface
{

    public $iconPath;

    /**
     * set title by type
     */
    public function icon()
    {
        switch ($this->type) {
            case self::TYPE_ERROR:
                return '../img/icon_message_error.png';
            case self::TYPE_INFO:
                return '../img/icon_message.png';
            case self::TYPE_WARNING:
                return '../img/icon_message_warning.png';
            case self::TYPE_SUCCESS:
                return '../img/icon_message_success.png';
            default:
                return '../img/icon_message.png';
        }
    }
    /**
     * @param $options
     * @return string
     */
    public function getNotification($options)
    {
        $options['title'] = $this->title;
        $options['message'] = $this->message;
        $options['className'] = $this->type;
        $options['icon'] = $this->icon();
        $options = Json::encode($options);

        return "Ios.notify($options);";
    }

}
