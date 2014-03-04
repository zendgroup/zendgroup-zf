<?php

namespace AdminCP\Controller;

use ZendService\Twitter\Twitter;

use ZG\Mvc\Controller\ActionController;
use Zend\View\Model\ViewModel;

class IndexController extends ActionController
{
    public function indexAction()
    {
        
// 		$options = array(
// 		    'access_token' => array( // or use "accessToken" as the key; both work
// 		        'token' => '1566351553-aVnyVIJuEiPVRIJunFLT9jTDbUXvi8Gqp2Zmzb0',
// 		        'secret' => 'B3YeO3YaLbHEVOzEOVYwHbQvC2tfSuxxUTFIK2d8',
// 		    ),
// 		    'oauth_options' => array( // or use "oauthOptions" as the key; both work
// 		        'consumerKey' => 'uL46iIr7chkjW7k2cnNbZg',
// 		        'consumerSecret' => '5xzSqzz0xLMttmoiXsuNTJd59oWDEcTvBhAVunBY',
// 		    ),
// 		);
// 		$twitter = new Twitter($options);
        return new ViewModel();
    }
}
