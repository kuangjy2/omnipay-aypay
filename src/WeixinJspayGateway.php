<?php

namespace Omnipay\SwiftPass;

/**
 * Class WeixinJspayGateway
 * @package Omnipay\SwiftPass
 */
class WeixinJspayGateway extends BaseAbstractGateway
{

    public function getName()
    {
        return 'SwiftPass Weixin Jspay';
    }

    public function getService()
    {
        return 'pay.weixin.jspay';
    }
}
