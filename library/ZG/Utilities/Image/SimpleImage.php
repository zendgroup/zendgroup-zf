<?php
/*
* PHP Image Resize Class
*
* Class to deal with resizing images using PHP.
* Will resize any JPG, GIF or PNG file.
*
* Written By Jacob Wyke - jacob@redvodkajelly.com - www.redvodkajelly.com
*
* LICENSE
* -------
* Feel free to use this as you wish, just give me credit where credits due and drop me an email telling me what your using it for so I can check out all the cool ways its been used.
*
* USAGE
* -----
* To use this class simply call it with the following details:
*
*         Path to original image,
*         Path to save new image,
*         Resize type,
*         Resize Data
*
* The resize type can be one of four:
*
*         W    =    Width
*         H    =    Height
*         P    =    Percentage
*         C    =    Custom
*
* All of these take integers except Custom that takes an array of two integers - for width and height.
*
*         $objResize = new RVJ_ImageResize('myImage.png', 'myThumb.png', 'W', '400');
*         $objResize = new RVJ_ImageResize('myImage.jpg', 'myThumb.jpg', 'H', '150');
*         $objResize = new RVJ_ImageResize('myImage.gif', 'myThumb.gif', 'P', '50');
*         $objResize = new RVJ_ImageResize('myImage.png', 'myThumb.png', 'C', array('400', '300'));
*
* When resizing by width, height and percentage, the image will keep its original ratio. Custom will simply resizes the image to whatever values you want - without keeping the original ratio.
*
* The class can handle jpg, png and gif images.
*
* The class will always save the image that it resizes, however you can also have it display the image:
*
*         $objResize->showImage($resize->im2);
*
* The class holds the original image in the variable 'im' and the new image in 'im2'. Therefore the code above will show the newly created image.
*
* You can get information about the image by doing the following:
*
*         print_r($objResize->findResourceDetails($objResize->resOriginalImage));
*         print_r($objResize->findResourceDetails($objResize->resResizedImage));
*
* This will be useful if you wish to retrieve any details about the images.
*
* By default the class will stop you from enlarging your images (or else they will look grainy) and if you want to do this you must turn off the protection mode by passing a 5th parameter
*
*        $objResize = new SMLib_Utilities_Image_SimpleImage('myImage.gif', 'myEnlargedImage.gif', 'P', '200', false);
*
*/
//include 'BMP.php';

namespace ZG\Utilities\Image;
class SimpleImage
{
    var $strOriginalImagePath;
    var $strResizedImagePath;
    var $arrOriginalDetails;
    var $arrResizedDetails;
    var $resOriginalImage;
    var $resResizedImage;
    var $boolProtect = false;

    /*
    *
    *    @Method:        __constructor
    *    @Parameters:    5
    *    @Param-1:        strPath - String - The path to the image
    *    @Param-2:        strSavePath - String - The path to save the new image to
    *    @Param-3:        strType - String - The type of resize you want to perform
    *    @Param-4:        value - Number/Array - The resize dimensions
    *    @Param-5:        boolProect - Boolen - Protects the image so that it doesnt resize an image if its already smaller
    *    @Description:    Calls the RVJ_Pagination method so its php 4 compatible
    *
    */
    function __constructor($strPath, $strSavePath, $strType = 'W', $value = '150', $boolProtect = false,$fix=false)
    {
        $this->SMLib_Utilities_Image_SimpleImage($strPath, $strSavePath, $strType, $value,$fix);
    }

    /*
    *
    *    @Method:        SMLib_Utilities_Image_SimpleImage
    *    @Parameters:    5
    *    @Param-1:        strPath - String - The path to the image
    *    @Param-2:        strSavePath - String - The path to save the new image to
    *    @Param-3:        strType - String - The type of resize you want to perform
    *    @Param-4:        value - Number/Array - The resize dimensions
    *    @Param-5:        boolProect - Boolen - Protects the image so that it doesnt resize an image if its already smaller
    *    @Description:    Calls the RVJ_Pagination method so its php 4 compatible
    *
    */
    function SMLib_Utilities_Image_SimpleImage($strPath, $strSavePath, $strType = 'W', $value = '150', $boolProtect = false,$fix=false)
    {

        //save the image/path details
        $this->strOriginalImagePath=$strPath;
        $this->strResizedImagePath =$strSavePath;
        $this->boolProtect         =$boolProtect;

        //get the image dimensions
        $this->arrOriginalDetails  =getimagesize($this->strOriginalImagePath);
        $this->arrResizedDetails   =$this->arrOriginalDetails;

        //create an image resouce to work with
        $this->resOriginalImage    =$this->createImage($this->strOriginalImagePath);

        //select the image resize type
        switch (strtoupper($strType))
        {
            case 'P':
                $this->resizeToPercent($value);
                break;

            case 'H':
                $this->resizeToHeight($value);
                break;

            case 'C':
                $this->resizeToCustom($value,$fix);
                break;

            case 'W':
            default:
                $this->resizeToWidth($value);
                break;
        }
    }

    /*
    *
    *    @Method:        findResourceDetails
    *    @Parameters:    1
    *    @Param-1:        resImage - Resource - The image resource you want details on
    *    @Description:    Returns an array of details about the resource identifier that you pass it
    *
    */
    function findResourceDetails($resImage)
    {
        //check to see what image is being requested
        if ( $resImage == $this->resResizedImage )
        {
            //return new image details
            return $this->arrResizedDetails;
        }
        else
        {
            //return original image details
            return $this->arrOriginalDetails;
        }
    }

    /*
    *
    *    @Method:        updateNewDetails
    *    @Parameters:    0
    *    @Description:    Updates the width and height values of the resized details array
    *
    */
    function updateNewDetails()
    {
        $this->arrResizedDetails[0]=imagesx($this->resResizedImage);
        $this->arrResizedDetails[1]=imagesy($this->resResizedImage);
    }

    /*
    *
    *    @Method:        createImage
    *    @Parameters:    1
    *    @Param-1:        strImagePath - String - The path to the image
    *    @Description:    Created an image resource of the image path passed to it
    *
    */
    function createImage($strImagePath)
    {

        //get the image details
        $arrDetails=$this->findResourceDetails($strImagePath);

        //choose the correct function for the image type
        switch ($arrDetails['mime'])
        {
            case 'image/jpeg':
                return imagecreatefromjpeg($strImagePath);

                break;

            case 'image/png':
                return imagecreatefrompng($strImagePath);

                break;

            case 'image/gif':
                return imagecreatefromgif($strImagePath);

                break;
        }
    }

    /*
    *
    *    @Method:        saveImage
    *    @Parameters:    1
    *    @Param-1:        numQuality - Number - The quality to save the image at
    *    @Description:    Saves the resize image
    *
    */
    function saveImage($numQuality = 85)
    {
        return false;
    }

    /*
    *
    *    @Method:        showImage
    *    @Parameters:    1
    *    @Param-1:        resImage - Resource - The resource of the image you want to display
    *    @Description:    Displays the image resouce on the screen
    *
    */
    function showImage($file)
    {
        ob_start();
        $pf = readfile($file, "r");
        $contents = ob_get_contents();
        ob_end_clean();
        header("Content-type: image/jpeg") ;
        header("Content-Length: ".strlen($contents));
        echo $contents;
        exit();
    }

    /*
    *
    *    @Method:        destroyImage
    *    @Parameters:    1
    *    @Param-1:        resImage - Resource - The image resource you want to destroy
    *    @Description:    Destroys the image resource and so cleans things up
    *
    */
    function destroyImage($resImage)
    {
        imagedestroy ($resImage);
    }

    /*
    *
    *    @Method:        _resize
    *    @Parameters:    2
    *    @Param-1:        numWidth - Number - The width of the image in pixels
    *    @Param-2:        numHeight - Number - The height of the image in pixes
    *    @Description:    Resizes the image by creatin a new canvas and copying the image over onto it. DONT CALL THIS METHOD DIRECTLY - USE THE METHODS BELOW
    *
    */
    function _resize($numWidth, $numHeight)
    {

        //check for image protection
        if ($this->_imageProtect($numWidth, $numHeight))
        {
            if ( $this->arrOriginalDetails['mime'] == 'image/gif' )
            {
                //GIF image
                $this->resResizedImage=imagecreate($numWidth, $numHeight);
				$trans = imagecolorallocate($this->resResizedImage,255,99,140);
				imagecolortransparent($this->resResizedImage,$trans);

			}
           else if ( $this->arrOriginalDetails['mime'] == 'image/png' )
            {
                //PNG image
                $this->resResizedImage=imagecreate($numWidth, $numHeight);
                imagealphablending($this->resResizedImage, false);

                // Create a new transparent color for image
                $color = imagecolorallocatealpha($this->resResizedImage, 0, 0, 0, 127);

                // Completely fill the background of the new image with allocated color.
                imagefill($this->resResizedImage, 0, 0, $color);

                // Restore transparency blending
                imagesavealpha($this->resResizedImage, true);


			}
			else
			{
				//JPG or PNG image
				$this->resResizedImage=imagecreatetruecolor($numWidth, $numHeight);
            }

            //update the image size details
            $this->updateNewDetails();

            //do the actual image resize
			imagecopyresampled($this->resResizedImage,       $this->resOriginalImage, 0, 0, 0, 0, $numWidth, $numHeight,
                             $this->arrOriginalDetails[0], $this->arrOriginalDetails[1]);
			if($this->arrOriginalDetails['mime'] == 'image/gif')
			{
				imagetruecolortopalette($this->resResizedImage, true, 256);
				imageinterlace($this->resResizedImage);
			}

            //saves the image
            $this->saveImage();
        }
    }

    /*
    *
    *    @Method:        _imageProtect
    *    @Parameters:    2
    *    @Param-1:        numWidth - Number - The width of the image in pixels
    *    @Param-2:        numHeight - Number - The height of the image in pixes
    *    @Description:    Checks to see if we should allow the resize to take place or not depending on the size the image will be resized to
    *
    */
    function _imageProtect($numWidth, $numHeight)
    {
        if ( $this->boolProtect
            AND ($numWidth > $this->arrOriginalDetails[0] OR $numHeight > $this->arrOriginalDetails[1]) )
        {
            return 0;
        }

        return 1;
    }

    /*
    *
    *    @Method:        resizeToWidth
    *    @Parameters:    1
    *    @Param-1:        numWidth - Number - The width to resize to in pixels
    *    @Description:    Works out the height value to go with the width value passed, then calls the resize method.
    *
    */
    function resizeToWidth($numWidth)
    {
        $numHeight=(int)(($numWidth * $this->arrOriginalDetails[1]) / $this->arrOriginalDetails[0]);
        $this->smart_resize_image($this->strOriginalImagePath, $numWidth, $numHeight, false, $this->strResizedImagePath, false);

    }

    /*
    *
    *    @Method:        resizeToHeight
    *    @Parameters:    1
    *    @Param-1:        numHeight - Number - The height to resize to in pixels
    *    @Description:    Works out the width value to go with the height value passed, then calls the resize method.
    *
    */
    function resizeToHeight($numHeight)
    {
        $numWidth=(int)(($numHeight * $this->arrOriginalDetails[0]) / $this->arrOriginalDetails[1]);
        $this->smart_resize_image($this->strOriginalImagePath, $numWidth, $numHeight, false, $this->strResizedImagePath, false);
    }

    /*
    *
    *    @Method:        resizeToPercent
    *    @Parameters:    1
    *    @Param-1:        numPercent - Number - The percentage you want to resize to
    *    @Description:    Works out the width and height value to go with the percent value passed, then calls the resize method.
    *
    */
    function resizeToPercent($numPercent)
    {
        $numWidth =(int)(($this->arrOriginalDetails[0] / 100) * $numPercent);
        $numHeight=(int)(($this->arrOriginalDetails[1] / 100) * $numPercent);
        $this->smart_resize_image($this->strOriginalImagePath, $numWidth, $numHeight, false, $this->strResizedImagePath, false);

    }

    /*
    *
    *    @Method:        resizeToCustom
    *    @Parameters:    1
    *    @Param-1:        size - Number/Array - Either a number of array of numbers for the width and height in pixels
    *    @Description:    Checks to see if array was passed and calls the resize method with the correct values.
    *
    */
    function resizeToCustom($maxSize,$fix=false)
    {
        $oldsize = $this->arrOriginalDetails;
       	if(!$fix)
        	$size = $this->initThumb($oldsize[0],$oldsize[1],$maxSize[0],$maxSize[1],true,true);
		else
		{
			$size = $maxSize;

        }
        if ( !is_array($size) )
        {
            $this->smart_resize_image($this->strOriginalImagePath, (int)$size, (int)$size, false, $this->strResizedImagePath, false);
        }
        else
        {
            $this->smart_resize_image($this->strOriginalImagePath, (int)$size[0], (int)$size[1], false, $this->strResizedImagePath, false);
        }
    }

    function initThumb($sourceWidth, $sourceHeight, $maxWidth, $maxHeight, $scale, $inflate)
    {
        if ( $maxWidth > 0 )
        {
            $ratioWidth=$maxWidth / $sourceWidth;
        }

        if ( $maxHeight > 0 )
        {
            $ratioHeight=$maxHeight / $sourceHeight;
        }

        if ($scale)
        {
            if ( $maxWidth && $maxHeight )
            {
                $ratio=($ratioWidth < $ratioHeight) ? $ratioWidth : $ratioHeight;
            }

            if ( $maxWidth xor $maxHeight )
            {
                $ratio=(isset($ratioWidth)) ? $ratioWidth : $ratioHeight;
            }

            if ( (!$maxWidth && !$maxHeight) || (!$inflate && $ratio > 1) )
            {
                $ratio=1;
            }

            $thumbWidth =floor($ratio * $sourceWidth);
            $thumbHeight=ceil($ratio * $sourceHeight);
        }
        else
        {
            if ( !isset($ratioWidth) || (!$inflate && $ratioWidth > 1) )
            {
                $ratioWidth=1;
            }

            if ( !isset($ratioHeight) || (!$inflate && $ratioHeight > 1) )
            {
                $ratioHeight=1;
            }

            $thumbWidth =floor($ratioWidth * $sourceWidth);
            $thumbHeight=ceil($ratioHeight * $sourceHeight);
        }
        return array($thumbWidth,$thumbHeight) ;
    }

  function smart_resize_image( $file, $width = 0, $height = 0, $proportional = false, $output = 'file', $delete_original = true, $use_linux_commands = false )
  {
    if ( $height <= 0 && $width <= 0 ) {
      return false;
    }

    $info = getimagesize($file);
    $image = '';

    $final_width = 0;
    $final_height = 0;
    list($width_old, $height_old) = $info;

    if ($proportional) {
      if ($width == 0) $factor = $height/$height_old;
      elseif ($height == 0) $factor = $width/$width_old;
      else $factor = min ( $width / $width_old, $height / $height_old);

      $final_width = round ($width_old * $factor);
      $final_height = round ($height_old * $factor);

    }
    else {
      $final_width = ( $width <= 0 ) ? $width_old : $width;
      $final_height = ( $height <= 0 ) ? $height_old : $height;
    }

    switch ( $info[2] ) {
      case IMAGETYPE_GIF:
        $image = imagecreatefromgif($file);
      break;
      case IMAGETYPE_JPEG:
        $image = imagecreatefromjpeg($file);
      break;
      case IMAGETYPE_PNG:
        $image = imagecreatefrompng($file);
      break;
      default:
        return false;
    }

    $image_resized = imagecreatetruecolor( $final_width, $final_height );

    if ( ($info[2] == IMAGETYPE_GIF) || ($info[2] == IMAGETYPE_PNG) ) {
      $trnprt_indx = imagecolortransparent($image);

      // If we have a specific transparent color
      if ($trnprt_indx >= 0) {

        // Get the original image's transparent color's RGB values
        $trnprt_color    = imagecolorsforindex($image, $trnprt_indx);

        // Allocate the same color in the new image resource
        $trnprt_indx    = imagecolorallocate($image_resized, $trnprt_color['red'], $trnprt_color['green'], $trnprt_color['blue']);

        // Completely fill the background of the new image with allocated color.
        imagefill($image_resized, 0, 0, $trnprt_indx);

        // Set the background color for new image to transparent
        imagecolortransparent($image_resized, $trnprt_indx);


      }
      // Always make a transparent background color for PNGs that don't have one allocated already
      elseif ($info[2] == IMAGETYPE_PNG) {

        // Turn off transparency blending (temporarily)
        imagealphablending($image_resized, false);

        // Create a new transparent color for image
        $color = imagecolorallocatealpha($image_resized, 0, 0, 0, 127);

        // Completely fill the background of the new image with allocated color.
        imagefill($image_resized, 0, 0, $color);

        // Restore transparency blending
        imagesavealpha($image_resized, true);
      }
    }

    imagecopyresampled($image_resized, $image, 0, 0, 0, 0, $final_width, $final_height, $width_old, $height_old);

    if ( $delete_original ) {
      if ( $use_linux_commands )
        exec('rm '.$file);
      else
        @unlink($file);
    }

    switch ( strtolower($output) ) {
      case 'browser':
        $mime = image_type_to_mime_type($info[2]);
        header("Content-type: $mime");
        $output = NULL;
      break;
      case 'file':
        $output = $file;
      break;
      case 'return':
        return $image_resized;
      break;
      default:
      break;
    }

    switch ( $info[2] ) {
      case IMAGETYPE_GIF:
        imagegif($image_resized, $output);
      break;
      case IMAGETYPE_JPEG:
        imagejpeg($image_resized, $output);
      break;
      case IMAGETYPE_PNG:
        imagepng($image_resized, $output);
      break;
      default:
        return false;
    }

    return true;
  }
}
?>