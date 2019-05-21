<?php
namespace Omnipay\NestPay\Message;

/**
 * NestPay Authorize Request
 *
 * (c) Yasin Kuyu
 * 2015, insya.com
 * http://www.github.com/yasinkuyu/omnipay-nestpay
 */
class AuthorizeRequest extends PurchaseRequest
{

    public function getData()
    {
        $data['Type'] = $this->getType();
        $data['OrderId'] = $this->getTransactionId();
        
        return $data;
    }
}
