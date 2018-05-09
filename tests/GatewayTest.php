<?php

namespace Omnipay\SwiftPass;

use Omnipay\Omnipay;
use Omnipay\Tests\GatewayTestCase;
use Omnipay\SwiftPass\Message\CreateOrderResponse;
use Omnipay\SwiftPass\Message\CompletePurchaseResponse;
use Omnipay\SwiftPass\Message\QueryOrderResponse;

class GatewayTest extends GatewayTestCase
{

    /**
     * @var Gateway $gateway
     */
    protected $gateway;

    protected $options;

    public function setUp()
    {
        parent::setUp();
        $this->gateway = Omnipay::create('SwiftPass');
        $this->gateway->setMchId('mchid');
        $this->gateway->setMchKey('mchkey');
    }

    public function testCompletePurchase()
    {
        $options = array (
            'request_params' => array (
                'appid'       => '123456',
                'mch_id'      => '789456',
                'result_code' => '0'
            ),
        );

        /**
         * @var CompletePurchaseResponse $response
         */
        $response = $this->gateway->completePurchase($options)->send();
        $this->assertTrue($response->isSuccessful());
    }

    public function testQuery()
    {
        $options = array (
            'transaction_id' => 'transaction_id',
        );

        /**
         * @var QueryOrderResponse $response
         */
        $response = $this->gateway->query($options)->send();
        $this->assertFalse($response->isSuccessful());
    }
}