<?php
/**
 * ZEND GROUP
 *
 * @name        Thumb.php
 * @category
 * @package
 * @subpackage
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @copyright   Copyright (c)2008-2010 ZEND GROUP. All rights reserved
 * @license     http://zendgroup.vn/license/
 * @version     $1.0$
 * Aug 3, 2013
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

namespace ZG\Utilities;

use ZG\Utilities\Image\SimpleImage as SimpleImage;

use ZG\Utilities\Image;
class Thumb
{
	/**
	* Constructor
	* @access		public
	*/
	public function decode($params)
	{
        $fileorginal = base64_decode($params['filename']);
        $fileinfo = pathinfo($fileorginal);
        $file = ($fileinfo['extension']);
        $filename = base64_decode($params['filename']);
        $path = base64_decode($params['path']);
        $filePathOrigin = $path . $filename;
        if(file_exists($filePathOrigin)) {
            SimpleImage::showImage($filePathOrigin);
        }

	}
}
?>