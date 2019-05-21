<?php
namespace Omnipay\NestPay;

use Omnipay\Common\AbstractGateway;

/**
 * NestPay 3D Pay Gateway
 *
 * @author Burak USGURLU <burak@uskur.com.tr>
 *        
 */
class ThreeDPayGateway extends PostGateway
{

    public function initialize(array $parameters = array())
    {
        parent::initialize($parameters);
        $this->setStoreType('3d_pay');
    }

    public function getName()
    {
        return 'NestPay 3D Pay';
    }
}
