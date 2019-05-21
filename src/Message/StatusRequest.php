<?php
namespace Omnipay\NestPay\Message;

/**
 * NestPay Purchase Request
 *
 * (c) Yasin Kuyu
 * 2015, insya.com
 * http://www.github.com/yasinkuyu/omnipay-nestpay
 */
class StatusRequest extends PurchaseRequest
{

    public function getData()
    {
        $data['OrderId'] = $this->getTransactionId();
        $this->setStatus(true);
        
        return $data;
    }
}
