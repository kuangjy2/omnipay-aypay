<?php

namespace Omnipay\AyPay;

/**
 * Class WeialipayGateway
 * @package Omnipay\AyPay
 */
class WeialipayGateway extends BaseAbstractGateway
{

    public function getName()
    {
        return 'AyPay Weialipay';
    }


    public function getService()
    {
        return 'Weialipay';
    }
}
