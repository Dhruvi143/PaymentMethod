<?php
declare(strict_types=1);

namespace Codilar\PaymentMethod\Model\Gateways;

use Codilar\PaymentMethod\Model\Method;

/**
 * class Cash
 * @package Codilar\PaymentMethod\Model\Gateways
 */
class Cash extends Method
{
    public $_code = 'cash';
    public $_gateWayCode = 'cash';
}
