<?php
/**
* @description		  Object for Download of files [Object for Download of files]
* @since			  May/2004
* @otherInformation	  Other properties can be added header.  It makes!
*/

namespace ZG\Utilities;
class String
{
	/**
	 *
	 * @param String $str
	 * @param Int $length
	 * @param String $moreStr
	 * @return String
	 */
	public static function cutString($str ,$length = 100 , $char = ' ', $moreStr = '...'){
		$output = '';
		if(strlen($str) > $length){
			$temp   	= substr($str,0,$length);
			$lastAppear	= strrpos($temp,$char);
			$output		= substr($temp,0,$lastAppear).' '.$moreStr;
		}
		else
			$output   = $str;
		return $output;
	}
}
?>