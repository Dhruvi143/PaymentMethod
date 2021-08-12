<?php
declare(strict_types=1);
namespace Codilar\PaymentMethod\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;
use Magento\Store\Model\StoreManagerInterface;

/**
 * class StoreViews
 * @package Codilar\PaymentMethod\Model\Config\Source
 */
class StoreViews implements ArrayInterface
{
    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    public function __construct(
        StoreManagerInterface $storeManager
    ) {
        $this->storeManager = $storeManager;
    }

    /**
     * @return array
     */
    public function toOptionArray() : array
    {
        $list = [];
        $stores = $this->getAllStores();
        foreach ($stores as $store) {
            $list[] = [
                'value' => $store->getCode(),
                'label' => $store->getName()
            ];
        }

        return $list;
    }

    /**
     * @return \Magento\Store\Api\Data\StoreInterface[]
     */
    protected function getAllStores()
    {
        return $this->storeManager->getStores();
    }
}
