(function ($, Drupal, once, drupalSettings) {
    "use strict";

    Drupal.behaviors.purejs = {
        attach: function (context) {
            $(".emi-calculator-container input").on("change", function () {
                let amount = $('.emi-calculator-container input[name="loan_amount"]').val();
                let interest =
                  $('.emi-calculator-container input[name="loan_interest"]').val() /
                  (12 * 100);
                let tenure =
                  $('.emi-calculator-container input[name="loan_tenure"]').val() * 12;
                let emi = 0;
                emi =
                  (amount * interest * Math.pow(1 + interest, tenure)) /
                  (Math.pow(1 + interest, tenure) - 1);
                console.log(amount, interest, tenure);
                $("#calculated_emi").html(Math.ceil(emi));
              });
              
        }
    };
})(jQuery, Drupal, once, drupalSettings);