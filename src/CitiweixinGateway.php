<?php

namespace Omnipay\AyPay;

/**
 * Class Cibwxh5Gateway
 * @package Omnipay\AyPay
 */
class CitiweixinGateway extends BaseAbstractGateway
{

    public function getName()
    {
        return 'AyPay citiweixin';
    }


    public function getService()
    {
        return 'citiweixin';
    }
}
