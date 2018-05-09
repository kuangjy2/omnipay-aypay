<?php

namespace Omnipay\SwiftPass\Message;

use Omnipay\Common\Message\AbstractResponse;

/**
 * Class BaseAbstractResponse
 * @package Omnipay\SwiftPass\Message
 */
abstract class BaseAbstractResponse extends AbstractResponse
{

    /**
     * Is the response successful?
     *
     * @return boolean
     */
    public function isSuccessful()
    {
        $data = $this->getData();

        return isset($data['status']) && $data['status'] == '0' && isset($data['result_code']) && $data['result_code'] == '0';
    }
}
