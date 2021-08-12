<?php
declare(strict_types=1);

namespace Codilar\PaymentMethod\Model\Config;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\StoreManagerInterface;

class Settings
{
    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;
    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    public function __construct(
        ScopeConfigInterface $scopeConfig,
        StoreManagerInterface $storeManager
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->storeManager = $storeManager;
    }

    /**
     * @param string $paymentMethodCode
     * @return array
     */
    public function getEnabledForStores(string $paymentMethodCode): array
    {
        $xmlConfigPath = "payment/{$paymentMethodCode}/store_views";
        $values = $this->getValue($xmlConfigPath);

        if ($values) {
            return explode(',', $values);
        }

        return [];
    }

    /**
     * @return string
     */
    public function getCurrentStoreCode()
    {
        return $this->storeManager->getStore()->getCode();
    }

    /**
     * @param $xmlPath
     * @return mixed
     */
    protected function getValue($xmlPath)
    {
        return $this->scopeConfig->getValue($xmlPath, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}
