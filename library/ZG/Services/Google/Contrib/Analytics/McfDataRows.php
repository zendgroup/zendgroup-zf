<?php

namespace ZG\Services\Google\Contrib\Analytics;

use ZG\Services\Google\Model;
use ZG\Services\Google\Contrib\Analytics\McfDataRowsConversionPathValue;

class McfDataRows extends Model {
  protected $__conversionPathValueType = 'McfDataRowsConversionPathValue';
  protected $__conversionPathValueDataType = 'array';
  public $conversionPathValue;
  public $primitiveValue;
  public function setConversionPathValue(/* array(McfDataRowsConversionPathValue) */ $conversionPathValue) {
    $this->assertIsArray($conversionPathValue, 'McfDataRowsConversionPathValue', __METHOD__);
    $this->conversionPathValue = $conversionPathValue;
  }
  public function getConversionPathValue() {
    return $this->conversionPathValue;
  }
  public function setPrimitiveValue( $primitiveValue) {
    $this->primitiveValue = $primitiveValue;
  }
  public function getPrimitiveValue() {
    return $this->primitiveValue;
  }
}
