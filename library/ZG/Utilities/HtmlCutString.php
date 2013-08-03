<?php
namespace ZG\Utilities;

class HtmlCutString
{
    function __construct($string, $limit){
    // create dom element using the html string
    $this->tempDiv = new DomDocument;
    $this->tempDiv->loadXML('<div>'.$string.'</div>');
    // keep the characters count till now
    $this->charCount = 0;
    $this->encoding = 'UTF-8';
    $this->moreStr = "...";
    // character limit need to check
    $this->limit = $limit - strlen($this->moreStr);
    $this->makecut = FALSE;
  }
  function cut(){
    // create empty document to store new html
    $this->newDiv = new DomDocument;
    // cut the string by parsing through each element
    $this->searchEnd($this->tempDiv->documentElement,$this->newDiv);
    $newhtml = $this->newDiv->saveHTML();
    //if ($this->makecut) $newhtml .= $this->moreStr;
    return $newhtml;
  }

  function deleteChildren($node) {
    while (isset($node->firstChild)) {
      $this->deleteChildren($node->firstChild);
      $node->removeChild($node->firstChild);
    }
  }
  function searchEnd($parseDiv, $newParent){
    foreach($parseDiv->childNodes as $ele){
	// not text node
	if($ele->nodeType != 3){
	  $newEle = $this->newDiv->importNode($ele,true);
	  if(count($ele->childNodes) === 0){
	    $newParent->appendChild($newEle);
	    continue;
	  }
	  $this->deleteChildren($newEle);
	  $newParent->appendChild($newEle);
	    $res = $this->searchEnd($ele,$newEle);
	    if($res)
		return $res;
	    else{
		continue;
	    }
	}

	// the limit of the char count reached
	if(mb_strlen($ele->nodeValue,$this->encoding) + $this->charCount > $this->limit){
	  $newEle = $this->newDiv->importNode($ele);
	    //$newEle->nodeValue = substr($newEle->nodeValue,0, $this->limit - $this->charCount);
	    $cutstr = mb_substr(html_entity_decode($newEle->nodeValue, ENT_QUOTES), 0, $this->limit - $this->charCount, $this->encoding);
	    $newEle->nodeValue = $cutstr . $this->moreStr;
	    $newParent->appendChild($newEle);
	    $this->makecut = TRUE;
	    return true;
	}
	$newEle = $this->newDiv->importNode($ele);
	$newParent->appendChild($newEle);
	if ($this->makecut)
	    $this->charCount += mb_strlen($cutstr,$this->encoding);
	else
	    $this->charCount += mb_strlen($newEle->nodeValue,$this->encoding);
    }
    return false;
  }
}