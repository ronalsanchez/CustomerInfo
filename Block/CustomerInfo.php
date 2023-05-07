<?php
namespace Polywood\CustomerInfo\Block;

class CustomerInfo extends \Magento\Framework\View\Element\Template
{
    protected $_checkoutSession;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Checkout\Model\Session $checkoutSession,
        array $data = []
    ) {
        $this->_checkoutSession = $checkoutSession;
        parent::__construct($context, $data);
    }
   
    public function getQuoteEntityId()
    {
        $quote = $this->_checkoutSession->getQuote();
        return $quote->getId();
    }
   
     public function getCustomerInfo()
     {
         return "Hello, this is your custom topbar text!";
     }
}
