<?php

namespace ZG\Services\Google\Contrib\Analytics;

use ZG\Services\Google\Model;
use ZG\Services\Google\Contrib\Analytics\GoalEventDetailsEventConditions;

class GoalEventDetails extends Model {
  protected $__eventConditionsType = 'GoalEventDetailsEventConditions';
  protected $__eventConditionsDataType = 'array';
  public $eventConditions;
  public $useEventValue;
  public function setEventConditions(/* array(GoalEventDetailsEventConditions) */ $eventConditions) {
    $this->assertIsArray($eventConditions, 'GoalEventDetailsEventConditions', __METHOD__);
    $this->eventConditions = $eventConditions;
  }
  public function getEventConditions() {
    return $this->eventConditions;
  }
  public function setUseEventValue( $useEventValue) {
    $this->useEventValue = $useEventValue;
  }
  public function getUseEventValue() {
    return $this->useEventValue;
  }
}
