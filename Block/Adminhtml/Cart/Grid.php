<?php
namespace Polywood\CustomerInfo\Block\Adminhtml\Cart;

class Grid extends \Magento\Backend\Block\Widget\Grid\Extended
{
    protected $_quoteItemCollection;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \Magento\Quote\Model\ResourceModel\Quote\Item\Collection $quoteItemCollection,
        array $data = []
    ) {
        $this->_quoteItemCollection = $quoteItemCollection;
        parent::__construct($context, $backendHelper, $data);
    }

    protected function _prepareCollection()
    {
        $quoteId = $this->getRequest()->getParam('quote_id');
        $collection = $this->_quoteItemCollection->addFieldToFilter('quote_id', $quoteId);
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        // TODO: add columns for the grid

        return parent::_prepareColumns();
    }
}
