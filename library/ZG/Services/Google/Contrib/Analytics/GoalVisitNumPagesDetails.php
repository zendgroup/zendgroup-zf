<?php

namespace ZG\Services\Google\Contrib\Analytics;

use ZG\Services\Google\Model;

class GoalVisitNumPagesDetails extends Model {
  public $comparisonType;
  public $comparisonValue;
  public function setComparisonType( $comparisonType) {
    $this->comparisonType = $comparisonType;
  }
  public function getComparisonType() {
    return $this->comparisonType;
  }
  public function setComparisonValue( $comparisonValue) {
    $this->comparisonValue = $comparisonValue;
  }
  public function getComparisonValue() {
    return $this->comparisonValue;
  }
}
