<?php

namespace Drupal\entity_base;

use Drupal\Core\Config\Entity\ConfigEntityStorage;
use Drupal\entity_base\ConfigEntityBaseStorageInterface;

/**
 * Config Entity Base Storage
 *
 * @author Attila Németh
 * 20.04.2020
 */
class ConfigEntityBaseStorage extends ConfigEntityStorage implements ConfigEntityBaseStorageInterface {
    
  /**
   * {@inheritdoc}
   */
  public function loadByUuid(string $uuid) {
    $entities = $this->loadByProperties([
      'uuid' => $uuid,
    ]);
    // It's impossible to have more than one results, it's either one or zero.
    if (count($entities)) {
      return current($entities);
    }
    else {
      return NULL;
    }
  }
  
}
