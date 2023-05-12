<?php
namespace Polywood\CustomerInfo\Ui\Component\Listing;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        \Magento\Quote\Model\ResourceModel\Quote\Item\Collection $collection,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collection;
    }

    public function getData()
    {
        $quoteId = $this->_request->getParam('quote_id');
        $this->getCollection()->addFieldToFilter('quote_id', $quoteId);
        return $this->getCollection()->toArray();
    }
}
