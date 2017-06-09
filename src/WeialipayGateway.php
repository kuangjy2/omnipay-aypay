<?php

namespace Omnipay\AyPay;

/**
 * Class Cibwxh5Gateway
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
