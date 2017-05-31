<?php

namespace Omnipay\AyPay;

/**
 * Class Cibwxh5Gateway
 * @package Omnipay\AyPay
 */
class CibalipayGateway extends BaseAbstractGateway
{

    public function getName()
    {
        return 'AyPay cibalipay';
    }


    public function getService()
    {
        return 'cibalipay';
    }
}
