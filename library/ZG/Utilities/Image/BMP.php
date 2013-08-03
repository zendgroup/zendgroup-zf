<?php
/**
 * ZEND GROUP
 *
 * @name        BMP.php
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

namespace ZG\Utilities\Image;

class BMP
{
	public static function imagebmp(&$img, $filename = false)
	{
		return self::imagebmp($img, $filename);
	}

	public static function imagecreatefrombmp($filename)
	{
		return self::imagecreatefrombmp($filename);
	}

	public static function imagebmp(&$img, $filename = false)
	{
		$wid = imagesx($img);
		$hei = imagesy($img);
		$wid_pad = str_pad('', $wid % 4, "\0");

		$size = 54 + ($wid + $wid_pad) * $hei;

		//prepare & save header
		$header['identifier']		= 'BM';
		$header['file_size']		= self::dword($size);
		$header['reserved']			= self::dword(0);
		$header['bitmap_data']		= self::dword(54);
		$header['header_size']		= self::dword(40);
		$header['width']			= self::dword($wid);
		$header['height']			= self::dword($hei);
		$header['planes']			= self::word(1);
		$header['bits_per_pixel']	= self::word(24);
		$header['compression']		= self::dword(0);
		$header['data_size']		= self::dword(0);
		$header['h_resolution']		= self::dword(0);
		$header['v_resolution']		= self::dword(0);
		$header['colors']			= self::dword(0);
		$header['important_colors']	= self::dword(0);

		if ($filename)
		{
			$f = fopen($filename, "wb");
			foreach ($header AS $h)
			{
				fwrite($f, $h);
			}

			//save pixels
			for ($y=$hei-1; $y>=0; $y--)
			{
				for ($x=0; $x<$wid; $x++)
				{
					$rgb = imagecolorat($img, $x, $y);
					fwrite($f, self::byte3($rgb));
				}
				fwrite($f, $wid_pad);
			}
			fclose($f);
		}
		else
		{
			foreach ($header AS $h)
			{
				echo $h;
			}

			//save pixels
			for ($y=$hei-1; $y>=0; $y--)
			{
				for ($x=0; $x<$wid; $x++)
				{
					$rgb = imagecolorat($img, $x, $y);
					echo self::byte3($rgb);
				}
				echo $wid_pad;
			}
		}
	}

	public static function imagecreatefrombmp($filename)
	{
		$f = fopen($filename, "rb");

		//read header
		$header = fread($f, 54);
		$header = unpack(	'c2identifier/Vfile_size/Vreserved/Vbitmap_data/Vheader_size/' .
				'Vwidth/Vheight/vplanes/vbits_per_pixel/Vcompression/Vdata_size/'.
				'Vh_resolution/Vv_resolution/Vcolors/Vimportant_colors', $header);

		if ($header['identifier1'] != 66 or $header['identifier2'] != 77)
		{
			die('Not a valid bmp file');
		}

		if ($header['bits_per_pixel'] != 24)
		{
			die('Only 24bit BMP images are supported');
		}

		$wid2 = ceil((3*$header['width']) / 4) * 4;

		$wid = $header['width'];
		$hei = $header['height'];

		$img = imagecreatetruecolor($header['width'], $header['height']);

		//read pixels
		for ($y=$hei-1; $y>=0; $y--)
		{
		$row = fread($f, $wid2);
		$pixels = str_split($row, 3);
		for ($x=0; $x<$wid; $x++)
		{
		imagesetpixel($img, $x, $y, self::dwordize($pixels[$x]));
		}
		}
		fclose($f);

		return $img;
	}

	public static function dwordize($str)
	{
		$a = ord($str[0]);
		$b = ord($str[1]);
		$c = ord($str[2]);
		return $c*256*256 + $b*256 + $a;
	}

	public static function byte3($n)
	{
		return chr($n & 255) . chr(($n >> 8) & 255) . chr(($n >> 16) & 255);
	}

	public static function dword($n)
	{
		return pack("V", $n);
	}

	public static function word($n)
	{
		return pack("v", $n);
	}
}

