<?php

namespace Omnipay\AyPay;

/**
 * Class Weih5payGateway
 * @package Omnipay\AyPay
 */
class Weih5payGateway extends BaseAbstractGateway
{

    public function getName()
    {
        return 'AyPay Weiweixin';
    }


    public function getService()
    {
        return 'weih5pay';
    }
}
