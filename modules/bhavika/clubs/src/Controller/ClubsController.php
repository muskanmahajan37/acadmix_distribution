<?php

namespace Drupal\welcome\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class WelcomeController.
 */
class ClubsController extends ControllerBase {

  /**
   * Welcome.
   *
   * @return string
   *   Return Hello string.
   */
  public function clubs() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: welcome')
    ];
  }

}
