<?php

namespace Freddev\PdpCustomText\Block\CustomText;

class Index extends \Magento\Framework\View\Element\Template
{
    /**
     * Registry instance
     * @var \Magento\Framework\Registry $registry
     */
    protected $registry;

    /**
     * ProductFactory instance
     * @var \Magento\Catalog\Model\ProductFactory
     */
    protected $productFactory;

    /**
     * Helper instance
     * @var \Freddev\PdpCustomText\Helper\Data
     */
    protected $_helper;
 
    /**
     * Data constructor.
     *
     * @param Context $context
     * @param Registry $registry
     * @param ProductFactory $productFactory
     * @param Data $helper
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Catalog\Model\ProductFactory $productFactory,
        \Freddev\PdpCustomText\Helper\Data $helper,
        array $data = []
    )
    {
        $this->registry = $registry;
        $this->productFactory = $productFactory;
        $this->_helper = $helper;
        parent::__construct($context, $data);
    }

    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    public function getCurrentProduct()
    {
        return $this->registry->registry('current_product');
    }

    public function getCustomText(){
        $product_id = $this->getCurrentProduct()->getId();
        $product = $this->productFactory->create();
        $product->load($product_id);
        $customText = $product->getFreddevAttribute();
        return $customText;
    }

    public function isModuleEnable(){

        return $this->_helper->isModuleEnable();

    }
}