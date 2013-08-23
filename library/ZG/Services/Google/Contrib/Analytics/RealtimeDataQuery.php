<?php


namespace ZG\Services\Google\Contrib\Analytics;

use ZG\Services\Google\Model;

class RealtimeDataQuery extends Model {
  public $dimensions;
  public $filters;
  public $ids;
  public $max_results;
  public $metrics;
  public $sort;
  public function setDimensions( $dimensions) {
    $this->dimensions = $dimensions;
  }
  public function getDimensions() {
    return $this->dimensions;
  }
  public function setFilters( $filters) {
    $this->filters = $filters;
  }
  public function getFilters() {
    return $this->filters;
  }
  public function setIds( $ids) {
    $this->ids = $ids;
  }
  public function getIds() {
    return $this->ids;
  }
  public function setMax_results( $max_results) {
    $this->max_results = $max_results;
  }
  public function getMax_results() {
    return $this->max_results;
  }
  public function setMetrics(/* array(Google_string) */ $metrics) {
    $this->assertIsArray($metrics, 'Google_string', __METHOD__);
    $this->metrics = $metrics;
  }
  public function getMetrics() {
    return $this->metrics;
  }
  public function setSort(/* array(Google_string) */ $sort) {
    $this->assertIsArray($sort, 'Google_string', __METHOD__);
    $this->sort = $sort;
  }
  public function getSort() {
    return $this->sort;
  }
}