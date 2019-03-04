<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Http\Client\Adapter\Curl;
class IndexController extends AbstractActionController
{

    public function indexAction()
    {
     return new ViewModel();
    }
}
