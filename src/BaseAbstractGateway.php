<?php

namespace Omnipay\AyPay;

use Omnipay\Common\AbstractGateway;

abstract class BaseAbstractGateway extends AbstractGateway
{

    public function setService($service)
    {
        $this->setParameter('service', $service);
    }

    public function setMchKey($mchKey)
    {
        $this->setParameter('mch_key', $mchKey);
    }


    public function getMchKey()
    {
        return $this->getParameter('mch_key');
    }


    public function setMchId($mchId)
    {
        $this->setParameter('mch_id', $mchId);
    }


    public function getMchId()
    {
        return $this->getParameter('mch_id');
    }


    public function setNotifyUrl($url)
    {
        $this->setParameter('notify_url', $url);
    }


    public function getNotifyUrl()
    {
        return $this->getParameter('notify_url');
    }


    /**
     * @param array $parameters
     *
     * @return \Omnipay\AyPay\Message\CreateOrderRequest
     */
    public function purchase($parameters = array())
    {
        $parameters['service'] = $this->getService();

        return $this->createRequest('\Omnipay\AyPay\Message\CreateOrderRequest', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Omnipay\AyPay\Message\CompletePurchaseRequest
     */
    public function completePurchase($parameters = array())
    {
        return $this->createRequest('\Omnipay\AyPay\Message\CompletePurchaseRequest', $parameters);
    }


    public function getService()
    {
        return $this->getParameter('service');
    }


}
