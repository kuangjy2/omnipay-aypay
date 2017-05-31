<?php

namespace Omnipay\AyPay\Message;

use Omnipay\Common\Message\AbstractRequest;

/**
 * Class BaseAbstractRequest
 * @package Omnipay\AyPay\Message
 */
abstract class BaseAbstractRequest extends AbstractRequest
{
    /**
     * @return mixed
     */
    public function getMchKey()
    {
        return $this->getParameter('mch_key');
    }


    /**
     * @param mixed $apiKey
     */
    public function setMchKey($mchKey)
    {
        $this->setParameter('mch_key', $mchKey);
    }


    /**
     * @return mixed
     */
    public function getMchId()
    {
        return $this->getParameter('mch_id');
    }


    /**
     * @param mixed $mchId
     */
    public function setMchId($mchId)
    {
        $this->setParameter('mch_id', $mchId);
    }
}
