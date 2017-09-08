<?php

namespace Omnipay\AyPay;

use Omnipay\Common\AbstractGateway;

abstract class BaseAbstractGateway extends AbstractGateway
{

    /**
     * @param string $service
     */
    public function setService($service)
    {
        $this->setParameter('service', $service);
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->getParameter('service');
    }

    /**
     * @param string $mchKey
     */
    public function setMchKey($mchKey)
    {
        $this->setParameter('mch_key', $mchKey);
    }

    /**
     * @return mixed
     */
    public function getMchKey()
    {
        return $this->getParameter('mch_key');
    }

    /**
     * @param $mchId
     */
    public function setMchId($mchId)
    {
        $this->setParameter('mch_id', $mchId);
    }

    /**
     * @return mixed
     */
    public function getMchId()
    {
        return $this->getParameter('mch_id');
    }

    /**
     * @param array $parameters
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function purchase($parameters = array())
    {
        $parameters['service'] = $this->getService();

        return $this->createRequest('\Omnipay\AyPay\Message\CreateOrderRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function completePurchase($parameters = array())
    {
        return $this->createRequest('\Omnipay\AyPay\Message\CompletePurchaseRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function query($parameters = array ())
    {
        return $this->createRequest('\Omnipay\AyPay\Message\QueryOrderRequest', $parameters);
    }

}
