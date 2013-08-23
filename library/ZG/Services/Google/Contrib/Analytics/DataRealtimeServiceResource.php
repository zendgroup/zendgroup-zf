<?php


namespace ZG\Services\Google\Contrib\Analytics;

use ZG\Services\Google\ServiceResource;
use ZG\Services\Google\Contrib\Analytics\RealtimeData;
  /**
   * The "realtime" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new AnalyticsService(...);
   *   $realtime = $analyticsService->realtime;
   *  </code>
   */
  class DataRealtimeServiceResource extends ServiceResource {

    /**
     * Returns real-time data for a view (profile). (realtime.get)
     *
     * @param string $ids Unique table ID for retrieving Analytics data. Table ID is of the form ga:XXXX, where XXXX is the Analytics view (profile) ID.
     * @param string $metrics A comma-separated list of Analytics metrics. E.g., 'ga:visits,ga:pageviews'. At least one metric must be specified.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string dimensions A comma-separated list of real-time dimensions. E.g., 'ga:medium,ga:city'.
     * @opt_param string filters A comma-separated list of dimension or metric filters to be applied to real-time data.
     * @opt_param int max-results The maximum number of entries to include in this feed.
     * @opt_param string sort A comma-separated list of dimensions or metrics that determine the sort order for real-time data.
     * @return Google_RealtimeData
     */
    public function get($ids, $metrics, $optParams = array()) {
      $params = array('ids' => $ids, 'metrics' => $metrics);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new RealtimeData($data);
      } else {
        return $data;
      }
    }
  }