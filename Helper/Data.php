<?php

namespace Freddev\PdpCustomText\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const XML_PATH_PDPCUSTOMTEXT = 'pdpcustomtext/';

    /**
     * Data constructor.
     *
     * @param Context $context
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

    public function getConfigValue($field, $storeId = null)
	{
		return $this->scopeConfig->getValue(
			$field, ScopeInterface::SCOPE_STORE, $storeId
		);
	}

	public function getGeneralConfig($code, $storeId = null)
	{

		return $this->getConfigValue(self::XML_PATH_PDPCUSTOMTEXT .'general/'. $code, $storeId);
	}

    public function isModuleEnable($storeId = null){

        return $this->getGeneralConfig('enable');
        
    }
}