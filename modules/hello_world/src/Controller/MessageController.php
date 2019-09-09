<?php

namespace Drupal\hello_world\Controller;

class MessageController
{
  public function hello() {
    $greetings = array(
      array('text' => 'Good morning'),
      array('text' => 'Good afternoon'),
      array('text' => 'Good evening')
    );

    return array(
      '#theme' => 'message_list',
      '#greetings' => $greetings,
      '#title' => 'Here are some other sample title'
    );
  }
}
