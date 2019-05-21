<?php
namespace Omnipay\NestPay\Message;

/**
 *
 * @author burak
 *        
 */
class AuthorizePostRequest extends PostRequest
{

    public function getData()
    {
        if (empty($this->getType())) {
            $this->setType('PreAuth');
        }
        return parent::getData();
    }
}
