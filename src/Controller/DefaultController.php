<?php

namespace Drupal\show_node\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;

/**
 * Class DefaultController.
 */
class DefaultController extends ControllerBase {

  /**
   * Default.
   *
   * @return string
   *   Return Default string.
   */
  public function Default($nid) {
    $data = [];
    $node = Node::load($nid);

    $data['title'] = $node->title->value;
    $data['body'] = $node->body->value;

    return [
      '#theme' => 'show_node',
      '#data' => $data,
    ];
  }

}
