<?php

namespace sankaest\modules\notification\exceptions;

use sankaest\modules\notification\layers\Layer;
use yii\base\Exception;

/**
 * Class NotySuccessException
 * @package sankaest\modules\notification\exceptions
 */
class NotySuccessException extends NotyFlashException
{
    /**
     * NotySuccessException constructor.
     * @param string $message
     * @param Exception|null $previous
     */
    public function __construct($message, Exception $previous = null)
    {
        $this->message = $message;
        parent::__construct(Layer::TYPE_SUCCESS, $message, $previous);
    }
}
