<?php
namespace AdminCP\Controller;
use ZG\Mvc\Controller\ActionController;
use Zend\View\Model\ViewModel;

class ContentTypeController extends ActionController
{

    public function indexAction ()
    {
        return new ViewModel();
    }
}
