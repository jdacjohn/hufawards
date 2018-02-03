<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<LINK REL=StyleSheet HREF="css/global.css" TYPE="text/css" MEDIA=screen>
	<LINK REL=StyleSheet HREF="css/awards.css" TYPE="text/css" MEDIA=screen>
		<LINK REL=StyleSheet HREF="css/sponsorships.css" TYPE="text/css" MEDIA=screen>
		<LINK REL="SHORTCUT ICON" HREF="favicon.ico">
	<style>
	div.sidenav {
	height: 2032px;
		}
	div.background {
	height: 2250px;
		}
	
	</style>
<link href="/uploadify/uploadify.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/uploadify/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="/uploadify/swfobject.js"></script>
<script type="text/javascript" src="/uploadify/jquery.uploadify.v2.1.4.min.js"></script>
<script src="SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#file_upload').uploadify({
    'uploader'  : '/uploadify/uploadify.swf',
    'script'    : '/uploadify/uploadify.php',
    'cancelImg' : '/uploadify/cancel.png',
    'folder'    : '/nominee_pictures',
	'fileExt'   : '*.jpg;*.gif;*.png',
    'fileDesc'  : 'Image Files',
    'auto'      : true
  });
});
</script>
		<meta name="description" content="H.U.F. Awards and Scholarship Brunch. Honoring UnSung Fathers. Sponsored by
		The Mablean Ephriam Foundation">

		<META name="keywords" content="Judge Mablean Ephriam, Divorce Court, HUF Awards, Honoring UnSung Fathers, Los Angeles African American Awards,
		Los Angeles Award Ceremonies, Award Ceremony, MEF Foundation, Father's Day Awards, awards for fathers, scholarships in los angeles, scholarships for fatherss,
		">
			
    <script type="text/javascript" src="js/swfobject.js"></script><script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
    <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>H.U.F. Awards - Honoring UnSung Fathers</title>
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
<div class="background_nomination">
	
<div class="header">
<div class="awards_date">June 19, 2011 - Long Beach, CA</div>	
	
</div>	


<div class="main_content_holder"><div class="sidenav_nomination">
	
<?  include("nav.html");?>
	
</div>	<!-- END SIDE NAV-->


<div class="content2">
<img src="images/nomination_form.gif" width="400" height="24" alt="Scholarships">
<hr width="500" align="left">
<div class="scholarship_eligibility">
<h1>H.U.F. Awards and Scholarship Brunch</h1>
<h2>June 19, 2011</h2>
<h2>Nomination Application

</h2><h3>Notes:</h3>
<ul>
<li style="color: red;">Application must be received by May 13, 2011 at 5 PM, no exceptions.</li>
<li>Don't forget to upload a photo of the applicant below</li>
<li>Nominee must attend luncheon.</li>
<li>Nominee is free to attend, all others must pay</li>
</ul>
  <form action="mail_form_nominations.php" method="post" enctype="multipart/form-data" name="form1" id="form1">  
  <fieldset>
    <legend>Nominee</legend>
  <Br/>
  <span id="sprytextfield1">
  <label for="fname">First Name</label>
  <input type="text" name="fname" id="fname" />
  <span class="textfieldRequiredMsg">A value is required.<br />
  <br />
  </span></span>
  <p><span id="sprytextfield2">
    <label for="lname">Last Name</label>
    <input type="text" name="lname" id="lname" />
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
  <p><span id="sprytextfield6">
    <label for="age">Nominee Age</label>
    <input type="text" name="age" id="age" />
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
  <p><span id="sprytextfield3">
    <label for="address">Address</label>
    <input type="text" name="address" id="address" />
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
  <p><span id="sprytextfield4">
    <label for="city">City</label>
    <input type="text" name="city" id="city" />
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
  <p>
    <label for="state">State</label>
    <select name="state" id="state">
    <option value="" selected="selected">Select a State</option> 
<option value="AL">Alabama</option> 
<option value="AK">Alaska</option> 
<option value="AZ">Arizona</option> 
<option value="AR">Arkansas</option> 
<option value="CA">California</option> 
<option value="CO">Colorado</option> 
<option value="CT">Connecticut</option> 
<option value="DE">Delaware</option> 
<option value="DC">District Of Columbia</option> 
<option value="FL">Florida</option> 
<option value="GA">Georgia</option> 
<option value="HI">Hawaii</option> 
<option value="ID">Idaho</option> 
<option value="IL">Illinois</option> 
<option value="IN">Indiana</option> 
<option value="IA">Iowa</option> 
<option value="KS">Kansas</option> 
<option value="KY">Kentucky</option> 
<option value="LA">Louisiana</option> 
<option value="ME">Maine</option> 
<option value="MD">Maryland</option> 
<option value="MA">Massachusetts</option> 
<option value="MI">Michigan</option> 
<option value="MN">Minnesota</option> 
<option value="MS">Mississippi</option> 
<option value="MO">Missouri</option> 
<option value="MT">Montana</option> 
<option value="NE">Nebraska</option> 
<option value="NV">Nevada</option> 
<option value="NH">New Hampshire</option> 
<option value="NJ">New Jersey</option> 
<option value="NM">New Mexico</option> 
<option value="NY">New York</option> 
<option value="NC">North Carolina</option> 
<option value="ND">North Dakota</option> 
<option value="OH">Ohio</option> 
<option value="OK">Oklahoma</option> 
<option value="OR">Oregon</option> 
<option value="PA">Pennsylvania</option> 
<option value="RI">Rhode Island</option> 
<option value="SC">South Carolina</option> 
<option value="SD">South Dakota</option> 
<option value="TN">Tennessee</option> 
<option value="TX">Texas</option> 
<option value="UT">Utah</option> 
<option value="VT">Vermont</option> 
<option value="VA">Virginia</option> 
<option value="WA">Washington</option> 
<option value="WV">West Virginia</option> 
<option value="WI">Wisconsin</option> 
<option value="WY">Wyoming</option>

    </select>
    </p>
  <p><span id="sprytextfield5">
    <label for="zip">Zip</label>
    <input type="text" name="zip" id="zip" />
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
  <p><span id="sprytextfield7">
    <label for="homephone">Home Phone</label>
    <input type="text" name="homephone" id="homephone" />
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
  <p><span id="sprytextfield8">
    <label for="bizphone">Business Phone</label>
    <input type="text" name="bizphone" id="bizphone" />
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
  <p><span id="sprytextfield9">
    <label for="cellphone">Cell Phone</label>
    <input type="text" name="cellphone" id="cellphone" />
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
  <p><span id="sprytextfield22">
  <label for="email">Email</label>
  <input type="text" name="email" id="email" />
  <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></p>
  <p><span id="sprytextfield10">
    <label for="Occupation">Occupation</label>
    <input type="text" name="Occupation" id="Occupation" />
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
  <p><span id="sprytextfield11">
    <label for="yearsatjob">Years at Job</label>
    <input type="text" name="yearsatjob" id="yearsatjob" />
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
  <p><span id="sprytextfield12">
    <label for="employer">Employer</label>
    <input type="text" name="employer" id="employer" />
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
  <p><label for="file_upload">Upload a Picture of the Nominee<br/><small>(please ensure your picture file is named after the nominee, or we will not be able to process your application.</small></label><input id="file_upload" name="file_upload" type="file" /><br/>
  </p>
  </fieldset>
<br/>
<fieldset><legend>Affiliations</legend><Br/>
  <span id="sprytextfield13">
  <label for="church">Church (not required)</label>
  <input type="text" name="church" id="church" />
</span>
  <p><span id="sprytextarea1">
    <label for="memberships">Memberships / Organizations</label>
    <textarea name="memberships" id="memberships" cols="45" rows="5"></textarea>
    <span class="textareaRequiredMsg">A value is required.</span></span></p>
  <p><span id="sprytextarea2">
    <label for="community">Community Involvement</label>
    <textarea name="community" id="community" cols="45" rows="5"></textarea>
    <span class="textareaRequiredMsg">A value is required.</span></span></p>
  <p><span id="sprytextfield14">
    <label for="awards">Other Awards</label>
    <input type="text" name="awards" id="awards" />
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
</fieldset>
<br/>
<fieldset><legend>Nominator</legend><br/>
  <span id="sprytextfield15">
  <label for="nominatorname">Name (Last, First)</label>
  <input type="text" name="nominatorname" id="nominatorname" />
  <span class="textfieldRequiredMsg">A value is required.</span></span>
  
  <p><span id="sprytextfield16">
    <label for="nominatoraddress">Address</label>
    <input type="text" name="nominatoraddress" id="nominatoraddress" />
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
  <p><span id="sprytextfield17">
    <label for="nominatorcity">City</label>
    <input type="text" name="nominatorcity" id="nominatorcity" />
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
  <p>
    <label for="nominatorstate">State</label>
    <select name="nominatorstate" id="nominatorstate">
    <option value="" selected="selected">Select a State</option> 
<option value="AL">Alabama</option> 
<option value="AK">Alaska</option> 
<option value="AZ">Arizona</option> 
<option value="AR">Arkansas</option> 
<option value="CA">California</option> 
<option value="CO">Colorado</option> 
<option value="CT">Connecticut</option> 
<option value="DE">Delaware</option> 
<option value="DC">District Of Columbia</option> 
<option value="FL">Florida</option> 
<option value="GA">Georgia</option> 
<option value="HI">Hawaii</option> 
<option value="ID">Idaho</option> 
<option value="IL">Illinois</option> 
<option value="IN">Indiana</option> 
<option value="IA">Iowa</option> 
<option value="KS">Kansas</option> 
<option value="KY">Kentucky</option> 
<option value="LA">Louisiana</option> 
<option value="ME">Maine</option> 
<option value="MD">Maryland</option> 
<option value="MA">Massachusetts</option> 
<option value="MI">Michigan</option> 
<option value="MN">Minnesota</option> 
<option value="MS">Mississippi</option> 
<option value="MO">Missouri</option> 
<option value="MT">Montana</option> 
<option value="NE">Nebraska</option> 
<option value="NV">Nevada</option> 
<option value="NH">New Hampshire</option> 
<option value="NJ">New Jersey</option> 
<option value="NM">New Mexico</option> 
<option value="NY">New York</option> 
<option value="NC">North Carolina</option> 
<option value="ND">North Dakota</option> 
<option value="OH">Ohio</option> 
<option value="OK">Oklahoma</option> 
<option value="OR">Oregon</option> 
<option value="PA">Pennsylvania</option> 
<option value="RI">Rhode Island</option> 
<option value="SC">South Carolina</option> 
<option value="SD">South Dakota</option> 
<option value="TN">Tennessee</option> 
<option value="TX">Texas</option> 
<option value="UT">Utah</option> 
<option value="VT">Vermont</option> 
<option value="VA">Virginia</option> 
<option value="WA">Washington</option> 
<option value="WV">West Virginia</option> 
<option value="WI">Wisconsin</option> 
<option value="WY">Wyoming</option>
    </select>
  </p>
  <p><span id="sprytextfield18">
    <label for="nominatorzip">Zip</label>
    <input type="text" name="nominatorzip" id="nominatorzip" />
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
  <p><span id="sprytextfield19">
    <label for="nominatorphone">Telephone</label>
    <input type="text" name="nominatorphone" id="nominatorphone" />
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
  <p><span id="sprytextfield20">
  <label for="nominatoremail">Email</label>
  <input type="text" name="nominatoremail" id="nominatoremail" />
  <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></p>
  <p><span id="sprytextfield21">
    <label for="nominatorrelationship">Relationship to Nominee</label>
    <input type="text" name="nominatorrelationship" id="nominatorrelationship" />
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
</fieldset>
<br/>
<fieldset><legend>Qualifying Nomination Category</legend>
  <div id="spryradio1">
  (select one)<br/>
    <table width="400">
      <tr>
        <td><label>
          <input type="radio" name="qualifyingnomination" value="solowarrior" id="qualifyingnomination_0" />
          Solo Warrior Award</label></td>
      </tr>
      <tr>
        <td><label style="width: 250px">
          <input type="radio" name="qualifyingnomination" value="fatherhoodforever" id="qualifyingnomination_1" />
          Fatherhood Forever Award</label></td>
      </tr>
      <tr>
        <td><label>
          <input type="radio" name="qualifyingnomination" value="villagedad" id="qualifyingnomination_2" />
          Village Dad Award</label></td>
      </tr>
      <tr>
        <td><label>
          <input type="radio" name="qualifyingnomination" value="Love Cares Award" id="qualifyingnomination_3" />
          Love Cares Award</label></td>
      </tr>
      <tr>
        <td><label>
          <input type="radio" name="qualifyingnomination" value="livinglegacy" id="qualifyingnomination_4" />
          Living Legacy Award</label></td>
      </tr>
    </table>
    <span class="radioRequiredMsg">Please make a selection.</span></div>
    </fieldset>
    <br/>
    
    <fieldset><legend>Status</legend><br/>
    
      <div id="spryradio2">
        <table width="400">
          <tr>
            <td><label>
              <input type="radio" name="status" value="married" id="status_0" />
              Married</label></td>
          </tr>
          <tr>
            <td><label>
              <input type="radio" name="status" value="singleparent" id="status_1" />
              Single Parent</label></td>
          </tr>
          <tr>
            <td><label>
              <input type="radio" name="status" value="divorced" id="status_2" />
              Divorced</label></td>
          </tr>
          <tr>
            <td><label>
              <input type="radio" name="status" value="villagedad" id="status_3" />
              Village Dad</label></td>
          </tr>
          <tr>
            <td><label>
              <input type="radio" name="status" value="widower" id="status_4" />
              Widower</label></td>
          </tr>
          <tr>
            <td><label style="width: 250px">
              <input type="radio" name="status" value="custodialfather" id="status_5" />
              Primary Custodial Father</label></td>
          </tr>
          <tr>
            <td><label>
              <input type="radio" name="status" value="jointcustodial" id="status_6" />
              Radio</label></td>
          </tr>
        </table>
        <span class="radioRequiredMsg">Please make a selection.</span></div>
        <br/><br/>
        <span id="sprytextfield23">
        <label for="numberofchildren">Number of Children</label>
        <input type="text" name="numberofchildren" id="numberofchildren" />
        <span class="textfieldRequiredMsg">A value is required.</span></span>
        
        
        
        <p><span id="sprytextarea3">
          <label for="agesandsexofchildren">Ages / Sex of Children <br/><small>(list all)</small></label>
          <textarea name="agesandsexofchildren" id="agesandsexofchildren" cols="45" rows="5"></textarea>
          <span class="textareaRequiredMsg">A value is required.</span></span></p>
        
        <p><span id="sprytextfield24">
          <label for="grandchildren">Number of Grandchildren</label>
          <input type="text" name="grandchildren" id="grandchildren" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></p>
        <p><span id="sprytextarea4">
          <label for="">Ages / Sex of Grandchildren</label>
          <textarea name="agesandsexofgrandchildren" id="agesandsexofgrandchildren" cols="45" rows="5"></textarea>
          <span class="textareaRequiredMsg">A value is required.</span></span></p>
          
          
    </fieldset>
    <Br/>
    <fieldset><legend>Essay</legend>
    
    Please enter an essay below in 300 words or less, explaining why you believe this father deserves recognition in the marked category. Please emphasize how the nominee is or has been involved in the life/lives of his children or grandchildren. Give us examples of actions and deeds of the father which allows the readers to know his character, his nurturing spirit, and his attributes which correspond to the category description. (Please do NOT use the last name, any title: e.g. bishop, senator, principal, etc., or name of business and affiliations when describing your nominee. If you do so, it may lead to disqualification. Please upload a photo of the nominee ONLY.  All material will become the property of the Mablean Ephriam Foundation. All nominees are expected to be present and will be recognized at the brunch and in the souvenier journal. 
    <p>
    
      <span id="sprytextarea5">
      <label for="essay">Essay</label>
      <textarea name="essay" id="essay" cols="45" rows="10"></textarea>
      <span id="countsprytextarea5">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span>
    </fieldset>
    
    <p>Thank you for your interest in the HUF Awards. We look forward to seeing you and your family on Sunday June 19, 2011 at the Hyatt Regency Hotel 200 So. Pine St. Long Beach, CA 90802.
</p>
<p>
<?      require_once('recaptchalib.php');
  $publickey = "6LeC08MSAAAAAMCbzQshpIKJp9XK3TMI3BjI17eM"; // you got this from the signup page
  //echo recaptcha_get_html($publickey);
?><br/>
      <input name="submit" type="submit" value="Submit" />
    </p>
  </form>
  </p>


</div>
	
</div> <!-- END CONTENT-->


</div> <!-- END MAIN CONTENT HOLDER-->


	
</div>	<!-- END BACKGROUND-->

<div id="footer">
<?  include("footer.html");?>
</div>
	
</div> <!-- END CONTAINER-->
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10");
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11");
var sprytextfield12 = new Spry.Widget.ValidationTextField("sprytextfield12");
var sprytextfield13 = new Spry.Widget.ValidationTextField("sprytextfield13", "none", {isRequired:false});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2");
var sprytextfield14 = new Spry.Widget.ValidationTextField("sprytextfield14");
var sprytextfield15 = new Spry.Widget.ValidationTextField("sprytextfield15");
var sprytextfield16 = new Spry.Widget.ValidationTextField("sprytextfield16");
var sprytextfield17 = new Spry.Widget.ValidationTextField("sprytextfield17");
var sprytextfield18 = new Spry.Widget.ValidationTextField("sprytextfield18");
var sprytextfield19 = new Spry.Widget.ValidationTextField("sprytextfield19");
var sprytextfield20 = new Spry.Widget.ValidationTextField("sprytextfield20", "email");
var sprytextfield21 = new Spry.Widget.ValidationTextField("sprytextfield21");
var sprytextfield22 = new Spry.Widget.ValidationTextField("sprytextfield22", "email");
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1");
var spryradio2 = new Spry.Widget.ValidationRadio("spryradio2");
var sprytextfield23 = new Spry.Widget.ValidationTextField("sprytextfield23");
var sprytextarea3 = new Spry.Widget.ValidationTextarea("sprytextarea3");
var sprytextfield24 = new Spry.Widget.ValidationTextField("sprytextfield24");
var sprytextarea4 = new Spry.Widget.ValidationTextarea("sprytextarea4");
var sprytextarea5 = new Spry.Widget.ValidationTextarea("sprytextarea5", {maxChars:350, counterType:"chars_count", counterId:"countsprytextarea5"});
</script>
</body>
</html>
