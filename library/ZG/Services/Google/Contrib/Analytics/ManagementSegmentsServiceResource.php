<?php


namespace ZG\Services\Google\Contrib\Analytics;

use ZG\Services\Google\ServiceResource;
use ZG\Services\Google\Contrib\Analytics\Segments;

  /**
   * The "segments" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new Google_AnalyticsService(...);
   *   $segments = $analyticsService->segments;
   *  </code>
   */
  class ManagementSegmentsServiceResource extends ServiceResource {

    /**
     * Lists advanced segments to which the user has access. (segments.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of advanced segments to include in this response.
     * @opt_param int start-index An index of the first advanced segment to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return Google_Segments
     */
    public function listManagementSegments($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Segments($data);
      } else {
        return $data;
      }
    }
  }