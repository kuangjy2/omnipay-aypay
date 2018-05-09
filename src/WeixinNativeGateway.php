<?php

namespace Omnipay\SwiftPass;

/**
 * Class WeixinNativeGateway
 * @package Omnipay\SwiftPass
 */
class WeixinNativeGateway extends BaseAbstractGateway
{

    public function getName()
    {
        return 'SwiftPass Weixin Native';
    }

    public function getService()
    {
        return 'pay.weixin.native';
    }
}
