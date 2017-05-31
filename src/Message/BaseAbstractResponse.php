<?php

namespace Omnipay\AyPay\Message;

use Omnipay\Common\Message\AbstractResponse;

/**
 * Class BaseAbstractResponse
 * @package Omnipay\WechatPay\Message
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

        return isset($data['result_code']) && $data['result_code'] == '0' && isset($data['err_msg']) && $data['err_msg'] == 'ok';
    }
}
