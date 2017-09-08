<?php

namespace Omnipay\AyPay;

use Omnipay\Omnipay;
use Omnipay\Tests\GatewayTestCase;
use Omnipay\AyPay\Message\CreateOrderResponse;
use Omnipay\AyPay\Message\CompletePurchaseResponse;

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
        $this->gateway = Omnipay::create('AyPay_Cibweixin');
        $this->gateway->setMchId('10024');
        $this->gateway->setMchKey('6929b166930c48c09fd88dfd17006dcd');
    }



    public function testCompletePurchase()
    {
        $options = array (
            'request_params' => array (
                'appid'       => '123456',
                'mch_id'      => '789456',
                'result_code' => 'SUCCESS'
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
            'transaction_id' => '3474813271258769001041842579301293446',
        );

        /**
         * @var QueryOrderResponse $response
         */
        $response = $this->gateway->query($options)->send();
        $this->assertFalse($response->isSuccessful());
    }
}