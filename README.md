# Entity Base

Drupal 10 Entity Base Module

[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://GitHub.com/attus74/entity_base/graphs/commit-activity)
[![GitHub license](https://img.shields.io/github/license/attus74/entity_base.svg)](https://github.com/attus74/entity_base/blob/master/LICENSE)
[![GitHub release](https://img.shields.io/github/release/attus74/entity_base.svg)](https://GitHub.com/attus74/entity_base/releases/)
[![GitHub issues](https://img.shields.io/github/issues/attus74/entity_base.svg)](https://GitHub.com/attus74/entity_base/issues/)

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