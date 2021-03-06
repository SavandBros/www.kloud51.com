<?php
  if (!empty($_POST)) {
    $body = "<h3>Grant Application</h3>";

    foreach ($_POST as $key => $value) {
      $body = $body . "<br>" . str_replace('_', ' ', ucwords($key)) . ": <b>$value</b>";
    }
    
    // Set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= "From: <".$_POST["cio_email"].">" . "\r\n";

    mail("grantapplication@kloud51.com", "Grant Application", $body, $headers);
  }
?>

<!-- Cover -->
<div class="container-fluid cover cover-dark cover-holder bg-computer">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <!-- Title -->
        <h1 class="t-5"><b>Grant Campaign</b></h1>
      </div>
    </div>
  </div>
</div>

<!-- Info -->
<div class="container s-pad bg-white img-rounded">
  <div class="row">
    <div class="col-md-6">
      <!-- Sub title -->
      <h3 class="t-bold">Advantages &amp; Benefits of Hosting</h3>
      <hr>
      <!-- List -->
      <div class="list-2x">
        <h4><i class="fa fa-fw fa-check t-emerald"></i> Unlimited <b>Disk Space</b></h4>
        <h4><i class="fa fa-fw fa-check t-emerald"></i> Unlimited <b>Bandwidth</b></h4>
        <h4><i class="fa fa-fw fa-check t-emerald"></i> 27/7 Customer Support</h4>
        <h4><i class="fa fa-fw fa-check t-emerald"></i> High Speed</h4>
        <h4><i class="fa fa-fw fa-check t-emerald"></i> Site Protections</h4>
        <h4><i class="fa fa-fw fa-check t-emerald"></i> Free SSL Certificate</h4>
        <h4><i class="fa fa-fw fa-check t-emerald"></i> Free Migrations From Other Provider</h4>
        <h4><i class="fa fa-fw fa-check t-emerald"></i> One-Click Website Installer</h4>
        <h4><i class="fa fa-fw fa-check t-emerald"></i> Daily Backups</h4>
      </div>
      <br>
    </div>
    <!-- Info -->
    <div class="col-md-6">
      <!-- Sub title -->
      <h3 class="t-bold">Grant Programs</h3>
      <hr>
      <!-- Info -->
      <h4 class="t-line">
        The Kloud51 offers Grant Programs towards a variety of hosting products and services.
        These Higher Education Grants were created to give Institutions with a smaller IT Budget
        a chance to implement more secure and up to date hosting services.
      </h4>
      <!-- Info -->
      <h4 class="t-line">
        This Grant offers your institution a chance to financially take on a development platform
        with a clear ROI and no hidden costs. This grant is a first of its kind in this segment.
      </h4>
      <br>
      <!-- Sub title -->
      <h3 class="t-bold">Grant Coverage</h3>
      <hr>
      <!-- Info -->
      <h4 class="t-line">
        The grant covers a total of 30% over five years in hosting, migration and the support.
      </h4>
    </div>
  </div>
</div>

<!-- Form -->
<div class="container-fluid container-content bg-2">
  <div class="container s-pad-y-hard">
    <!-- Title -->
    <h1 class="title-header">Grant Application</h1>
    <hr>
    <!-- Form -->
    <form action="/program/grant" method="POST" class="panel panel-body panel-default" style="padding: 40px">
      <h2>Applicant Information</h2>
      <hr>
      <div class="form-group">
        <input required type="text" class="form-control" name="name_of_institution"  placeholder="Name of Institution">
      </div>
      <div class="form-group">
        <input required type="text" class="form-control" name="president_chancellor" placeholder="President/Chancellor">
      </div>
      <div class="form-group">
        <input required type="text" class="form-control" name="poc" placeholder="Point of Contact">
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input required type="text" class="form-control" name="poc_phone" placeholder="Point of Contact (POC) Phone">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input required type="text" class="form-control" name="poc_email" placeholder="Point of Contact (POC) Email">
          </div>
        </div>
      </div>
      <div class="form-group">
        <input required type="text" class="form-control" name="cio_vp_of_it" placeholder="CIO/VP of IT">
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input required type="text" class="form-control" name="cio_phone" placeholder="CIO Phone">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input required type="text" class="form-control" name="cio_email" placeholder="CIO Email">
          </div>
        </div>
      </div>
      <div class="form-group">
        <input required type="text" class="form-control" name="institution_address" placeholder="Institution's Address">
      </div>
      <br>
      <h2>In the case of being awarded this grant</h2>
      <hr>
      <div class="form-group">
        <input required type="text" class="form-control" name="permission_to_email_president_chancellor"
          placeholder="Do we have your permission to email the grant award letter to the President/Chancellor listed above?">
      </div>
      <div class="form-group">
        <input required type="text" class="form-control" name="if_not_please_indicate_to_whom_this_award_should_be_made_out_to"
          placeholder="If not, please indicate to whom this award should be made out to">
      </div>
      <div class="form-group">
        <input required type="text" class="form-control" name="media_communications_contact"
          placeholder="Media/Communications Contact (for News Release)">
      </div>
      <br>
      <h2>Enrollment information</h2>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <input required type="text" class="form-control" name="total_Enrollment" placeholder="Total Enrollment">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <input required type="text" class="form-control" name="full_time_enrollment" placeholder="Full Time Enrollment">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <input required type="text" class="form-control" name="part_time_enrollment" placeholder="Part Time Enrollment">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input required type="text" class="form-control" name="total_on_campus_students" placeholder="Total # On-Campus Students">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input required type="text" class="form-control" name="total_off_campus_students" placeholder="Total # Off-Campus Students">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <input required type="text" class="form-control" name="faculty" placeholder="# Faculty">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <input required type="text" class="form-control" name="tenured_faculty" placeholder="# Tenured Faculty">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <input required type="text" class="form-control" name="of_academic_depts" placeholder="# Of Academic Depts.">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input required type="text" class="form-control" name="alumni_population" placeholder="Alumni Population">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input required type="text" class="form-control" name="percentage_of_alumni_who_donate" placeholder="% of Alumni Who Donate">
          </div>
        </div>
      </div>
      <div class="form-group">
        <input required type="text" class="form-control"
          name="do_you_offer_a_continuing_education_program_and_then_if_so_approximated_how_many_students_does_this_program_serve"
          placeholder="Do you offer a continuing education program and then if so, approximated how many students does this program serve?">
      </div>
      <br>
      <h2>Please check all that apply</h2>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input required type="radio" name="publication" value="public"> Public
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input required type="radio" name="publication" value="private"> Private
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input required type="radio" name="time" value="full-year"> Full-year
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input required type="radio" name="time" value="two-year"> Two-year
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input required type="radio" name="graduate" value="undergraduate"> Undergraduate
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input required type="radio" name="graduate" value="graduate"> Graduate
          </div>
        </div>
      </div>
      <br>
      <h2>Technology resources contd</h2>
      <hr>
      <p class="o-fade-soft">Please indicate all major software being utilized on campus</p>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Enterprise Applications</th>
            <th>Vendor &amp; Versions</th>
            <th>Hosted/On-Site</th>
            <th>URL - Enterprise Web App (if available)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Student Information System/Enterprise Resource Planning</td>
            <td><input required type="text" class="form-control" name="vendor_and_versions" placeholder="Vendor &amp; Versions"></td>
            <td><input required type="text" class="form-control" name="hosted_or_on_site" placeholder="Hosted/On-Site"></td>
            <td>
              <input required type="text" class="form-control" name="url_enterprise_web_app_if_available"
                placeholder="URL - Enterprise Web App (if available)">
            </td>
          </tr>
          <tr>
            <td>Learning Management System</td>
            <td><input required type="text" class="form-control" name="vendor_and_versions" placeholder="Vendor &amp; Versions"></td>
            <td><input required type="text" class="form-control" name="hosted_or_on_site" placeholder="Hosted/On-Site"></td>
            <td>
              <input required type="text" class="form-control" name="url_enterprise_web_app_if_available"
                placeholder="URL - Enterprise Web App (if available)">
            </td>
          </tr>
          <tr>
            <td>Directory System e.g. AD, LDAP</td>
            <td><input required type="text" class="form-control" name="vendor_and_versions" placeholder="Vendor &amp; Versions"></td>
            <td><input required type="text" class="form-control" name="hosted_or_on_site" placeholder="Hosted/On-Site"></td>
            <td>
              <input required type="text" class="form-control" name="url_enterprise_web_app_if_available"
                placeholder="URL - Enterprise Web App (if available)">
            </td>
          </tr>
        </tbody>
      </table>
      <br>
      <h2>Please answer the following questions</h2>
      <hr>
      <div class="form-group">
        <input required type="text" class="form-control" name="how_did_you_hear_about_this_grant" placeholder="How did you hear about this grant?">
      </div>
      <div class="form-group">
        <input required type="text" class="form-control" name="has_your_institution_published_any_mobile_apps_If_yes_please_list_names_of_apps"
          placeholder="Has your institution published any mobile apps? If yes, please list names of apps.">
      </div>
      <div class="form-group">
        <input required type="text" class="form-control" name="did_you_know_which_mobile_operation_system_is_most_prevalent_on_campus"
          placeholder="Did you know which mobile operation system is most prevalent on campus? (iOS, Android, BlackBerry, Windows Mobile)">
      </div>
      <div class="form-group">
        <input required type="text" class="form-control" name="did_you_have_a_timeline_for_when_you_would_need_a_mobile_app_live_for_your_institution"
          placeholder="Did you have a timeline for when you would need a mobile app live for your institution?">
      </div>
      <div class="form-group">
        <input required type="text" class="form-control" name="when_do_you_plan_to_have_your_mobile_app_to_go_live"
          placeholder="When do you plan to have your mobile app to go live?">
      </div>
      <hr>
      <button class="btn btn-launch btn-primary"><i class="fa fa-send"></i> Submit</button>
    </form>
  </div>
</div>
