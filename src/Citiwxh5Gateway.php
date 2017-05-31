<?php

namespace Omnipay\AyPay;

/**
 * Class Cibwxh5Gateway
 * @package Omnipay\AyPay
 */
class Citiwxh5Gateway extends BaseAbstractGateway
{

    public function getName()
    {
        return 'AyPay citiwxh5';
    }


    public function getService()
    {
        return 'citiwxh5';
    }
}
