<?php

namespace Drupal\ss_custom_element_loan_calculator\Plugin\CustomElement;

use Drupal\cohesion_elements\CustomElementPluginBase;

/**
 * Creates a SS element to calculate loan emi.
 *
 * @package Drupal\cohesion\Plugin\CustomElement
 *
 * @CustomElement(
 *   id = "ss_custom_element_loan_calculator",
 *   label = @Translation("Loan Calculator")
 * )
 */


class LoanCalculator extends CustomElementPluginBase {

  /**
   * {@inheritdoc}
   */
  public function getFields() {
    return [
      'minimum_amount' => [
        'title' => 'Minimum amount',
        'type' => 'textfield',
        
      ],
      'maximum_amount' => [
        'title' => 'Maximum amount',
        'type' => 'textfield',
       
      ],
      'minimum_interest_rate' => [
        'title' => 'Minimum interest rate',
        'type' => 'textfield',
        
      ],
      'maximum_interest_rate' => [
        'title' => 'Maximum interest rate',
        'type' => 'textfield',
       
      ],
      'minimum_tenure' => [
        'title' => 'Minimum tenure',
        'type' => 'textfield',
        
      ],
      'maximum_tenure' => [
        'title' => 'Maximum tenure',
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
      '#theme' => 'ss_custom_element_loan_calculator',
      '#elementSettings' => $element_settings,
      '#elementMarkup' => $element_markup,
      '#elementContext' => $element_context,
      '#elementClass' => $element_class,
    ];
  }

}
