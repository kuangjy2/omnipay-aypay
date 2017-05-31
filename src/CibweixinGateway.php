<?php

namespace Omnipay\AyPay;

/**
 * Class Cibwxh5Gateway
 * @package Omnipay\AyPay
 */
class CibweixinGateway extends BaseAbstractGateway
{

    public function getName()
    {
        return 'AyPay cibweixin';
    }


    public function getService()
    {
        return 'cibweixin';
    }
}
