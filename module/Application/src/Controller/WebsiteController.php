<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\Website as WebsiteForm;
use Application\Model\Website;

class WebsiteController extends AbstractActionController
{
	/**
	* Entity manager.
	* @var Doctrine\ORM\EntityManager
	*/
	private $entityManager;

	// Constructor method is used to inject dependencies to the controller.
	public function __construct($entityManager) 
	{
		$this->entityManager = $entityManager;
	}


    public function indexAction()
    {
    	$form = new WebsiteForm();
        return new ViewModel(['form'=>$form]);
    }

    /**
     *
     **/
    public function saveAction() 
    {
    	$website = new Website();

    	if ($this->getRequest()->isPost()) {
            $data = $this->params()->fromPost();

		    $website->setNaam($data['naam']);
		    $website->setUrl($data['url']);

		    $this->entityManager->persist($website);
		    $this->entityManager->flush();
    	}
    	return $this->redirect()->toRoute('website');
    }
}