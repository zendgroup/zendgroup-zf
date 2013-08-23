<?php


namespace ZG\Services\Google\Contrib\Analytics;

use ZG\Services\Google\ServiceResource;
use ZG\Services\Google\Contrib\Analytics\Goals;
  /**
   * The "goals" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new Google_AnalyticsService(...);
   *   $goals = $analyticsService->goals;
   *  </code>
   */
  class ManagementGoalsServiceResource extends ServiceResource {

    /**
     * Lists goals to which the user has access. (goals.list)
     *
     * @param string $accountId Account ID to retrieve goals for. Can either be a specific account ID or '~all', which refers to all the accounts that user has access to.
     * @param string $webPropertyId Web property ID to retrieve goals for. Can either be a specific web property ID or '~all', which refers to all the web properties that user has access to.
     * @param string $profileId View (Profile) ID to retrieve goals for. Can either be a specific view (profile) ID or '~all', which refers to all the views (profiles) that user has access to.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of goals to include in this response.
     * @opt_param int start-index An index of the first goal to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return Google_Goals
     */
    public function listManagementGoals($accountId, $webPropertyId, $profileId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Goals($data);
      } else {
        return $data;
      }
    }
  }
