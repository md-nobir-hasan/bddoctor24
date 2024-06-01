(function () {
  "use strict";

  /**
   * ------------------------------------------------------------------------
   *  Move the demo script to the footer before </body> 
   *  and edit the script for dynamic data needs.
   * ------------------------------------------------------------------------
   */

  // Demo Datepicker
  const myDatepicker = function () {
    // Datepicker
    const date_datepick = document.querySelectorAll('.datepick');
    if ( date_datepick != null) {
      for( let i = 0; i < date_datepick.length; i++)
      {
        flatpickr( date_datepick[i], {
          enableTime: true,
          allowInput: true,
          dateFormat: "Y-m-d H:i"
        });
      }
    }
    // Range Datepicker
    const date_start = document.querySelectorAll('.startDate');
    if ( date_start != null) {
      const date_end = document.querySelectorAll('.endDate');
      for( let i = 0; i < date_start.length; i++) {
        for( let x = 0; x < date_end.length; x++) {
          flatpickr( date_start[i], {
            enableTime: true,
            allowInput: true,
            dateFormat: "m/d/Y h:iK",
            "plugins": [new rangePlugin({ input: date_end[x]})]
          });
        }
      }
    }
  }
  
  // Preloader
  const myPreloader = function () {
    const xpre = document.querySelector(".preloader");
    if ( xpre != null) {
      window.addEventListener('load',function(){
        document.querySelector('body').classList.add("loaded-success")  
      });
    }
  }

  // Tables sorter
  const myTablesorter = function () {
    const els = document.querySelectorAll(".table-sorter");
    if ( els != null) {
      for( let i = 0; i < els.length; i++)
      {
        const table = new simpleDatatables.DataTable((els[i]));
      }
    };
  }

  // Form validation
  const myValidation = function () {
    // pristine js validation form
    const valid_form = document.querySelectorAll(".valid-form");

    if ( valid_form != null) {
      for( let i = 0; i < valid_form.length; i++){
        const pristine = new Pristine(valid_form[i]);

        valid_form[i].addEventListener('submit', function (e) {
          e.preventDefault();
          // check if the form is valid
          const valid = pristine.validate(); // returns true or false
        });
      }
    }
  }

  // Input tags
  const myTagify = function () {
    // tagify
    const input_tags = document.querySelectorAll("input.tagify");

    if ( input_tags != null) {
      for( let i = 0; i < input_tags.length; i++)
      {
        new Tagify(input_tags[i]);
      }
    }
  }

  // Circle progress
  const myCircleProgress = function () {
    var counts = document.querySelectorAll('.circle-progress');

    if ( counts != null) {
      var circle = document.querySelectorAll('.circle-fill');

      for( let i = 0; i < counts.length; i++) {

        var val = counts[i].getAttribute('data-percent');
        
        if (isNaN(val)) {
         val = 100; 
        } else {
          var r = circle[i].getAttribute('r');
          var c = Math.PI*(r*2);
         
          if (val < 0) { val = 0;}

          if (val > 100) { val = 100;}
          
          var pct = ((100-val)/100)*c;

          circle[i].style.strokeDashoffset = pct + "px";
        }
      }
    }
  }

  // Custom JS
  const myCustom = function () {

    // insert your custom javascript on here
    
  }

  /**
   * ------------------------------------------------------------------------
   * Launch Functions
   * ------------------------------------------------------------------------
   */
  myDatepicker();
  myTablesorter();
  myPreloader();
  myTagify();
  myValidation();
  myCircleProgress();
  myCustom();

})();