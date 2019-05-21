<?php
namespace Omnipay\NestPay\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RequestInterface;
use Omnipay\Common\Message\RedirectResponseInterface;
use Omnipay\Common\Exception\InvalidResponseException;

/**
 *
 * NestPay 3D Pay Hosting Purchase Response
 *
 * @author Burak USGURLU <burak@uskur.com.tr>
 *        
 */
class PostResponse extends AbstractResponse implements RedirectResponseInterface
{

    protected $request;

    /**
     * Constructor
     *
     * @param RequestInterface $request
     * @param string $data
     *            / response data
     * @throws InvalidResponseException
     */
    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
    }

    /**
     * Whether or not response is successful
     *
     * @return bool
     */
    public function isSuccessful()
    {
        return true;
    }

    /**
     * Get is redirect
     *
     * @return bool
     */
    public function isRedirect()
    {
        return true;
    }

    /**
     * Get a code describing the status of this response.
     *
     * @return string|null code
     */
    public function getCode()
    {
        return $this->isSuccessful() ? $this->data["AuthCode"] : parent::getCode();
    }

    /**
     * Get transaction reference
     *
     * @return string
     */
    public function getTransactionReference()
    {
        return $this->isSuccessful() ? $this->data["TransId"] : '';
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return false;
    }

    /**
     * Get error
     *
     * @return string
     */
    public function getError()
    {
        return false;
    }

    /**
     * Get Redirect url
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->request->getEndpoint();
    }

    /**
     * Get Redirect method
     *
     * @return POST
     */
    public function getRedirectMethod()
    {
        return 'POST';
    }

    /**
     * Get Redirect url
     *
     * @return null
     */
    public function getRedirectData() {
        return $this->request->getData();
    }

}
