<?php

namespace MageMastery\Popup\Controller\Adminhtml\Index;
use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\Page;
class Index extends Action
{   
	public function execute():ResultInterface 
	{
		$page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
		$page->setActiveMenu('MageMastery_Popup::popup');
        $page->addBreadcrumb(__('Popups'), __('Popups'));
        $page->addBreadcrumb(__('Manage Popups'), __('Manage Popups'));
        $page->getConfig()->getTitle()->prepend(__('Popups'));
		return $page;
	}
}