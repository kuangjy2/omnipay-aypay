<?php

namespace Omnipay\AyPay;

use Omnipay\Omnipay;
use Omnipay\Tests\GatewayTestCase;
use Omnipay\AyPay\Message\CreateOrderResponse;

class CibweixinGatewayTest extends GatewayTestCase
{

    /**
     * @var Gateway $gateway
     */
    protected $gateway;

    protected $options;

    public function setUp()
    {
        parent::setUp();
        $this->gateway = Omnipay::create('AyPay_Cibweixin');
        $this->gateway->setMchId('10024');
        $this->gateway->setMchKey('6929b166930c48c09fd88dfd17006dcd');
    }


    public function testPurchase()
    {
        $order = array (
            'out_trade_no' => time().mt_rand(1000,9999),
            'device_info' => '123',
            'body' => '据说body是一个商品描述',
            'attach' => '这是一个attach',
            'total_fee' => '0.10',
            'mch_create_ip' => '127.0.0.1',
            'notify_url' => 'http://example.com/notify.php',
            'callback_url' => 'http://example.com/callback.php',
            'nonce_str' => mt_rand(time(),time()+rand(1000,9999)),
        );

        /**
         * @var CreateOrderResponse $response
         */
        $response = $this->gateway->purchase($order)->send();
        $this->assertTrue($response->isSuccessful());
        $this->assertStringMatchesFormat('weixin://%s',$response->getPayInfo());
    }
}