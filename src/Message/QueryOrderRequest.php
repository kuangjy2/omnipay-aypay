<?php

namespace Omnipay\AyPay\Message;

use Omnipay\Common\Exception\InvalidRequestException;
use Omnipay\Common\Message\ResponseInterface;
use Omnipay\AyPay\Helper;

class QueryOrderRequest extends BaseAbstractRequest
{

    protected $endpoint = 'https://vip.iyibank.com/pay/orderquery';


    /**
     * Get the raw data array for this message. The format of this varies from gateway to
     * gateway, but will usually be either an associative array, or a SimpleXMLElement.
     * @return mixed
     * @throws InvalidRequestException
     */
    public function getData()
    {
        $this->validate('mch_id');

        if (!$this->getTransactionId() && !$this->getOutTradeNo()) {
            throw new InvalidRequestException("The 'transaction_id' or 'out_trade_no' parameter is required");

        }

        $data = array(
            'version' => '1.0',
            'charset' => 'UTF-8',
            'sign_type' => 'MD5',
            'mch_id' => $this->getMchId(),
            'transaction_id' => $this->getTransactionId(),
            'out_trade_no' => $this->getOutTradeNo(),
            'nonce_str' => md5(uniqid()),
        );

        $data = array_filter($data);

        $data['sign'] = Helper::sign($data, $this->getMchKey());

        return $data;
    }


    /**
     * @return mixed
     */
    public function getOutTradeNo()
    {
        return $this->getParameter('out_trade_no');
    }


    /**
     * @param mixed $outTradeNo
     */
    public function setOutTradeNo($outTradeNo)
    {
        $this->setParameter('out_trade_no', $outTradeNo);
    }


    /**
     * @return mixed
     */
    public function getTransactionId()
    {
        return $this->getParameter('transaction_id');
    }


    public function setTransactionId($transactionId)
    {
        $this->setParameter('transaction_id', $transactionId);
    }


    /**
     * Send the request with specified data
     *
     * @param  mixed $data The data to send
     *
     * @return ResponseInterface
     */
    public function sendData($data)
    {
        $request = $this->httpClient->post($this->endpoint)->setBody(Helper::array2xml($data));
        $response = $request->send()->getBody();
        $responseData = Helper::xml2array($response);

        return $this->response = new QueryOrderResponse($this, $responseData);
    }
}