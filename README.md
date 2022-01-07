# Entity Base

Drupal 9-10 Entity Base Module

## Apply for custom Content or Config Entity Types

src\Entity\CustomContenEntity.php:
```php
 * @ContentEntityType(
 *   handlers = {
 *     "storage" = "Drupal\entity_base\ContentEntityBaseStorage",
 *   }
 * )
```

src\Entity\CustomConfigEntity.php:
```php
 * @ConfigEntityType(
 *   handlers = {
 *     "storage" = "Drupal\entity_base\ConfigEntityBaseStorage",
 *   }
 * )
```

## Load By UUID

```php
$myContentEntity = \Drupal::entityTypeManager()->getStorage('custom_content_entity')->loadByUuid($uuid);
$myConfigEntity = \Drupal::entityTypeManager()->getStorage('custom_config_entity')->loadByUuid($uuid);
```

You are free to use this module without any restriction but without any warranty.