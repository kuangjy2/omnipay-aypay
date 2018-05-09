<?php

namespace Omnipay\SwiftPass;

/**
 * Class AlipayNativeGateway
 * @package Omnipay\SwiftPass
 */
class AlipayNativeGateway extends BaseAbstractGateway
{

    public function getName()
    {
        return 'SwiftPass Alipay Native';
    }

    public function getService()
    {
        return 'pay.alipay.native';
    }
}
