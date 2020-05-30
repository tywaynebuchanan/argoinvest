<?php ob_start();?>
<?php include ('functions/session.php');
      include ('functions/functions.php');
      include ('header/header.php');
if(!isset($_SESSION['login_user'])){
  header("location:index.php");
}

?>

<?php Prod_Update()?>

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
      <input name="filenumber" id="filenumber" class="input" value="<?php $name?>" placeholder="File Number">
        
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

<!-- <div class="field">
  <label class="label">Name</label>
  <div class="control">
    <input class="input" name="datecreated" type="date" placeholder="Text input">
  </div>
</div>

<div class="field">
  <label class="label">Name</label>
  <div class="control">
    <input class="input" name="user" type="text" placeholder="Text input">
  </div>
</div>


<div class="field">
  <div class="control">
    <label class="radio">
      <input type="radio" name="filenumber" value="yes">
      Yes
    </label>
    <label class="radio">
      <input type="radio" name="filenumber" value="no">
      No
    </label>
  </div>
</div> -->

<div class="field is-grouped">
  <div class="control">
    <input class="button" name="submit" type="submit" value="Submit">
  </div>
  </div>
  <div class="control">
    <button class="button is-link is-light">Cancel</button>
  </div>
</div>

</form>
</div>