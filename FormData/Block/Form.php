<?php
 namespace Praveen\FormData\Block;

 use Magento\Framework\View\Element\Template;
 use Praveen\FormData\Model\ResourceModel\Car\Collection;

 class Form extends Template
 {
    
     private $collection;

     public function __construct(
         Template\Context $context,
         Collection $collection,
         array $data = []
     )
    {
         parent::__construct($context, $data);
         $this->collection = $collection;
    }

     public function getAllCars() {
        return $this->collection;
     }

    public function getAddCarPostUrl() {
       return $this->getUrl('form/car/add');
    }


} 

