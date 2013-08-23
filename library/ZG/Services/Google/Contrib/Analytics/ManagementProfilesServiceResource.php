<?php


namespace ZG\Services\Google\Contrib\Analytics;

use ZG\Services\Google\ServiceResource;
use ZG\Services\Google\Contrib\Analytics\Profiles;
  /**
   * The "profiles" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new Google_AnalyticsService(...);
   *   $profiles = $analyticsService->profiles;
   *  </code>
   */
  class ManagementProfilesServiceResource extends ServiceResource {

    /**
     * Lists views (profiles) to which the user has access. (profiles.list)
     *
     * @param string $accountId Account ID for the view (profiles) to retrieve. Can either be a specific account ID or '~all', which refers to all the accounts to which the user has access.
     * @param string $webPropertyId Web property ID for the views (profiles) to retrieve. Can either be a specific web property ID or '~all', which refers to all the web properties to which the user has access.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of views (profiles) to include in this response.
     * @opt_param int start-index An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return Google_Profiles
     */
    public function listManagementProfiles($accountId, $webPropertyId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Profiles($data);
      } else {
        return $data;
      }
    }
  }