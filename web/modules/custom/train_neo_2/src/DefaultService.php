<?php

namespace Drupal\train_neo_2;
use Drupal\Core\Cache\MemoryCache\MemoryCacheInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Database\Driver\mysql\Connection;

/**
 * Class DefaultService.
 */
class DefaultService {

  /**
   * Drupal\Core\Cache\MemoryCache\MemoryCacheInterface definition.
   *
   * @var \Drupal\Core\Cache\MemoryCache\MemoryCacheInterface
   */
  protected $entityMemoryCache;

  /**
   * Drupal\Core\Entity\EntityTypeManagerInterface definition.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * Drupal\Core\Database\Driver\mysql\Connection definition.
   *
   * @var \Drupal\Core\Database\Driver\mysql\Connection
   */
  protected $database;

  /**
   * Constructs a new DefaultService object.
   */
  public function __construct(MemoryCacheInterface $entity_memory_cache, EntityTypeManagerInterface $entity_type_manager, Connection $database) {
    $this->entityMemoryCache = $entity_memory_cache;
    $this->entityTypeManager = $entity_type_manager;
    $this->database = $database;
  }

}
