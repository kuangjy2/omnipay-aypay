<?php

namespace Omnipay\SwiftPass\Message;

use Omnipay\SwiftPass\Helper;

/**
 * Class CreateOrderResponse
 * @package Omnipay\SwiftPass\Message
 */
class CreateOrderResponse extends BaseAbstractResponse
{

    /**
     * @var CreateOrderRequest
     */
    protected $request;

    /**
     * @return mixed|null
     */
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

    /**
     * @return mixed|null
     */
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

    public function getCodeUrl()
    {
        if ($this->isSuccessful()) {
            $data = $this->getData();
            $data = str_replace("{xml}", "&", $data['code_url']);
        } else {
            $data = null;
        }

        return $data;
    }

    public function getCodeImgUrl()
    {
        if ($this->isSuccessful()) {
            $data = $this->getData();
            $data = str_replace("{xml}", "&", $data['code_img_url']);
        } else {
            $data = null;
        }

        return $data;
    }

    public function getErrCode()
    {
        $data = $this->getData();
        $err_code = '';
        if (isset($data['err_code'])) {
            $err_code = $data['err_code'];
        }
        return $err_code;
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