<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\URLs as URLsForm;
use Application\Model\URLs;
use Application\Model\Website;
class URLsController extends AbstractActionController
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

	/**
	*
	**/
    public function indexAction()
    {

    	$form = new URLsForm();
		$Website = $this->entityManager->getRepository(Website::class)->findAll();

		$query = $this->entityManager->createQuery('SELECT w.id,w.naam FROM Application\Model\Website w');
		$websites = $query->getResult();
		$selectOptions = [];
		foreach ($websites as $website) {
			$key = $website['id'];
			$selectOptions[$key] = $website['naam'];
		}

		$form->get('websiteId')->setValueOptions($selectOptions);

        return new ViewModel(['form'=>$form]);
    }

    /**
     *
     **/
    public function saveAction() 
    {
    	$urls = new URLs();

    	if ($this->getRequest()->isPost()) {
            $data = $this->params()->fromPost();
/*            print '<pre>';
            print_r($data);
            die;*/
		    $urls->setWebsiteId((int)$data['websiteId']);
		    $urls->setUrl($data['url']);
		    $urls->setCount($data['count']);

		    $this->entityManager->persist($urls);
		    $this->entityManager->flush();
    	}
    	return $this->redirect()->toRoute('urls');
    }
}