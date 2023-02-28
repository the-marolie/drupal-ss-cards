<?php

namespace Drupal\ss_custom_page_theme\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;

/**
 * An ss_custom_page_theme controller.
 */
class WelcomeController extends ControllerBase {

  /**
   * Returns a render-able array for welcome page.
   */
  public function content(Request $request) {

    
    $fname = \Drupal::request()->get('first_name');
    $lname = \Drupal::request()->get('last_name');
    

    return [
    ];
  }
}