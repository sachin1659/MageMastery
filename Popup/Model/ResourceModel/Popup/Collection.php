<?php
namespace MageMastery\Popup\Model\ResourceModel\Popup;
use MageMastery\Popup\Model\Popup;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function __construct()
    {
        $this->init(
            'MageMastery\Popup\Model\Popup',
            'MageMastery\Popup\Model\ResourceModel\Popup'
        );
    }
}