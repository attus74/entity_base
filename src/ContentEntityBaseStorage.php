<?php

namespace Drupal\entity_base;

use Drupal\Core\Entity\Sql\SqlContentEntityStorage;
use Drupal\entity_base\ContentEntityBaseStorageInterface;

/**
 * Content Entity Base Storage
 *
 * @author Attila Németh
 * 20.04.2020
 */
class ContentEntityBaseStorage extends SqlContentEntityStorage implements ContentEntityBaseStorageInterface {
    
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
