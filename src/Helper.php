<?php

namespace Omnipay\AyPay;

class Helper
{

    public static function array2xml($arr, $root = 'xml')
    {
        $xml = "<$root>";
        foreach ($arr as $k => $v) {
            if ($v != null) {
                if ($k == 'body') {
                    $xml .= '<body>' . $v . '</body>';
                } else {
                    $xml .= '<' . $k . '>' . $v . '</' . $k . '>';
                }
            }
        }
        $xml .= "</$root>";
        return $xml;
    }


    public static function xml2array($xml)
    {
        $xml = str_replace("&", "{xml}", $xml);
        return json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
    }


    public static function sign($data, $key)
    {
        unset($data['sign']);
        ksort($data);
        $query = urldecode(http_build_query($data));
        $query .= "&key={$key}";
        return strtoupper(md5($query));
    }
}
