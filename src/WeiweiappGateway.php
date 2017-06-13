<?php

namespace Omnipay\AyPay;

/**
 * Class WeiweiappGateway
 * @package Omnipay\AyPay
 */
class WeiweiappGateway extends BaseAbstractGateway
{

    public function getName()
    {
        return 'AyPay Weiweixin';
    }


    public function getService()
    {
        return 'weiweiapp';
    }
}
