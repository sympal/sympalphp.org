<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    sfYaml::setSpecVersion('1.1');
    require_once(sfConfig::get('sf_plugins_dir').'/sfSympalPlugin/config/sfSympalPluginConfiguration.class.php');
    sfSympalPluginConfiguration::enableSympalPlugins($this);
  }
}
