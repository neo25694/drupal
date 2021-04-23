<?php

namespace Drupal\train_neo_2\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class DefaultController.
 */
class DefaultController extends ControllerBase {

  /**
   * Drupal\Core\Database\Driver\mysql\Connection definition.
   *
   * @var \Drupal\Core\Database\Driver\mysql\Connection
   */
  protected $database;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    $instance = parent::create($container);
    
    // kint($this->database); exit;

    $instance->database = $container->get('database');
    return $instance;
  }

  /**
   * Test.
   *
   * @return string
   *   Return Hello string.
   */
  public function test() {
    // kint($this->database); exit;
    
    
    
    // $obj = \Drupal::service("train_neo_2.default");
    // kint($obj); 
    
    
    
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: test')
    ];




  }

  public function justcheck() {

    \Drupal::messenger()->addMessage('cron_example executed at time1');
    


    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: test')
    ];
  }

}
