<?php

namespace Omnipay\NestPay\Message;

class CompletePaymentRequest extends PostRequest
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
