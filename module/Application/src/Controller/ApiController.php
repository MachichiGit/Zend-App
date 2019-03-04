<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Json\Json;
class ApiController extends AbstractActionController
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

        $twitterSetting = [
	        'oauth_access_token' => "23581497-kq6eHoCjqgIrWgZCJHVdPPz7MXquKZWUZ5E5gdHQP",
	        'oauth_access_token_secret' => "WnRaXVCnxdllSM3nklu5RNw6mwuz3kAkWV872FEk0l2LA",

	        'consumer_key' => "nXqBI0zTr7uo2CVGKEvnU6EHC",
	        'consumer_secret' => "yDlZ8tvoodukrKWR9ia6fGA50S9waJCUVCoWLqnDtx0OucIm6s"
	    ];


		$twitter = new \TwitterAPI\TwitterAPIExchange($twitterSetting);

		$url = 'https://api.twitter.com/1.1/followers/ids.json';
		$getfield = '?screen_name=J7mbo';
		$requestMethod = 'GET';


		$ids = $twitter->setGetfield($getfield)
			           ->buildOauth($url, $requestMethod)
			           ->performRequest();
			           
        return new ViewModel(['ids'=>Json::decode($ids, true)]);
    }

    /**
     *
     **/
    public function saveAction() 
    {

    }
}