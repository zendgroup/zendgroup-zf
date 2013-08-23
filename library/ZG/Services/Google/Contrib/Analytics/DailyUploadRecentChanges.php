<?php

namespace ZG\Services\Google\Contrib\Analytics;

use ZG\Services\Google\Model;

class DailyUploadRecentChanges extends Model {
  public $change;
  public $time;
  public function setChange( $change) {
    $this->change = $change;
  }
  public function getChange() {
    return $this->change;
  }
  public function setTime( $time) {
    $this->time = $time;
  }
  public function getTime() {
    return $this->time;
  }
}