<?php

namespace Drupal\entity_base;

use Drupal\Core\Entity\Sql\SqlContentEntityStorage;
use Drupal\entity_base\EntityBaseStorageInterface;

/**
 * Entity Base Storage
 *
 * @author Attila Németh
 * 20.04.2020
 */
class EntityBaseStorage extends SqlContentEntityStorage implements EntityBaseStorageInterface {
    
  /**
   * {@inheritdoc}
   */
  public function loadByUuid(string $uuid) {
    $entities = $this->loadByProperties([
      'uuid' => $uuid,
    ]);
    // It's impossible to have more than one Results, it's either one or zero.
    if (count($entities)) {
      return current($entities);
    }
    else {
      return NULL;
    }
  }
  
}
