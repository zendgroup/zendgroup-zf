<?php


namespace ZG\Services\Google\Contrib\Analytics;

use ZG\Services\Google\Model;
namespace ZG\Services\Google\Contrib\Analytics\CustomDataSourceChildLink;
namespace ZG\Services\Google\Contrib\Analytics\CustomDataSourceParentLink;

class CustomDataSource extends Model {
  public $accountId;
  protected $__childLinkType = 'CustomDataSourceChildLink';
  protected $__childLinkDataType = '';
  public $childLink;
  public $created;
  public $description;
  public $id;
  public $kind;
  public $name;
  protected $__parentLinkType = 'CustomDataSourceParentLink';
  protected $__parentLinkDataType = '';
  public $parentLink;
  public $profilesLinked;
  public $selfLink;
  public $type;
  public $updated;
  public $webPropertyId;
  public function setAccountId( $accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setChildLink(CustomDataSourceChildLink $childLink) {
    $this->childLink = $childLink;
  }
  public function getChildLink() {
    return $this->childLink;
  }
  public function setCreated( $created) {
    $this->created = $created;
  }
  public function getCreated() {
    return $this->created;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
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
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setParentLink(CustomDataSourceParentLink $parentLink) {
    $this->parentLink = $parentLink;
  }
  public function getParentLink() {
    return $this->parentLink;
  }
  public function setProfilesLinked(/* array(Google_string) */ $profilesLinked) {
    $this->assertIsArray($profilesLinked, 'Google_string', __METHOD__);
    $this->profilesLinked = $profilesLinked;
  }
  public function getProfilesLinked() {
    return $this->profilesLinked;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setUpdated( $updated) {
    $this->updated = $updated;
  }
  public function getUpdated() {
    return $this->updated;
  }
  public function setWebPropertyId( $webPropertyId) {
    $this->webPropertyId = $webPropertyId;
  }
  public function getWebPropertyId() {
    return $this->webPropertyId;
  }
}