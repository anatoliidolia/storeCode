<?php

declare(strict_types=1);

namespace Remover\StoreCode\Plugin\Model;

use Gorgany\StoreCode\Helper\Data;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Store\Model\Store;

class HideDefaultStoreCode
{
    /**
     *
     * @var Data
     */
    private Data $helper;

    /**
     * @param Data $helper
     */
    public function __construct(
        Data $helper
    ) {
        $this->helper = $helper;
    }

    /**
     * Update Url
     *
     * @param Store $subject
     * @param bool  $resultIsUseInUrl
     *
     * @return bool
     * @throws NoSuchEntityException
     */
    public function afterIsUseStoreInUrl(
        Store $subject,
        bool $resultIsUseInUrl
    ): bool {

        if ($this->helper->isHideDefaultStoreCode()) {

            if ($subject->getCode() !== Store::ADMIN_CODE
                && $subject->isDefault()
            ) {
                return false;
            }

        }

        return $resultIsUseInUrl;
    }
}
