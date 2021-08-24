define([
   'jquery',
   'jquery/validate',
   'mage/translate'
], function($) {
   'use strict';

   return function() {
      // Add a validation method that checks if the amount is a number ).
       $.validator.addMethod(
           'cointopay-validate-amount',
           function(amount) {
               return /^[0-9]{5}(?:-[0-9]{4})?$/g.test(amount);
           },
           $.mage.__('Please enter a valid amount!')
       );
   }
});