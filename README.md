# Entity Base
Drupal 8-9 Entity Base Module

## Load by UUID

src\Entity\CustomEntity.php:
```php
 * @ContentEntityType(
 *   handlers = {
 *     "storage" = "Drupal\entity_base\EntityBaseStorage",
 *   }
 * )
```

```php
$entity = \Drupal::entityTypeManager()->getStorage('custom_entity')->loadByUuid($uuid);
```

You are free to use this module without any restriction but without any warranty.
