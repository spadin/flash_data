<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));

class FlashDataPackage extends Package {
  
  protected $pkgHandle = 'flash_data';
  protected $appVersionRequired = '5.4.2.2';
  protected $pkgVersion = '0.9.2';

  public function getPackageDescription() {
    return t("Set and retrieve flash data. Similar to Rails flash messages");
  }

  public function getPackageName() {
    return t("Flash Data Helper");
  }
     
  public function install() {
    $pkg  = parent::install();
  }   
}

?>