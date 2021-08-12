<?php
declare(strict_types=1);

namespace Codilar\PaymentMethod\Model\Gateways;

use Codilar\PaymentMethod\Model\Method;

/**
 * class CustomPayment
 * @package Codilar\PaymentMethod\Model\Gateways
 */
class CustomPayment extends Method
{
    public $_code = 'custompayment';
    public $_gatewayCode = 'custompayment';
}
