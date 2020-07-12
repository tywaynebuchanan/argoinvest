<?php ob_start();?>
<?php include ('functions/session.php');
      include ('functions/functions.php');
      include ('functions/insert_apply.php');
      include ('header/header.php');
if(!isset($_SESSION['login_user'])){
  header("location:index.php");
}

?>

<!--Hero-->
<section class="hero is-link">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
       Property & Fixed Asset Department
      </h1>
      <h2 class="subtitle">
      Property Lease Application Form
      </h2>

    </div>
  </div>
</section>
<!--End Hero-->

<!--Breadcrumb-->
<nav class="breadcrumb has-background-white" aria-label="breadcrumbs">
  <div class="container space">
      <ul>
        <li>
          <a href="home_page.php">
            <span class="icon is-small">
              <i class="fas fa-home" aria-hidden="true"></i>
            </span>
            <span>Home</span>
          </a>
        </li>
        <li class="is-active">
          <a href="#">
            <span class="icon is-small">
              <i class="fas fa-file-alt" aria-hidden="true"></i>
            </span>
           Property Lease Application Form
          </a>
        </li>
      </ul>
  </div>
</nav>
<!--End of Breadcrumb-->

<!--Steps-->
<div class="container">
<ul class="steps is-narrow is-large is-centered has-content-centered">
      <li class="steps-segment">
        <a href="#" class="has-text-dark">
          <span class="steps-marker">
            <span class="icon">
              <i class="fa fa-user"></i>
            </span>
          </span>
          <div class="steps-content">
            <p class="heading">Lessee Information</p>
          </div>
        </a>
      </li>
      <li class="steps-segment is-active">
        <a href="#" class="has-text-dark">
          <span class="steps-marker">
            <span class="icon">
              <i class="fa fa-layer-group"></i>
            </span>
          </span>
          <div class="steps-content">
            <p class="heading">Property Information</p>
          </div>
        </a>
      </li>
      <li class="steps-segment has-gaps">
        <span class="steps-marker">
          <span class="icon">
            <i class="fa fa-home"></i>
          </span>
        </span>
        <div class="steps-content">
          <a href="apply_form3.php"><p class="heading">Lease Information</p></a>
        </div>
      </li>
      <li class="steps-segment">
        <span class="steps-marker is-hollow">
          <span class="icon">
            <i class="fa fa-check"></i>
          </span>
        </span>
        <div class="steps-content">
          <p class="heading">Confirmation</p>
        </div>
      </li>
    </ul>
</div>
<!--End of Steps-->

<!-- Application Form Div --->
<div class="container space">
  <article class="message is-link">
 <div class="message-header">
  <p>PROPERTY LEASE APPLICATION FORM</p>
</div>
    <div class="message-body">
      Please enter all information that is applicable
    </div>
</div>
</article>
</div>

<div class="container space">

<form method="POST" id="applyform" onsubmit="return Validate()">

<fieldset class = "box">
<article class="message is-link">
 <div class="message-header">
  <p>Please enter Personal Information on the Applicant</p>
</div>
<div class="message-body">
<div class="columns is-mobile is-multiline">

  <div class="column is-2 small-padding">
    <label class = "label"><span class="icon">
      <i class="fas fa-hashtag"></i>
      </span>FileNumber</label>
      <input name="filenumber" id="filenumber" class="input" placeholder="File Number" onkeydown="UpperCase()">
          <p class="help has-text-danger" id="err_file"></p>
  </div>

  <div class="column is-4 small-padding">
      <label class = "label">
        <span class="icon">
        <i class="fas fa-user"></i>
        </span>First Name</label>
        <input name="fname" id="fname" class="input" placeholder="First Name">
        <p class="help has-text-danger" id="err_fname"></p>
      </div>
  <div class="column is-4 small-padding">
    <label class = "label"><span class="icon">
      <i class="fas fa-user"></i>
      </span>Last Name</label>
      <input name="lname" id="lname" class="input" placeholder="Last Name">
          <p class="help has-text-danger" id="err_lname"></p>
  </div>

  <div class="column is-4">
    <label class = "label">
      <span class="icon">
      <i class="fas fa-home"></i>
      </span>Street</label>
      <input name="street" id="street" class="input" placeholder="Please enter the street">
      <p class="help has-text-danger" id="err_street"></p>
  </div>

  <div class="column is-4">
      <label class = "label">
      <span class="icon">
      <i class="fas fa-home"></i>
      </span>City</label>
      <input name="city" class="input" id="city" placeholder="Please enter the city">
      <p class="help has-text-danger" id="err_city"></p>
  </div>

  <div class="column is-4">
    <div class="control">
      <label class = "label"><span class="icon">
      <i class="fas fa-home"></i>
      </span>Parish</label>
        <div class="select">
          <select name="parish">
              <option selected="true" disabled="disabled">Select Parish</option>
              <option value="Kingston">Kingston</option>
              <option value="St Andrew">St Andrew</option>
              <option value="St Thomas">St Thomas</option>
              <option value="St Catherine">St Catherine</option>
              <option value="St Mary">St Mary</option>
              <option value="St Ann">St Ann</option>
              <option value="Manchester">Manchester</option>
              <option value="Clarendon">Clarendon</option>
              <option value="Hanover">Hanover</option>
              <option value="Westmoreland">Westmoreland</option>
              <option value="St James">St James</option>
              <option value="Trelawny">Trelawny</option>
              <option value="St Elizabeth">St Elizabeth</option>
          </select>
        </div>
    </div>
</div>

</div>
</article>

<article class="message is-link">
 <div class="message-header">
  <p>Please enter contact information for the applicant</p>
</div>
<div class="message-body">
  <div class="columns is-mobile is-multiline">

    <div class="column is-3 small-padding">
      <label class = "label"><span class="icon">
      <i class="fas fa-phone"></i>
      </span>Office Phone Number</label>
        <div class="field">
          </p>
          <p class="control">
            <input class="input" maxlength="12" name="officephone" id="officephone" type="tel">
            <p class="help has-text-danger" id="err_ophone"></p>
          </p>
        </div>
    </div>

    <div class="column is-3 small-padding">
      <label class = "label"><span class="icon">
      <i class="fas fa-phone"></i>
      </span>Mobile/Cell Number</label>
        <div class="field">
          <p class="control">
            <input class="input" maxlength="12" name="cellphone" id="mobilephone" type="tel">
             <p class="help has-text-danger" id="err_mphone"></p>
          </p>
        </div>
    </div>


     <div class="column is-3 small-padding">
      <label class = "label"><span class="icon">
      <i class="fas fa-phone"></i>
      </span>Home Phone Number</label>
        <div class="field">
          <p class="control">
            <input class="input" maxlength="12" name="homephone" type="tel" id="homephone">
             <p class="help has-text-danger" id="err_hphone"></p>
          </p>
        </div>
    </div>

    <div class="column is-3 small-paddingd">
      <label class = "label"><span class="icon">
       <i class="fas fa-envelope-open-text"></i>
        </span>Email Address</label>
        <input name="email" class="input" id="email" type="email" placeholder="eg. johnbrown@gmail.com">
        <p class="help has-text-danger" id="error_email"></p>
    </div>
  </div>
</article>


<article class="message is-link">
 <div class="message-header">
  <p>Please enter Tax payer information</p>
</div>
<div class="message-body">
  <div class="columns is-mobile is-multiline">

    <div class="column is-4 small-padding">
      <label class = "label"><span class="icon">
        <i class="fas fa-list-ol"></i>
        </span>Taxpayer Identification Number(TRN)</label>
        <input name="trn" class="input" type="tel" maxlength="11" id="trn">
        <p class="help has-text-danger" id="error_trn"></p>
    </div>

    <div class="column is-4 small-padding">
      <label class = "label"><span class="icon">
        <i class="fas fa-list-ol"></i>
        </span>Company TRN</label>
        <input name="tcc" class="input" maxlength="11" type="tel" id="tcc">
        <p class="help has-text-danger" id="error_tcc"></p>

    </div>

 <!--  <div class="column is-3 small-paddingd">
      <label class = "label"><span class="icon">
        <i class="fas fa-user"></i>
        </span>Date Operation Commenced</label>
        <input name="operationstart" class="input" type="text" placeholder="XX\XX\XXXX">
    </div>
  </div> -->
</article>
</fieldset>


<div class="container">
<fieldset class = "box">
<article class="message is-link">
 <div class="message-header">
  <p>Please enter Property Information</p>
</div>

<div class="message-body">
<div class="columns is-mobile is-multiline">

   <div class="column is-3">
      <label class = "label">
      <span class="icon">
      <i class="fas fa-calendar-alt"></i>
      </span>Lease Start Date</label>
      <input name="startdate" class="input" type="date" placeholder="">
  </div>

  <div class="column is-3">
      <label class = "label">
      <span class="icon">
      <i class="fas fa-calendar-alt"></i>
      </span>Lease End Date</label>
      <input name="enddate" class="input" type="date" placeholder="">
  </div>

  <div class="column is-3">
      <label class = "label">
      <i class="far fa-image"></i>
      </span>Acreage</label>
      <input name="acreage" id="acreage" class="input" type="text" placeholder="Please enter acreage">
      <p class="help has-text-danger"  id="error_arc"></p>
  </div>

 <div class="column is-3">
    <div class="control">
      <label class = "label">Irrigated(Yes/No)</label>
        <div class="select">
          <select id="select">
              <option selected="true" disabled="true">Select</option>
              <option value="1">Yes</option>
              <option value="0">No</option>
          </select>
        </div>
    </div>
  </div>

  <div class="column is-2" id="irr">
      <label class = "label">
      <span class="icon">
    <i class="fas fa-tint"></i>
      </span>Irrigated</label>
      <input name="irr"   id="irrigated" class="input" type="text" placeholder="" disabled>
  </div>

  <div class="column is-2" id="noirr">
      <label class = "label">
      <span class="icon">
     <i class="fas fa-tint-slash"></i>
      </span>Not Irrigated</label>
      <input name="noirr"  id="notirrigated" class="input" type="text" disabled>
  </div>


 <div class="column is-2">
      <label class = "label">
      <span class="icon">
      <i class="fas fa-dollar-sign"></i>
      </span>Rate</label>
      <input name="rate" id="rate" maxlength="8" class="input" placeholder="Please enter rate">
      <p class="help has-text-danger"  id="error_rate"></p>
  </div>

  <div class="column is-4">
    <div class="control">
      <label class = "label"><label class = "label">
      <span class="icon"><i class="far fa-image"></i></span>Property ID</label>
        <div class="select">
          <select name = "propertyid">
              <option selected="true" disabled="true">Select Property</option>
              <option value="PGR">Plantian Garden</option>
              <option value="AH">Aminty Hall</option>
              <option value="SP">Spring Plain</option>
              <option value="SV">Spring Vale</option>
              <option value="RHY">Rhymesbury</option>
              <option value="NR">New River</option>
              <option value="EBP">Ebony Park</option>
          </select>
        </div>
    </div>
  </div>



</div>
  </article>
</fieldset>
</div>



<div class="container space">
<fieldset class = "box">
<article class="message is-link">
  <div class="message-header">
    <p>Please select an option</p>
    </div>
      <div class="message-body">
        <div class="field is-grouped">
          <p class="control">
            <input class="button is-link is-outlined" type="submit" name="submit" value="Submit Application">
          </p>
          <p class="control">
            <a class="button is-danger" href="home_page.php">
              Cancel application
            </a>
          </p>
        </div>
      </form>
    </div>
</article>
</fieldset>
</div>



</body>
<script>


  // Initialize all input of type date
var calendars = bulmaCalendar.attach('[type="date"]', options);

// Loop on each calendar initialized
for(var i = 0; i < calendars.length; i++) {
  // Add listener to date:selected event
  calendars[i].on('select', date => {
    console.log(date);
  });
}

// To access to bulmaCalendar instance of an element
var element = document.querySelector('#my-element');
if (element) {
  // bulmaCalendar instance is available as element.bulmaCalendar
  element.bulmaCalendar.on('select', function(datepicker) {
    console.log(datepicker.data.value());
  });
}

$(function(){

  $("#homephone").mask("999-999-9999",{placeholder:"___-___-____"});
  $("#mobilephone").mask("999-999-9999",{placeholder:"___-___-____"});
  $("#officephone").mask("999-999-9999",{placeholder:"___-___-____"});
  $("#trn").mask("999-999-999",{placeholder:"___-___-___"});
  $("#tcc").mask("999-999-999",{placeholder:"___-___-___"});
  $("#rate").mask("99999.99",{placeholder:"_____.__"});
  });





</script>
</html>
