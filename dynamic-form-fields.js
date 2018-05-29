// Validation //

(function() {
  'use strict';

  window.addEventListener('load', function() {
    var form = document.getElementById('needs-validation');
    form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  }, false);
})();


// Adds and Deletes Dates for PD Form //

  var pd_days = 1;
  var max_pd_days = 5;

  function add_pd_days() {
   
       if (pd_days < max_pd_days) {

          pd_days++;
            var objTo = document.getElementById('add_pd_days')
            var additional_pd_days = document.createElement("div");
          additional_pd_days.setAttribute("class", "form-group removeclass"+pd_days);
            var rdiv = 'removeclass'+pd_days;
          additional_pd_days.innerHTML = '<div class="row form-group"><div class="col-sm-12 col-md-3 col-lg-3 mb-3"><label>Date</label><input type="text" class="form-control form-control-lg date" placeholder="XX/XX/XXXX" name="pd_date[]" data-provide="datepicker"></div><div class="col-sm-12 col-md-3 col-lg-3 mb-3"><label>Amount of Time</label><select class="form-control form-control-lg" id="pd_time" name="pd_time[]"><option value="">Choose...</option><option value="AM">AM</option><option value="PM">PM</option><option value="Full Day">Full Day</option></select></div><div class="col-sm-12 col-md-3 col-lg-3 mb-3"><label>Need A Sub?</label><select class="form-control form-control-lg" id="pd_sub" name="pd_sub[]"><option value="">Choose...</option><option value="Yes">Yes</option><option value="No">No</option><option value="Shared">Shared</option></select></div><button type="button" class="btn btn-danger" onclick="remove_add_pd_days('+ pd_days +');">-</button></div><div id="add_pd_days"></div>';
          objTo.appendChild(additional_pd_days)
       }
       else {
          alert('You can only add 5 days at a time!')
       };
  }
  function remove_add_pd_days(rid) {
      $('.removeclass'+rid).remove();
      pd_days = pd_days - 1;  
  }
