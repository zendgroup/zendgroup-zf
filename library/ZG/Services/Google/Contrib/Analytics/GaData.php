<?php

namespace ZG\Services\Google\Contrib\Analytics;

use ZG\Services\Google\Model;
use ZG\Services\Google\Contrib\Analytics\GaDataColumnHeaders;
use ZG\Services\Google\Contrib\Analytics\GaDataProfileInfo;
use ZG\Services\Google\Contrib\Analytics\GaDataQuery;
use ZG\Services\Google\Contrib\Analytics\GaDataColumnHeaders;

class GaData extends Model {
  protected $__columnHeadersType = 'GaDataColumnHeaders';
  protected $__columnHeadersDataType = 'array';
  public $columnHeaders;
  public $containsSampledData;
  public $id;
  public $itemsPerPage;
  public $kind;
  public $nextLink;
  public $previousLink;
  protected $__profileInfoType = 'GaDataProfileInfo';
  protected $__profileInfoDataType = '';
  public $profileInfo;
  protected $__queryType = 'GaDataQuery';
  protected $__queryDataType = '';
  public $query;
  public $rows;
  public $selfLink;
  public $totalResults;
  public $totalsForAllResults;
  public function setColumnHeaders(/* array(Google_GaDataColumnHeaders) */ $columnHeaders) {
    $this->assertIsArray($columnHeaders, 'GaDataColumnHeaders', __METHOD__);
    $this->columnHeaders = $columnHeaders;
  }
  public function getColumnHeaders() {
    return $this->columnHeaders;
  }
  public function setContainsSampledData( $containsSampledData) {
    $this->containsSampledData = $containsSampledData;
  }
  public function getContainsSampledData() {
    return $this->containsSampledData;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItemsPerPage( $itemsPerPage) {
    $this->itemsPerPage = $itemsPerPage;
  }
  public function getItemsPerPage() {
    return $this->itemsPerPage;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextLink( $nextLink) {
    $this->nextLink = $nextLink;
  }
  public function getNextLink() {
    return $this->nextLink;
  }
  public function setPreviousLink( $previousLink) {
    $this->previousLink = $previousLink;
  }
  public function getPreviousLink() {
    return $this->previousLink;
  }
  public function setProfileInfo(GaDataProfileInfo $profileInfo) {
    $this->profileInfo = $profileInfo;
  }
  public function getProfileInfo() {
    return $this->profileInfo;
  }
  public function setQuery(GaDataQuery $query) {
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