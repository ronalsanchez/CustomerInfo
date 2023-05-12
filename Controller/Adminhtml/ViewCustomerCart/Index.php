<?php
namespace Polywood\CustomerInfo\Controller\Adminhtml\ViewCustomerCart;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->getConfig()->getTitle()->prepend(__('View Customer Cart'));

        return $resultPage;
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Polywood_CustomerInfo::view_customer_cart');
    }
   
  }