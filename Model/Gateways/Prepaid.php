<?php
declare(strict_types=1);

namespace Codilar\PaymentMethod\Model\Gateways;

use Codilar\PaymentMethod\Model\Method;

/**
 * class Prepaid
 * @package Codilar\PaymentMethod\Model\Gateways
 */
class Prepaid extends Method
{
    public $_code = 'prepaid';
    public $_gatewayCode = 'prepaid';
}
