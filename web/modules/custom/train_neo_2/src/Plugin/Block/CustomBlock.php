<?php

namespace Drupal\train_neo_2\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a 'CustomBlock' block.
 *
 * @Block(
 *  id = "custom_block",
 *  admin_label = @Translation("Custom block"),
 * )
 */
class CustomBlock extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * Drupal\Core\Entity\EntityTypeManagerInterface definition.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    $instance = new static($configuration, $plugin_id, $plugin_definition);
    $instance->entityTypeManager = $container->get('entity_type.manager');
    return $instance;
  }

  /**
   * {@inheritdoc}
   */
  public function build() {

    // $node = $this->entityTypeManager->getStorage('node')->load(291);
    // $title = $node->getTitle();
    // $id = $node->id();

    $config = \Drupal::service('config.factory')->getEditable('train_neo_2.defaultconfig');   
    $title=$config->get('key');
    $id=$config->get('api_secret_key');
     
    
    $build = [];
    $build['#theme'] = 'custom_block';
    $build['#custom_title'] = $title;
    $build['#custom_id'] = $id;

    return $build;
  }

}
