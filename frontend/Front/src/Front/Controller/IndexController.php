<?php
/**
 * ZEND GROUP
 *
 * @name        IndexController.php
 * @category    Module
 * @package 	Front
 * @subpackage  Controller
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @link 		http://www.thuydx.com
 * @copyright   Copyright (c) 2012-2013 ZEND GROUP. All rights reserved (http://www.zendgroup.vn)
 * @license     http://zendgroup.vn/license/
 * @version     $0.1$
 * 3:52:05 AM - Apr 3, 2013
 *
 * LICENSE
 *
 * This source file is copyrighted by ZEND GROUP, full details in LICENSE.txt.
 * It is also available through the Internet at this URL:
 * http://zendgroup.vn/license/
 * If you did not receive a copy of the license and are unable to
 * obtain it through the Internet, please send an email
 * to license@zendgroup.vn so we can send you a copy immediately.
 *
 */

namespace Front\Controller;

use Zend\View\Model\ViewModel;
use ZG\Mvc\Controller\ActionController;

class IndexController extends ActionController
{
    public function indexAction()
    {
        
        
        return new ViewModel();
        //$objectManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');

    	
		
		//echo $this->search_largest_prime(50);
		
		//$this->show_fibonacci(7);

     //   $this->count_word('122 is larger than 11 but smaller than 199 and 1a3 is not a number');
//die;
// $a = new \ZGlib\Model\Entities\Albums();
// echo '<pre>'; var_dump($a); die();
//        echo '<pre>'; var_dump($album1); die();
//         $user = new \ZGlib\Model\Entities\Users();
//         $user->setUserName('thuydx');
//         $objectManager->persist($user);
//         $objectManager->flush();

//         echo '<pre>'; var_dump($user->getUserName()); die();
        
    }
    /*
    public function check_prime($n) {
        if ($n == 2 || $n == 3) {
            return true;
        }
        if ($n == 1 || $n % 2 == 0 || $n % 3 == 0) {
            return false;
        }
        
        $j = sqrt($n);
        for ($i = 5; $i <= $j; $i += 6){
			if ($n % $i == 0 || $n % ($i + 2) == 0)
				return false;
				// in the end, n is a prime
				return true;
        }
    }
    
    public function search_largest_prime($n) {
		for($n; $n>=0;$n--)
		{
		    $checked = $this->check_prime($n);
		    if ($checked == true) {
		        return $n;
		    }
		}
    }
    
    public function show_fibonacci($n) {
        $f0 = 0;
        $f1 = 1;
        
        for ($i =0; $i <= $n; $i++ ) {
            if ($i <= 1){
                $next = $i;
            } else {
                $next = $f0 + $f1;
                $f0 = $f1;
                $f1 = $next;
            }
            echo $next . ' ';
        }        
    }
  
    
    public function count_word($str) {
        $str2 = '';
        $num_count = 0;
        $word_count = 0;
        for ($i = 0; $i <= strlen($str); $i++) {
            $temp = substr($str, $i, 1);
			if ($temp !== ' ' && $i != strlen($str)) {
                $str2 .= $temp;
            } else {
                echo $str2 . ' - ' . (string)$str2 / 2 .'<br>';
                
                
                
                if (is_numeric($str2)) {
                    $num_count++;
                } else {
                    $word_count++;
                }    
                $str2 = '';
            }
        }
//        echo 'word count: '. $word_count . '<br> number count: ' . $num_count;
    }
	*/
}
