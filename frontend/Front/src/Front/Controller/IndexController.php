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
use ZGlib\Mvc\Controller\ActionController;

class IndexController extends ActionController
{
    public function indexAction()
    {
        //$objectManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');

    
		for ($i = 1; $i < 383; $i++){
		
			$num = $this->toNum($i);
			$chap = 'chap-' . $num;
			
			$imgDir = PUBLIC_PATH . '/stories/' . $chap;
			if (!is_dir($imgDir)) {
				mkdir($imgDir, 0777, true);
				chmod($imgDir, 0777);
			}else {
				chmod($imgDir, 0777);
			}
			
			$url = 'http://blogtruyen.com/truyen/gantz/' . $chap;
			//$content = file_get_contents($filename);
			
			$ch = curl_init();
			$timeout = 5;
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
			
			$userAgent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)';
			curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
			
			$data = curl_exec($ch);
			curl_close($ch);
			
			$matched = array();
			$subject = $data;
			$pattern = '#<div id="noidungchuong">(.*)</div>#imsu';
			
			
			preg_match($pattern, $subject, $matched);
			
			
			$strImg = $matched[1];
			
			$imgUrl = array();
			$pattern1 = '#<img src="(.*)" ?\/>#imsU';
			
			preg_match_all($pattern1, $strImg, $imgUrl);
			
			array_pop($imgUrl[1]);
			
			echo '<pre>'; var_dump($imgUrl[1]); die();
// 			if (count($imgUrl[1])) {
// 				foreach ($imgUrl[1] as $key=>$item){
// 					$command = 'wget -O ' . $imgDir . '/img_' . $this->toNum($key) . '.jpg ' . $item . ' 2>&1';
					
// 					$output = '';
// 					exec($command, $output);
					
// 					if (count($output) > 0) {
// 		                echo Vnteam_General::getColoredString("download $item success ! \n", 'green');
// 		            } else {
// 		                echo Vnteam_General::getColoredString("Fail to download ! \n", 'light_cyan', 'red');
// 		            }
// 				}
// 			}
		}
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
        return new ViewModel();
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
