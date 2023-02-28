<?php

namespace Drupal\ss_custom_page_theme\Plugin\CustomElement;

use Drupal\cohesion_elements\CustomElementPluginBase;

/**
 * Creates a SS element to calculate loan emi.
 *
 * @package Drupal\cohesion\Plugin\CustomElement
 *
 * @CustomElement(
 *   id = "ss_custom_page_theme",
 *   label = @Translation("Full Name")
 * )
 */


class FullName extends CustomElementPluginBase {

  /**
   * {@inheritdoc}
   */
  public function getFields() {
    return [
      'first_field' => [
        'title' => 'Field name',
        'type' => 'textfield',
        
      ],
      'second_field' => [
        'title' => 'Field name',
        'type' => 'textfield',
       
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function render($element_settings, $element_markup, $element_class, $element_context = []) {
    // Render the element.
    return [
      '#theme' => 'ss_custom_page_theme_form',
      '#template' => 'welcome-form',
      '#elementSettings' => $element_settings,
      '#elementMarkup' => $element_markup,
      '#elementContext' => $element_context,
      '#elementClass' => $element_class,
    ];
  }

}
