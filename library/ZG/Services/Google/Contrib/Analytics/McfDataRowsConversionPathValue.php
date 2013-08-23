<?php

namespace ZG\Services\Google\Contrib\Analytics;

use ZG\Services\Google\Model;

class McfDataRowsConversionPathValue extends Model {
  public $interactionType;
  public $nodeValue;
  public function setInteractionType( $interactionType) {
    $this->interactionType = $interactionType;
  }
  public function getInteractionType() {
    return $this->interactionType;
  }
  public function setNodeValue( $nodeValue) {
    $this->nodeValue = $nodeValue;
  }
  public function getNodeValue() {
    return $this->nodeValue;
  }
}