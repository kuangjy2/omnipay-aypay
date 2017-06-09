<?php

namespace Omnipay\AyPay;

/**
 * Class Cibwxh5Gateway
 * @package Omnipay\AyPay
 */
class WeiweixinGateway extends BaseAbstractGateway
{

    public function getName()
    {
        return 'AyPay Weiweixin';
    }


    public function getService()
    {
        return 'Weiweixin';
    }
}
