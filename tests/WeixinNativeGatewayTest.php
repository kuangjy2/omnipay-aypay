<?php

namespace Omnipay\SwiftPass\Tests;

use Omnipay\Omnipay;
use Omnipay\Tests\GatewayTestCase;
use Omnipay\SwiftPass\Message\CreateOrderResponse;

class WeixinNativeGatewayTest extends GatewayTestCase
{

    /**
     * @var Gateway $gateway
     */
    protected $gateway;

    protected $options;

    public function setUp()
    {
        parent::setUp();
        $this->gateway = Omnipay::create('SwiftPass_WeixinNative');
        $this->gateway->setMchId('mchid');
        $this->gateway->setMchKey('mchkey');
    }


    public function testPurchase()
    {
        $order = array (
            'out_trade_no' => time().mt_rand(1000,9999),
            'device_info' => '1',
            'body' => '商品描述',
            'attach' => '附加信息',
            'total_fee' => '100',
            'mch_create_ip' => '127.0.0.1',
            'notify_url' => 'http://example.com/notify.php',
            'nonce_str' => mt_rand(time(),time()+rand(1000,9999)),
        );

        /**
         * @var CreateOrderResponse $response
         */
        $response = $this->gateway->purchase($order)->send();
        $this->assertTrue($response->isSuccessful());
        $this->assertStringMatchesFormat('weixin://%s',$response->getCodeUrl());
    }
}