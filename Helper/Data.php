<?php
declare(strict_types=1);

namespace Remover\StoreCode\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    public const XML_PATH_HIDE_DEFAULT_STORE_CODE = 'web/url/hide_default_store_code';

    /**
     * Get is enabled
     *
     * @return boolean
     */
    public function isHideDefaultStoreCode(): bool
    {
        if ($this->scopeConfig->getValue(
            self::XML_PATH_HIDE_DEFAULT_STORE_CODE,
            ScopeInterface::SCOPE_STORE
        )) {
            return true;
        }
        return false;
    }
}
