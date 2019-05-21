<?php
namespace Omnipay\NestPay\Message;

/**
 *
 * @author burak
 *        
 */
class PurchasePostRequest extends PostRequest
{

    public function getData()
    {
        if (empty($this->getType())) {
            $this->setType('Auth');
        }
        return parent::getData();
    }
}
