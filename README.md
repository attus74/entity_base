# Entity Base
Drupal 8/9 Entity Base Module

## Load by UUID

src\Entity\CustomContenEntity.php:
```php
 * @ContentEntityType(
 *   handlers = {
 *     "storage" = "Drupal\entity_base\ContentEntityBaseStorage",
 *   }
 * )
```

```php
$entity = \Drupal::entityTypeManager()->getStorage('custom_content_entity')->loadByUuid($uuid);
```

src\Entity\CustomConfigEntity.php:
```php
 * @ConfigEntityType(
 *   handlers = {
 *     "storage" = "Drupal\entity_base\ConfigEntityBaseStorage",
 *   }
 * )
```

```php
$entity = \Drupal::entityTypeManager()->getStorage('custom_config_entity')->loadByUuid($uuid);
```

You are free to use this module without any restriction but without any warranty.