<?php

namespace Drupal\entity_base;

use Drupal\Core\Config\Entity\ConfigEntityStorageInterface;

/**
 * Entity Base Storage Interface
 *
 * @author Attila Németh
 * 20.04.02020
 */
interface ConfigEntityBaseStorageInterface extends ConfigEntityStorageInterface {
  
  /**
   * Load an Entity by UUID
   * @param string $uuid
   * @return Drupal\Core\Entity\EntityInterface or NULL
   */
  public function loadByUuid(string $uuid);
  
}
