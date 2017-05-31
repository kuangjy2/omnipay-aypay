<?php

namespace Omnipay\AyPay;

/**
 * Class Cibwxh5Gateway
 * @package Omnipay\AyPay
 */
class CitialipayGateway extends BaseAbstractGateway
{

    public function getName()
    {
        return 'AyPay citialipay';
    }


    public function getService()
    {
        return 'citialipay';
    }
}
