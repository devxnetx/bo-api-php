<?php

namespace Devxnet\BoApiPhp\Exceptions;

use Exception;

class ApiException extends Exception
{
    protected $errors;

    /**
     * __construct
     *
     * @param string $message
     * @param int    $code
     * @param array  $errors API Errors
     *
     * @return void
     */
    public function __construct ($message, $code = 0, $errors = NULL)
    {
        parent::__construct($message, $code);

        $this->errors = $errors;
    }

    /**
     * getErrors
     *
     * @return array
     */
    public function getErrors (): ?array
    {
        return $this->errors;
    }
}