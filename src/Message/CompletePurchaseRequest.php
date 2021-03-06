<?php

namespace Omnipay\SwiftPass\Message;

use Omnipay\Common\Message\ResponseInterface;
use Omnipay\SwiftPass\Helper;

/**
 *
 * Class CompletePurchaseRequest
 * @package Omnipay\SwiftPass\Message
 * @method CompletePurchaseResponse send()
 */
class CompletePurchaseRequest extends BaseAbstractRequest
{

    public function setRequestParams($requestParams)
    {
        $this->setParameter('request_params', $requestParams);
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
        $data = $this->getData();
        $sign = Helper::sign($data, $this->getMchKey());
        $responseData = array();

        if (isset($data['sign']) && $data['sign'] && $sign === $data['sign']) {
            $responseData['sign_match'] = true;
        } else {
            $responseData['sign_match'] = false;
        }

        if ($responseData['sign_match'] && isset($data['status']) && $data['status'] == '0' && isset($data['result_code']) && $data['result_code'] == '0') {
            $responseData['paid'] = true;
        } else {
            $responseData['paid'] = false;
        }
        $responseData = array_merge($data, $responseData);

        return $this->response = new CompletePurchaseResponse($this, $responseData);
    }


    /**
     * Get the raw data array for this message. The format of this varies from gateway to
     * gateway, but will usually be either an associative array, or a SimpleXMLElement.
     *
     * @return mixed
     */
    public function getData()
    {
        $data = $this->getRequestParams();
        if (is_string($data)) {
            $data = Helper::xml2array($data);
        }
        return $data;
    }


    public function getRequestParams()
    {
        return $this->getParameter('request_params');
    }
}
