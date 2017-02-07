<?php

namespace Tgallice\FBMessenger\Exception;

class ApiException extends \RuntimeException
{
    /**
     * @var mixed|null
     */
    private $apiError;

    /**
     * The response headers
     * @var array
     */
    private $headers;

    /**
     * ApiException constructor.
     *
     * @param string $message
     * @param int $code
     * @param mixed $apiError
     * @param array $headers
     * @param
     */
    public function __construct($message = '', $code = 0, $apiError = null, $headers = [])
    {
        parent::__construct($message, $code);
        $this->apiError = $apiError;
        $this->headers = $headers;
    }

    /**
     * @return mixed|null
     */
    public function getApiError()
    {
        return $this->apiError;
    }

    /**
     * Return the response headers
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

}
