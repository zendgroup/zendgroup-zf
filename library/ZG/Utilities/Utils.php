<?php
namespace ZG\Utilities;
class Utils
{

    public function alias($text)
    {
        $marTViet = array('\\', '/', '.', ' ', "à", "á", "ạ", "ả", "ã", "â", "ầ", "ấ", "ậ", "ẩ", "ẫ",
            "ă", "ằ", "ắ", "ặ", "ẳ", "ẵ", "è", "é", "ẹ", "ẻ", "ẽ", "ê", "ề", "ế", "ệ", "ể", "ễ", "ì",
            "í", "ị", "ỉ", "ĩ", "ò", "ó", "ọ", "ỏ", "õ", "ô", "ồ", "ố", "ộ", "ổ", "ỗ", "ơ", "ờ", "ớ",
            "ợ", "ở", "ỡ", "ù", "ú", "ụ", "ủ", "ũ", "ư", "ừ", "ứ", "ự", "ử", "ữ", "ỳ", "ý", "ỵ", "ỷ",
            "ỹ", "đ", "À", "Á", "Ạ", "Ả", "Ã", "Â", "Ầ", "Ấ", "Ậ", "Ẩ", "Ẫ", "Ă", "Ằ", "Ắ", "Ặ", "Ẳ",
            "Ẵ", "È", "É", "Ẹ", "Ẻ", "Ẽ", "Ê", "Ề", "Ế", "Ệ", "Ể", "Ễ", "Ì", "Í", "Ị", "Ỉ", "Ĩ", "Ò",
            "Ó", "Ọ", "Ỏ", "Õ", "Ô", "Ồ", "Ố", "Ộ", "Ổ", "Ỗ", "Ơ", "Ờ", "Ớ", "Ợ", "Ở", "Ỡ", "Ù", "Ú",
            "Ụ", "Ủ", "Ũ", "Ư", "Ừ", "Ứ", "Ự", "Ử", "Ữ", "Ỳ", "Ý", "Ỵ", "Ỷ", "Ỹ", "Đ", "ç");
        $marKoDau = array('-', '-', '', '-', "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a",
            "a", "a", "a", "a", "a", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "i", "i",
            "i", "i", "i", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o",
            "o", "o", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "y", "y", "y", "y", "y",
            "d", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A",
            "E", "E", "E", "E", "E", "E", "E", "E", "E", "E", "E", "I", "I", "I", "I", "I", "O", "O",
            "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "U", "U", "U",
            "U", "U", "U", "U", "U", "U", "U", "U", "Y", "Y", "Y", "Y", "Y", "D", "c");
        $alias = str_replace($marTViet, $marKoDau, trim($text));
        return $alias;
    }

    public function removeUnicode($text)
    {
        $marTViet = array(
            "à", "á", "ạ", "ả", "ã", "â", "ầ", "ấ", "ậ", "ẩ", "ẫ",
            "ă", "ằ", "ắ", "ặ", "ẳ", "ẵ", "è", "é", "ẹ", "ẻ", "ẽ", "ê", "ề", "ế", "ệ", "ể", "ễ", "ì",
            "í", "ị", "ỉ", "ĩ", "ò", "ó", "ọ", "ỏ", "õ", "ô", "ồ", "ố", "ộ", "ổ", "ỗ", "ơ", "ờ", "ớ",
            "ợ", "ở", "ỡ", "ù", "ú", "ụ", "ủ", "ũ", "ư", "ừ", "ứ", "ự", "ử", "ữ", "ỳ", "ý", "ỵ", "ỷ",
            "ỹ", "đ", "À", "Á", "Ạ", "Ả", "Ã", "Â", "Ầ", "Ấ", "Ậ", "Ẩ", "Ẫ", "Ă", "Ằ", "Ắ", "Ặ", "Ẳ",
            "Ẵ", "È", "É", "Ẹ", "Ẻ", "Ẽ", "Ê", "Ề", "Ế", "Ệ", "Ể", "Ễ", "Ì", "Í", "Ị", "Ỉ", "Ĩ", "Ò",
            "Ó", "Ọ", "Ỏ", "Õ", "Ô", "Ồ", "Ố", "Ộ", "Ổ", "Ỗ", "Ơ", "Ờ", "Ớ", "Ợ", "Ở", "Ỡ", "Ù", "Ú",
            "Ụ", "Ủ", "Ũ", "Ư", "Ừ", "Ứ", "Ự", "Ử", "Ữ", "Ỳ", "Ý", "Ỵ", "Ỷ", "Ỹ", "Đ", "�", "ç");
        $marKoDau = array(
            "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a",
            "a", "a", "a", "a", "a", "a", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "i",
            "i", "i", "i", "i", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o",
            "o", "o", "o", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "y", "y", "y", "y",
            "y", "d", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A",
            "A", "E", "E", "E", "E", "E", "E", "E", "E", "E", "E", "E", "I", "I", "I", "I", "I", "O",
            "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "U", "U",
            "U", "U", "U", "U", "U", "U", "U", "U", "U", "Y", "Y", "Y", "Y", "Y", "D", "E", "c");
        $alias = str_replace($marTViet, $marKoDau, trim($text));
        return $alias;
    }

    /**
     *
     * filter search string
     * @param string $value
     */
    public function filter($value)
    {
    	/* a à ả ã á ạ ă ằ ẳ ẵ ắ ặ â ầ ẩ ẫ ấ ậ b c d đ e è ẻ ẽ é ẹ ê ề ể ễ ế ệ
    	 f g h i ì ỉ ĩ í ị j k l m n o ò ỏ õ ó ọ ô ồ ổ ỗ ố ộ ơ ờ ở ỡ ớ ợ
    	p q r s t u ù ủ ũ ú ụ ư ừ ử ữ ứ ự v w x y ỳ ỷ ỹ ý ỵ z */
    	$charaterA = '#(à|ả|ã|á|ạ|ă|ằ|ẳ|ẵ|ắ|ặ|â|ầ|ẩ|ẫ|ấ|ậ)#imsU';
    	$repleceCharaterA = 'a';
    	$value = preg_replace($charaterA, $repleceCharaterA, $value);
    	$charaterD = '#(đ)#imsU';
    	$replaceCharaterD = 'd';
    	$value = preg_replace($charaterD, $replaceCharaterD, $value);
    	$charaterD = '#(è|ẻ|ẽ|é|ẹ|ê|ề|ể|ễ|ế|ệ)#imsU';
    	$replaceCharaterD = 'e';
    	$value = preg_replace($charaterD, $replaceCharaterD, $value);
    	$charaterI = '#(ì|ỉ|ĩ|í|ị)#imsU';
    	$replaceCharaterI = 'i';
    	$value = preg_replace($charaterI, $replaceCharaterI, $value);
    	$charaterO = '#(ò|ỏ|õ|ó|ọ|ô|ồ|ổ|ỗ|ố|ộ|ơ|ờ|ở|ỡ|ớ|ợ)#imsU';
    	$replaceCharaterO = 'o';
    	$value = preg_replace($charaterO, $replaceCharaterO, $value);
    	$charaterU = '#(ù|ủ|ũ|ú|ụ|ư|ừ|ử|ữ|ứ|ự)#imsU';
    	$replaceCharaterU = 'u';
    	$value = preg_replace($charaterU, $replaceCharaterU, $value);
    	$charaterY = '#(ỳ|ỷ|ỹ|ý)#imsU';
    	$replaceCharaterY = 'y';
    	$value = preg_replace($charaterY, $replaceCharaterY, $value);
    	return $value;
    }

    function formatStringForURL($str)
    {
    	if (!empty($str)) {
    		$item = trim($str);
    		//$title = preg_replace('~[^a-zA-Z0-9 ]+~', "", $title);
    		$GLOBALS['normalizeChars'] = array(
    				'Š' => 'S', 'š' => 's', 'Ð' => 'Dj', 'Ž' => 'Z', 'ž' => 'z', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A',
    				'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I',
    				'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U',
    				'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a',
    				'å' => 'a', 'æ' => 'a', 'ç' => 'c', 'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i',
    				'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ø' => 'o', 'ù' => 'u',
    				'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'ý' => 'y', 'þ' => 'b', 'ÿ' => 'y', 'ƒ' => 'f');
    		//$string = strtr($string, $GLOBALS['normalizeChars']);
    		$item = strtr($item, $GLOBALS['normalizeChars']);
    		$item = preg_replace('~[^a-zA-Z0-9 ]+~', "", $item);
    		$item = strip_tags($item);
    		//$title = preg_replace("/^[a-zA-Z\p{Cyrillic}0-9\s\-]+$/u", "", $title);
    		//preg_match, "ABC abc 1234 ??? ???");
    		/* $title = str_replace("'", '', $item['title'] );
    		 $title = str_replace('"', '', $item['title'] );
    		$title = trim($title ); */
    		$item = strtolower(str_replace(' ', '-', $item));
    		return $item;
    	} else {
    		return "";
    	}
    }

    function stringURLSafe($string)
    {
    	//remove any '-' from the string they will be used as concatonater
    	$str = str_replace('-', ' ', $string);
    	//		$lang =& JFactory::getLanguage();
    	//		$str = $lang->transliterate($str);
    	// remove any duplicate whitespace, and ensure all characters are alphanumeric
    	$str = preg_replace(array('/\s+/', '/[^A-Za-z0-9\-]/'), array('-', ''), $str);
    	// lowercase and trim
    	$str = trim(strtolower($str));
    	return $str;
    }

    /**
     *
     * decode Utf-8 Str
     * @param unknown_type $input
     */
    public function decodeUniStr($input)
    {
    	$con = utf8_decode('ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ');
    	if (isset($input))
    		return strtr(utf8_decode($input), $con, 'SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy');
    	else
    		return "";
    }

    function transliterate($string)
    {
    	$string = htmlentities(utf8_decode($string));
    	$string = preg_replace(array('/&szlig;/', '/&(..)lig;/', '/&([aouAOU])uml;/', '/&(.)[^;]*;/'), array('ss', "$1", "$1" . 'e', "$1"), $string);
    	return $string;
    }

    /**
     *
     * sort Tag Order by ##
     * @param array $tags
     * @param string $compare
     */
    public function sortTag($tags, $compare)
    {
    	$aa = "";
    	$temp = "";
    	$temp1 = "";
    	if (is_array($tags) && count($tags) > 0) {
    		foreach ($tags as $keytag => $tag) {
    			if (!empty($tag[$compare]) && substr($tag[$compare], 0, 2) == '##') {
    				$temp[$keytag] = $tag;
    			} else
    				$temp1[$keytag] = $tag;
    		}
    		if (is_array($temp)) {
    			foreach ($temp as $key => $tag) {
    				$aa[$key] = $tag;
    			}
    		}
    		if (is_array($temp1)) {
    			foreach ($temp1 as $key => $tag) {
    				$aa[$key] = $tag;
    			}
    		}
    	}
    	return $aa;
    }


    /**
     * execute command with curl
     *
     * @param string  $url
     * @param string  $method Method of curl (ex: GET, POST, PUT)
     * @param string  $params Params of url request (ex: a=1&b=2 or array('a' => 1, 'b' => 2))
     * @param boolean $json   True will decode json to array
     *
     * @return object
     */
    public function execCurl($url, $method, $params, $json = false)
    {
    	if ($url && $method) {
    		if (function_exists('curl_init')) {
    			$params = is_array($params) ? http_build_query($params) : $params;
    			if (strtoupper($method) == 'GET') {
    				$url .=!empty($params) ? ('&' . $params) : '';
    			}
    			$ch = curl_init(urldecode($url));
    			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    			curl_setopt($ch, CURLOPT_HEADER, 0);

    			switch (strtoupper($method)) {
    				case 'POST':
    					curl_setopt($ch, CURLOPT_POST, 1);
    					break;
    				case 'DELETE':
    					curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
    					break;
    				case 'PUT':
    					curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-HTTP-Method-Override: PUT'));
    					break;
    				default:
    					curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    					break;
    			}

    			if (!empty($params) && strtoupper($method) != 'GET') {
    				curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    			}
    			$result = curl_exec($ch); // run the whole process

    			curl_close($ch);

    			if ($json) {
    				return json_decode($result, true);
    			} else {
    				return $result;
    			}
    		} else {
    			return false;
    		}
    	}
    }

    public function execCurlPicture($url, $method, $params)
    {
    	if ($url && $method) {
    	    $ch = curl_init($url);
    		if ($ch) {// initialize curl handle
    			curl_setopt($ch, CURLOPT_POST, count($params));
    			curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    			$result = curl_exec($ch); // run the whole process
    			curl_close($ch);
    			return $result;
    		} else {
    			return false;
    		}
    	}
    }
    /**
     * Utility function to sort an array of objects on a given field
     *
     * @static
     * @param array $arr  An array of objects
     * @param string $k   The key to sort on
     * @param int  $direction Direction to sort in [1 = Ascending] [-1 = Descending]
     * @return array The sorted array of objects
     * @since 1.5
     */
    public function sortObjects(&$a, $k, $direction = 1)
    {
        $GLOBALS['JAH_so'] = array('key' => $k, 'direction' => $direction);
        usort($a, array('JArrayHelper', '_sortObjects'));
        unset($GLOBALS['JAH_so']);
        return $a;
    }

    /**
     * Private callback function for sorting an array of objects on a key
     *
     * @static
     * @param array $a An array of objects
     * @param array $b An array of objects
     * @return int  Comparison status
     * @since 1.5
     * @see  JArrayHelper::sortObjects()
     */
    private function _sortObjects(&$a, &$b)
    {
        $params = $GLOBALS['JAH_so'];
        if ($a->$params['key'] > $b->$params['key']) {
            return $params['direction'];
        }
        if ($a->$params['key'] < $b->$params['key']) {
            return - 1 * $params['direction'];
        }
        return 0;
    }

    /**
     * Gets the extension of a file name
     *
     * @param string $file The file name
     * @return string The file extension
     */
    public function getext($file)
    {
        $dot = strrpos($file, '.') + 1;
        return substr($file, $dot);
    }

    /*
     * slice string follow UTF 8 format
     *
     * return Array()
     * */

    public static function mbStringToArray($string, $real_size)
    {
        $string = htmlspecialchars_decode($string, ENT_QUOTES);
        $length = 0;
        $count = 0;
        for ($i = 0; $i < mb_strlen($string, 'UTF-8') && $i < $real_size; $i++) {
            $char = mb_substr($string, $i, 1, 'UTF-8');
            //with chars using 2bytes
            if (mb_strwidth($char, 'UTF-8') == 2) {
                $length += 2.5;
                $count++;
            } else {
                $asciinum = ord($char);
                $majCharArray = array(128, 142, 143, 144, 146, 153, 154, 157, 158, 165, 168, 169, 170, 171,
                    172, 219, 220, 223, 225, 226, 228, 229, 230, 232, 233, 234, 236, 239, 244, 245, 247);
                $wCharArray = array(176, 177, 178);
                if (($char == 'W') || ($char == 'w') || ($char == 'm') || in_array($asciinum, $wCharArray)) {
                    $length += 2;
                    $count++;
                } elseif (in_array($char, array('f', 'j', 'i', 'I', 'l', '|', ':', ';', '.', ',', '\''))) {
                    $length += 0.5;
                    $count += 2;
                } elseif ((($asciinum >= 65) && ($asciinum <= 90)) || in_array($asciinum, $majCharArray)) {
                    $length += 1.5;
                    $count++;
                } else {
                    $length += 1;
                    $count++;
                }
            }
            if ($length > $real_size) {
                break;
            }
        }
        if (mb_strlen($string, 'UTF-8') > $count) {
            $retour = mb_substr(html_entity_decode($string, ENT_QUOTES), 0, $count, 'UTF-8');
            $the_rest = mb_substr(html_entity_decode($string, ENT_QUOTES), $count, mb_strlen($string, 'UTF-8'), 'UTF-8');
        } else {
            $retour = $string;
            $the_rest = '';
        }
        return array('retour' => $retour, 'the_rest' => $the_rest);
    }

    /*
     * chunk string follow UTF 8 format
     *
     * return string
     * */

    public static function mb_chunk_split($str, $len, $glue)
    {
        $string = '';
        do {
            $substring = self::mbStringToArray($str, $len);
            $string .= htmlspecialchars(html_entity_decode($substring['retour'], ENT_QUOTES)) . $glue;
            $str = $substring['the_rest'];
        } while (!empty($substring['the_rest']));
        return $string;
    }


    /*
     * slice string follow UTF 8 format
     *
     * return Array()
     * */

    public static function mbStringToArray($string, $real_size)
    {
    	$string = htmlspecialchars_decode($string, ENT_QUOTES);
    	$length = 0;
    	$count = 0;
    	for ($i = 0; $i < mb_strlen($string, 'UTF-8') && $i < $real_size; $i++) {
    		$char = mb_substr($string, $i, 1, 'UTF-8');
    		//with chars using 2bytes
    		if (mb_strwidth($char, 'UTF-8') == 2) {
    			$length += 2.5;
    			$count++;
    		} else {
    			$asciinum = ord($char);
    			$majCharArray = array(128, 142, 143, 144, 146, 153, 154, 157, 158, 165, 168, 169, 170, 171,
    					172, 219, 220, 223, 225, 226, 228, 229, 230, 232, 233, 234, 236, 239, 244, 245, 247);
    			$wCharArray = array(176, 177, 178);
    			if (($char == 'W') || ($char == 'w') || ($char == 'm') || in_array($asciinum, $wCharArray)) {
    				$length += 2;
    				$count++;
    			} elseif (in_array($char, array('f', 'j', 'i', 'I', 'l', '|', ':', ';', '.', ',', '\''))) {
    				$length += 0.5;
    				$count += 2;
    			} elseif ((($asciinum >= 65) && ($asciinum <= 90)) || in_array($asciinum, $majCharArray)) {
    				$length += 1.5;
    				$count++;
    			} else {
    				$length += 1;
    				$count++;
    			}
    		}
    		if ($length > $real_size) {
    			break;
    		}
    	}
    	if (mb_strlen($string, 'UTF-8') > $count) {
    		$retour = mb_substr(html_entity_decode($string, ENT_QUOTES), 0, $count, 'UTF-8');
    		$the_rest = mb_substr(html_entity_decode($string, ENT_QUOTES), $count, mb_strlen($string, 'UTF-8'), 'UTF-8');
    	} else {
    		$retour = $string;
    		$the_rest = '';
    	}
    	return array('retour' => $retour, 'the_rest' => $the_rest);
    }

    /*
     * split string or file name
     *
     * return string
     * */

    public static function ags_slice_string_mini($string, $size)
    {
        $string = htmlspecialchars_decode($string);
        $real_size = $size;
        if (strlen($string) > $size) {
            $retour = mb_substr(html_entity_decode($string, ENT_QUOTES), 0, $real_size, 'UTF-8') . '..';
        } else {
            $retour = html_entity_decode($string, ENT_QUOTES);
        }
        return htmlspecialchars(html_entity_decode($retour, ENT_QUOTES));
    }

    public static function mb_cut_string($string, $max_length)
    {
        if (strlen($string) > $max_length) {
            $string = htmlspecialchars_decode($string);
            $string = mb_substr(html_entity_decode($string, ENT_QUOTES), 0, $max_length, 'UTF-8');
            $pos = mb_strrpos($string, " ");
            if ($pos === false) {
                return mb_substr($string, 0, $max_length) . " ..";
            }
            return mb_substr($string, 0, $pos) . " ..";
        } else {
            return html_entity_decode($string, ENT_QUOTES);
        }
    }

    public static function removeEscape($term)
    {

        $result = $term;
        // \ escaping has to be first, otherwise escaped later once again
        $chars = array('\\', '+', '-', '&&', '||', '!', '(', ')', '{', '}', '[', ']', '^', '"', '~', '*', '?', ':');

        foreach ($chars as $char) {
            $result = str_replace($char, ' ', $result);
        }

        return $result;
    }

    /**
     * Get urlOptions for continent
     * @param type $arrContinents
     * @param type $continent
     * @param type $urlOptions
     * @return array
     */
    public function getUrlContinents($continent, $arrContinents = array(), $urlOptions = array(), $remove = true)
    {
        if ($remove) {
            if (($key = array_search($continent, $arrContinents)) !== false) {
                unset($arrContinents[$key]);
            }
        }
        $arrContinents = array_values($arrContinents);
        if (count($arrContinents) > 0) {
            $urlOptions['continents'] = urlencode(json_encode($arrContinents));
        } else {
            $urlOptions['continents'] = '';
        }

        return $urlOptions;
    }

    /**
     * Callback of usort to sort by name
     * @param type $a
     * @param type $b
     * @return type
     */
    function sortByName($a, $b)
    {
        $aName = strtoupper($a['name']);
        $bName = strtoupper($b['name']);

        return ($aName > $bName) ? 1 : (($aName < $bName) ? -1 : 0);
    }


    /**
     * Get current url
     */
    static function getCurrentURl()
    {
    	$pageURL = 'http';
    	if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
    		$pageURL .= "s";
    	}
    	$pageURL .= "://";
    	if ($_SERVER["SERVER_PORT"] != "80") {
    		$pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    	} else {
    		$pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    	}

    	return $pageURL;
    }
}

?>