<?php


namespace ZG\Services\Google\Contrib\Analytics;

use ZG\Services\Google\Model;

class DailyUploadAppend extends Model {
  public $accountId;
  public $appendNumber;
  public $customDataSourceId;
  public $date;
  public $kind;
  public $nextAppendLink;
  public $webPropertyId;
  public function setAccountId( $accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setAppendNumber( $appendNumber) {
    $this->appendNumber = $appendNumber;
  }
  public function getAppendNumber() {
    return $this->appendNumber;
  }
  public function setCustomDataSourceId( $customDataSourceId) {
    $this->customDataSourceId = $customDataSourceId;
  }
  public function getCustomDataSourceId() {
    return $this->customDataSourceId;
  }
  public function setDate( $date) {
    $this->date = $date;
  }
  public function getDate() {
    return $this->date;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextAppendLink( $nextAppendLink) {
    $this->nextAppendLink = $nextAppendLink;
  }
  public function getNextAppendLink() {
    return $this->nextAppendLink;
  }
  public function setWebPropertyId( $webPropertyId) {
    $this->webPropertyId = $webPropertyId;
  }
  public function getWebPropertyId() {
    return $this->webPropertyId;
  }
}
