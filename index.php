<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="dynamic-form-fields.js"></script>

<!-- Include the above in your HEAD tag -->

<form class="container" id="needs-validation" action="" method="post" novalidate>
  <div class="row">
    <div class="col-md-8 mb-3">
      <label for="validationCustom01">Employee Network Name:</label>
      <input type="text" class="form-control form-control-lg" id="validationCustom01" placeholder="Network ID" name="full_name" value="John Doe" readonly required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Employee ID #:</label>
      <input type="text" class="form-control form-control-lg" id="validationCustom02" placeholder="XXXXX" name="employee_id" value="12345" readonly required>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Activity:</label>
        <select class="form-control form-control-lg" id="validationCustom03" name="emp_activity" required>
          <option value="">Select Activity...</option>
          <option value="Academic Support Team">Academic Support Team</option>
          <option value="Assessment Day">Assessment Day</option>
          <option value="Building Committee">Building Committee</option>
          <option value="Capstone Development">Capstone Development</option>
          <option value="Common Assessment Development">Common Assessment Development</option>
          <option value="Conference">Conference</option>
      <option value="Data Team">Data Team</option>
      <option value="Development Or Revision">Development Or Revision</option>
      <option value="District Committee">District Committee</option>
      <option value="ELL Or eKLIP Teachers">ELL Or eKLIP Teachers</option>
      <option value="IEP Meeting">IEP Meeting</option>
      <option value="IEP Writing">IEP Writing</option>
      <option value="Gifted Intervention Specialist Meeting">Gifted Intervention Specialist Meeting</option>
      <option value="Intervention Assistance Team Meeting">Intervention Assistance Team Meeting</option>
      <option value="Kindergarten Parent Conference">Kindergarten Parent Conference</option>
      <option value="Kindergarten Specific">Kindergarten Specific</option>
      <option value="Workshop Or Training">Workshop Or Training</option>
      <option value="Standards Alignment Or Rollout">Standards Alignment Or Rollout</option>
      <option value="Other">Other</option>
        </select>
    <div class="invalid-feedback">
      Please provide an activity.
    </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom04">Location of Activity:</label>
        <input type="text" class="form-control form-control-lg" id="validationCustom04" placeholder="Location" name="emp_location" maxlength="120" required>
        <div class="invalid-feedback">
          Please provide a location.
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 mb-3">
      <label for="validationCustom05">Describe the Activity:</label>
      <input type="text" class="form-control form-control-lg" id="validationCustom05" maxlength="100" placeholder="Name of activity..." name="emp_describe" maxlength="120" required>
      <div class="invalid-feedback">
        Please provide a short description (Under 120 characters).
      </div>
    </div>
   <div class="col-md-12 mb-3">
    <div>
      <label>Who is coordinating or sponsoring this leave?</label>
      <input class="form-control form-control-lg" type="text" name="emp_cost" placeholder="For Example: Enter a building or supervisor name" required>
      <div class="invalid-feedback">
            Please provide a person or building associated with the request.
          </div>
    </div>
    </div>
  </div>

  <div class="row" style="background: #f2f2f2; padding: 25px; border-top: 2px solid #ccc; border-bottom: 2px solid #ccc; margin-bottom: 30px;">
      <div class="col-md-12">
              <legend>Specify Dates of Activity</legend>
          <div class="row form-group">

            <div class="col-sm-12 col-md-3 col-lg-3 mb-3">
              <label>Date</label>
                <input type="text" class="form-control form-control-lg date" placeholder="XX/XX/XXXX" name="pd_date[]" data-provide="datepicker" required>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 mb-3">
              <label>Amount of Time</label>
                <select class="form-control form-control-lg" id="pd_time" name="pd_time[]" required>
                  <option value="">Choose...</option>
                  <option value="AM">AM</option>
                  <option value="PM">PM</option>
                  <option value="Full Day">Full Day</option>
                </select>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 mb-3">
              <label>Need A Sub?</label>
                <select class="form-control form-control-lg" id="pd_sub" name="pd_sub[]" required>
                  <option value="">Choose...</option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                  <option value="Shared">Shared</option>
                </select>
            </div>
              <button type="button" class="btn btn-success" onclick="add_pd_days();">+</button>
          </div>
          <div id="add_pd_days"></div>
      </div>
  </div>

  <button class="btn btn-primary" type="submit" name="submit" value="submit">Submit Form</button>
</form>
