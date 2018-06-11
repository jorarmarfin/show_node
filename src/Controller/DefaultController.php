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
  public function Default($name) {
    $data = [];
    $node = Node::load(66);

    $data['title'] = $node->title->value;
    $data['body'] = $node->field_cuerpo2->value;

    return [
      '#theme' => 'show_node',
      '#data' => $data,
    ];
  }

}
