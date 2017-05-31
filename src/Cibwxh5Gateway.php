<?php

namespace Omnipay\AyPay;

/**
 * Class Cibwxh5Gateway
 * @package Omnipay\AyPay
 */
class Cibwxh5Gateway extends BaseAbstractGateway
{

    public function getName()
    {
        return 'AyPay cibwxh5';
    }


    public function getService()
    {
        return 'cibwxh5';
    }
}
