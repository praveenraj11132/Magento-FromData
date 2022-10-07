<?php
namespace Praveen\FormData\Controller\Car;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Praveen\FormData\Model\Car;
use Praveen\FormData\Model\ResourceModel\Car as CarResource;

class Add extends Action
{
  
    private $car;
    
    private $carResource;

    public function __construct(
        Context $context,
        Car $car,
        CarResource $carResource
    )
    {
        parent::__construct($context);
        $this->car = $car;
        $this->carResource = $carResource;
    }

    public function execute()
    {
        
        $data = $this->getRequest()->getParams();

        $carModel = $this->car;
        $carModel->setData($data);

        try {
            /* Use the resource model to save the model in the DB */
            $this->carResource->save($carModel);
            $this->messageManager->addSuccessMessage("Car saved successfully!");
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage(__("Error saving car"));
        }

        /* Redirect back to cars page */
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('form');
        return $redirect;
    }
}