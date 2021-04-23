<?php

namespace Drupal\train_neo_2\EventSubscriber;

use Drupal\train_neo_2\Event\UserLoginEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Class DefaultSubscriber.
 */
class UserLoginSubscriber implements EventSubscriberInterface {
  
  protected $dateFormatter;
  protected $database;
  /**
   * Constructs a new DefaultSubscriber object.
   */
  public function __construct() {

  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    $events[UserLoginEvent::EVENT_NAME] = 'onUserLogin';

    return $events;
  }

  /**
   * This method is called when the rahulprintevent is dispatched.
   *
   * @param \Symfony\Component\EventDispatcher\Event $event
   *   The dispatched event.
   */
  public function onUserLogin(UserLoginEvent $event) {
    // kint($event); exit;
    $database = \Drupal::database();
    $dateFormatter = \Drupal::service('date.formatter');

    $account_created = $database->select('users_field_data','ud')
    ->fields('ud',['created'])
    ->condition('ud.uid', $event->account->id())
    ->execute()
    ->fetchField();

    \Drupal::messenger()->addStatus(t('Welcome, your account was created on %created_date.',
    [
      '%created_date' => $dateFormatter->format($account_created,'short'),
    ]));
  }

}






