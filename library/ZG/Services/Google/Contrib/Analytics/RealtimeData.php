<?php


namespace ZG\Services\Google\Contrib\Analytics;

use ZG\Services\Google\Model;
use ZG\Services\Google\Contrib\RealtimeDataColumnHeaders;
use ZG\Services\Google\Contrib\RealtimeDataProfileInfo;
use ZG\Services\Google\Contrib\RealtimeDataQuery;

class RealtimeData extends Model {
  protected $__columnHeadersType = 'RealtimeDataColumnHeaders';
  protected $__columnHeadersDataType = 'array';
  public $columnHeaders;
  public $id;
  public $kind;
  protected $__profileInfoType = 'RealtimeDataProfileInfo';
  protected $__profileInfoDataType = '';
  public $profileInfo;
  protected $__queryType = 'RealtimeDataQuery';
  protected $__queryDataType = '';
  public $query;
  public $rows;
  public $selfLink;
  public $totalResults;
  public $totalsForAllResults;
  public function setColumnHeaders(/* array(RealtimeDataColumnHeaders) */ $columnHeaders) {
    $this->assertIsArray($columnHeaders, 'RealtimeDataColumnHeaders', __METHOD__);
    $this->columnHeaders = $columnHeaders;
  }
  public function getColumnHeaders() {
    return $this->columnHeaders;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setProfileInfo(RealtimeDataProfileInfo $profileInfo) {
    $this->profileInfo = $profileInfo;
  }
  public function getProfileInfo() {
    return $this->profileInfo;
  }
  public function setQuery(RealtimeDataQuery $query) {
    $this->query = $query;
  }
  public function getQuery() {
    return $this->query;
  }
  public function setRows(/* array(Google_string) */ $rows) {
    $this->assertIsArray($rows, 'Google_string', __METHOD__);
    $this->rows = $rows;
  }
  public function getRows() {
    return $this->rows;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setTotalResults( $totalResults) {
    $this->totalResults = $totalResults;
  }
  public function getTotalResults() {
    return $this->totalResults;
  }
  public function setTotalsForAllResults( $totalsForAllResults) {
    $this->totalsForAllResults = $totalsForAllResults;
  }
  public function getTotalsForAllResults() {
    return $this->totalsForAllResults;
  }
}

