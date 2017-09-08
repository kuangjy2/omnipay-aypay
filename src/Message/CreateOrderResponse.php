<?php

namespace Omnipay\AyPay\Message;

use Omnipay\AyPay\Helper;

/**
 * Class CreateOrderResponse
 * @package Omnipay\AyPay\Message
 */
class CreateOrderResponse extends BaseAbstractResponse
{

    /**
     * @var CreateOrderRequest
     */
    protected $request;

    public function getPayInfo()
    {
        if ($this->isSuccessful()) {
            $data = $this->getData();
            $data = str_replace("{xml}", "&", $data['pay_info']);
        } else {
            $data = null;
        }

        return $data;
    }

    public function getTokenId()
    {
        if ($this->isSuccessful()) {
            $data = $this->getData();
            $data = str_replace("{xml}", "&", $data['token_id']);
        } else {
            $data = null;
        }

        return $data;
    }
	
	public function getErrMsg()
	{
		$data = $this->getData();
		$err_msg = '';
		if (isset($data['err_msg'])) {
		    $err_msg = $data['err_msg'];
		}
		return $err_msg;
	}
	
	public function getMessage()
	{
		$data = $this->getData();
		$message = '';
		if (isset($data['message'])) {
		    $message = $data['message'];
		}
		return $message;
	}
}