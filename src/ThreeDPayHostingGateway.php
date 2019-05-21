<?php
namespace Omnipay\NestPay;

use Omnipay\Common\AbstractGateway;

/**
 * NestPay 3D Pay Hosting Gateway
 *
 * @author Burak USGURLU <burak@uskur.com.tr>
 *        
 */
class ThreeDPayHostingGateway extends PostGateway
{

    public function initialize(array $parameters = array())
    {
        parent::initialize($parameters);
        $this->setStoreType('3d_pay_hosting');
    }

    public function getName()
    {
        return 'NestPay 3D Pay Hosting';
    }
}
