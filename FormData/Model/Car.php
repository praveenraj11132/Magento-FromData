<?php

namespace Praveen\FormData\Model;

use Magento\Framework\Model\AbstractModel;
use Praveen\FormData\Model\ResourceModel\Car as ResourceModel;

class Car extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}