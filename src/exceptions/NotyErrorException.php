<?php

namespace sankaest\modules\notification\exceptions;

use sankaest\modules\notification\layers\Layer;
use yii\base\Exception;

/**
 * Class NotyErrorException
 * @package sankaest\modules\notification\exceptions
 */
class NotyErrorException extends NotyFlashException
{
    /**
     * NotyErrorException constructor.
     * @param string $message
     * @param Exception|null $previous
     */
    public function __construct($message, Exception $previous = null)
    {
        $this->message = $message;
        parent::__construct(Layer::TYPE_ERROR, $message, $previous);
    }
}
