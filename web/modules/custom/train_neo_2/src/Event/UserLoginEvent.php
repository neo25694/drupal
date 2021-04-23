<?php

namespace Drupal\train_neo_2\Event;

use Drupal\User\UserInterface;
use Symfony\Component\EventDispatcher\Event;

class UserLoginEvent extends Event {

    Const EVENT_NAME = 'custom_events_user_login';

    public $account;

    public function __construct(UserInterface $account) {
        $this->account = $account;
    }

}