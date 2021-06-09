<?php

namespace Omnipay\NestPay\Message;

use Omnipay\Common\Message\AbstractRequest;

class CompletePaymentRequest extends AbstractRequest
{

	public function getData()
    {
        return $this->httpRequest->request->all();
    }

    public function sendData($data)
    {
        return $this->response = new CompletePaymentResponse($this, $data);
    }

}
