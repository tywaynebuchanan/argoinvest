<?php ob_start();?>
<?php include ('functions/session.php');
      include ('functions/functions.php');
      include ('functions/insert_apply.php');
      include ('header/header.php');
if(!isset($_SESSION['login_user'])){
  header("location:index.php");
}

if(isset($_SESSION['login_user'])){
    if((time() - $_SESSION['last_time']) > 60)//time in seconds
    {
      header("location:logout.php");
    } 
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

<form enctype="multipart/form-data" method="POST" id="applyform" autocomplete="off">

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
      <input name="filenumber" id="filenumber" class="input" placeholder="File Number">
  </div>

  <div class="column is-4 small-padding">
      <label class = "label">
        <span class="icon">
        <i class="fas fa-user"></i>
        </span>First Name</label>
        <input name="fname" id="fname" class="input" placeholder="First Name" onchange="firstname(this)">
        <div class="hide-content" id="error_f">
          <p class=" help is-danger" >Please enter a firstname</p>
        </div>
      </div>



  <div class="column is-4 small-padding">
    <label class = "label"><span class="icon">
      <i class="fas fa-user"></i>
      </span>Last Name</label>
      <input name="lname" id="lname" class="input" placeholder="Last Name" onchange="lastname(this)">
      <div class="hide-content" id="error_l">
          <p class=" help is-danger" >Please enter a lastname</p>
        </div>
  </div>




  <div class="column is-4">
    <label class = "label">
      <span class="icon">
      <i class="fas fa-home"></i>
      </span>Street</label>
      <input name="street" class="input" placeholder="Please enter the street">
  </div>

  <div class="column is-4">
      <label class = "label">
      <span class="icon">
      <i class="fas fa-home"></i>
      </span>City</label>
      <input name="city" class="input" placeholder="Please enter the city">
  </div>

  <div class="column is-4">
    <div class="control">
      <label class = "label">Parish</label>
        <div class="select">
          <select name="parish">
              <option>Select Parish</option>
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
    
    <div class="column is-2 small-padding">
      <label class = "label">Office Phone Number</label>
        <div class="field">
          </p>
          <p class="control">
            <input class="input" name="officephone" id="officephone" type="tel">
          </p>
        </div>
    </div>

    <div class="column is-2 small-padding">
      <label class = "label">Mobile/Cell Number</label>
        <div class="field">
          <p class="control">
            <input class="input" name="cellphone" id="mobilephone" type="tel">
          </p>
        </div>
    </div>
<script>
  $(document).ready(function($){

  $('#homephone').mask("999-999-9999",{placeholder:"876-XXX-XXXX"});
  $('#mobilephone').mask("999-999-9999",{placeholder:"876-XXX-XXXX"});
  $('#officephone').mask("999-999-9999",{placeholder:"876-XXX-XXXX"});
  $('#trn').mask("999-999-999",{placeholder:"XXX-XXX-XXX"});
  $('#tcc').mask("999-999-999",{placeholder:"XXX-XXX-XXX"});

  });

  </script>

     <div class="column is-2 small-padding">
      <label class = "label">Home Phone Number</label>
        <div class="field">
          
          <p class="control">
            <input class="input" name="homephone" type="tel" id="homephone">
          </p>
        </div>
    </div>

    <div class="column is-4 small-paddingd">
      <label class = "label"><span class="icon">
        <i class="fas fa-user"></i>
        </span>Email Address</label>
        <input name="email" class="input" type="email" placeholder="eg. johnbrown@gmail.com">
    </div>
  </div>
</article>


<article class="message is-link">
 <div class="message-header">
  <p>Please enter Tax payer information</p>
</div>
<div class="message-body">
  <div class="columns is-mobile is-multiline">

    <div class="column is-4 small-paddingd">
      <label class = "label"><span class="icon">
        <i class="fas fa-user"></i>
        </span>Taxpayer Identification Number(TRN)</label>
        <input name="trn" class="input" type="text" id="trn">
    </div>

    <div class="column is-4 small-paddingd">
      <label class = "label"><span class="icon">
        <i class="fas fa-user"></i>
        </span>Company TRN</label>
        <input name="tcc" class="input" type="text" id="tcc">
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
      <span class="icon">
      <i class="fas fa-calendar-alt"></i>
      </span>Acreage</label>
      <input name="acreage" class="input" type="text" placeholder="Please enter acreage">
  </div>

<!--  <div class="column is-3">
    <div class="control">
      <label class = "label">Irrigated(Yes/No)</label>
        <div class="select">
          <select name = "irr">
              <option>Select</option>
              <option value="IRR">Irrigated</option>
              <option value="NOIRR">Not Irrigated</option>
          </select>
        </div>
    </div>
  </div>
 -->
  <div class="column is-2">
      <label class = "label">
      <span class="icon">
      <i class="fas fa-calendar-alt"></i>
      </span>Irrigated</label>
      <input name="irr" class="input" type="text" placeholder="">
  </div>

  <div class="column is-2">
      <label class = "label">
      <span class="icon">
      <i class="fas fa-calendar-alt"></i>
      </span>Not Irrigated</label>
      <input name="noirr" class="input" type="text" placeholder="">
  </div>


 <div class="column is-2">
      <label class = "label">
      <span class="icon">
      <i class="fas fa-calendar-alt"></i>
      </span>Rate</label>
      <input name="rate" class="input" placeholder="Please enter rate">
  </div>

  <div class="column is-4">
    <div class="control">
      <label class = "label">Property ID</label>
        <div class="select">
          <select name = "propertyid">
              <option >Select Property</option>
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

<!-- <div class="container space">
      <fieldset class = "box">
      <article class="message is-link">
        <div class="message-header">
            <p>Please select an option</p>
        </div>
            <div class="message-body">
             <div class="column is-4">
        <div class="field">
        <div class="file is-info has-name">
          <label class="file-label">
            <input class="file-input" type="file" name="lease">
            <span class="file-cta">
              <span class="file-icon">
                <i class="fas fa-upload"></i>
              </span>
              <span class="file-label">
                Upload Lease
              </span>
            </span>
            <span class="file-name">
              Lease Document
            </span>
          </label>
        </div>
      </div>
      </div>
    </div>
</article>
</fieldset>
</div> -->


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
            <a class="button is-danger" href="landing.php">
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




</script>
</html>