<?php

namespace Drupal\train_neo_2\Plugin\rest\resource;

use Drupal\rest\ModifiedResourceResponse;
use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

/**
 * Provides a resource to get view modes by entity and bundle.
 *
 * @RestResource(
 *   id = "myrahulroute",
 *   label = @Translation("Myrahulroute"),
 *   uri_paths = {
 *     "canonical" = "/rest/v1/rahul/api"
 *   }
 * )
 */
class myrahulroute extends ResourceBase {

  /**
   * A current user instance.
   *
   * @var \Drupal\Core\Session\AccountProxyInterface
   */
  protected $currentUser;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    $instance = parent::create($container, $configuration, $plugin_id, $plugin_definition);
    $instance->logger = $container->get('logger.factory')->get('train_neo_2');
    $instance->currentUser = $container->get('current_user');
    return $instance;
  }

    /**
     * Responds to GET requests.
     *
     * @param string $payload
     *
     * @return \Drupal\rest\ResourceResponse
     *   The HTTP response object.
     *
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     *   Throws exception expected.
     */
    public function get($payload) {
      $payload = ['name'=>'rahul get method accessed','class'=>'ssc'];

      if (!$this->currentUser->hasPermission('access content')) {
            throw new AccessDeniedHttpException();
        }

        return new ResourceResponse($payload, 200);
    }

    public function post($payload) {
      $payload = ['name'=>'rahul post method accessed','class'=>'hsc'];

      if (!$this->currentUser->hasPermission('access content')) {
            throw new AccessDeniedHttpException();
        }

        return new ResourceResponse($payload, 200);
    }

}
