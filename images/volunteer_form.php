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
<script src="SpryAssets/SpryValidationCheckbox.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
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
<link href="SpryAssets/SpryValidationCheckbox.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
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
<img src="images/volunteer_header.gif" width="400" height="24" alt="Scholarships">
<hr width="500" align="left">
<div class="scholarship_eligibility">
<h1>H.U.F. Awards and Scholarship Brunch</h1>
<h2>Volunteer Application</h2><h3>Notes:</h3>
<ul>
<li style="color: red;">Application must be received by May 27, 2011</li>
</ul>
  <form action="mail_form_nominations.php" method="post" enctype="multipart/form-data" name="form1" id="form1">  
  <fieldset>
    <legend>Contact Information</legend>
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
  <p><span id="sprytextarea2">
    <label for="medical">Any Medical Concerns?</label>
    <textarea name="medical" id="medical" cols="45" rows="5"></textarea>
    <span class="textareaRequiredMsg">A value is required.</span></span><br/>
  </p>
  </fieldset>
<br/>
<fieldset>
  <legend>Assignment Area of Interest</legend>
  <p><em>(Choose three and rate them, from 1 to 3)</em></p>
  <p>
	<span id="sprytextfield10">
    <input name="area1" type="text" class="lebelleft" id="area1" size="3" maxlength="1" />
    <label for="area1">Red Carpet Attendant</label>
<span class="textfieldInvalidFormatMsg">Invalid format.</span></span>
</p>
<br/>
<p>
  <span id="sprytextfield11">
  <input name="area2" type="text" class="lebelleft" id="area2" size="3" maxlength="1" />
  <label for="area2">Media Check-In</label>
<span class="textfieldInvalidFormatMsg">Invalid format.</span></span> </p>
  <br/><p>
    <span id="sprytextfield12">
    <input name="area3" type="text" class="lebelleft" id="area3" size="3" maxlength="1" />
    <label for="area3">Spotters</label>
<span class="textfieldInvalidFormatMsg">Invalid format.</span></span> </p>
<br/><p>
  <span id="sprytextfield13">
  <input name="area4" type="text" class="lebelleft" id="area4" size="3" maxlength="1" />
  <label for="area4">VIP Escort Supervisor</label>
<span class="textfieldInvalidFormatMsg">Invalid format.</span></span> </p><br/>
  <p>
    <span id="sprytextfield14">
    <input name="area5" type="text" class="lebelleft" id="area5" size="3" maxlength="1" />
    <label for="area5">VIP Escort</label>
<span class="textfieldInvalidFormatMsg">Invalid format.</span></span> </p><br/>
    <p>
      <span id="sprytextfield23">
      <input name="area6" type="text" class="lebelleft" id="area6" size="3" maxlength="1" />
      <label for="area6">Personal Assistant Supervisor</label>
<span class="textfieldInvalidFormatMsg">Invalid format.</span></span> </p><br/>
      <p>
      
        <span id="sprytextfield24">
        <input name="area7" type="text" class="lebelleft" id="area7" size="3" maxlength="1" />
        <label for="area7">Personal Assistant</label>
<span class="textfieldInvalidFormatMsg">Invalid format.</span></span> </p><br/>
        <p>
          <span id="sprytextfield25">
          <input name="area8" type="text" class="lebelleft" id="area8" size="3" maxlength="1" />
          <label for="area8">Award Recipient Escort</label>
<span class="textfieldInvalidFormatMsg">Invalid format.</span></span> </p><br/>
          <p>
            <span id="sprytextfield26">
            <input name="area9" type="text" class="lebelleft" id="area9" size="3" maxlength="1" />
            <label for="area9">Vendor Coordinator</label>
<span class="textfieldInvalidFormatMsg">Invalid format.</span></span> </p><br/>       <p>
              <span id="sprytextfield27">
              <input name="area10" type="text" class="inputleft" id="area10" size="3" maxlength="1" />
              <label for="area10">Registration/Check-In</label>
<span class="textfieldInvalidFormatMsg">Invalid format.</span></span> </p><br/><p>
                <span id="sprytextfield28">
                <input name="area11" type="text" class="inputleft" id="area11" size="3" maxlength="1" />
                <label for="area11">Runner</label>
<span class="textfieldInvalidFormatMsg">Invalid format.</span></span> </p><br/><p>
                  <span id="sprytextfield29">
                  <input name="area12" type="text" class="inputleft" id="area12" size="3" maxlength="1" />
                  <label for="area12">Floater</label>
<span class="textfieldInvalidFormatMsg">Invalid format.</span></span> </p>
                  <br/>
                  <p>
                    <span id="sprytextfield30">
                    <input name="area13" type="text" class="inputleft" id="area13" size="3" maxlength="1" />
                    <span class="textfieldInvalidFormatMsg">Invalid format.</span>
                    <label for="area13">Security Assistant or Personnel</label>
</span> </p>
</fieldset>
<br/>
<fieldset>
  <legend>Special Skills or Qualifications</legend><br/>
 
Summarize any skills or qualifications which you have acquired from employment, previous volunteer work, or other activities, including hobbies or sports which best prepares you for the assignment requested.
<br/><br/>
<span id="sprytextarea1">
<textarea name="skills" id="skills" cols="45" rows="5"></textarea>
<span class="textareaRequiredMsg">A value is required.</span></span>
</fieldset>
<br/>
<fieldset>
  <legend>Prior Volunteer Experience</legend>
  <p>
  <span id="sprycheckbox1">
  <input type="checkbox" name="HUFpriorexperience" id="HUFpriorexperience" />
  Mablean Ephriam Foundation / H.U.F.<span class="checkboxRequiredMsg">Please make a selection.</span></span>
  </p>
  <p>
    <span id="sprytextfield31">
    <input name="hufexperienceyear" type="text" id="hufexperienceyear" size="4" maxlength="4" />
    Year<span class="textfieldRequiredMsg">A value is required.</span></span> </p>
  <p><span id="sprycheckbox2">
    <input type="checkbox" name="otherorganizations" id="otherorganizations" />
    Other Organizations / Groups<span class="checkboxRequiredMsg">Please make a selection.</span></span></p>
</fieldset>
    <br/>
    <fieldset>
    <legend>How did you hear about MEF/HUF Awards / Brunch</legend>
    <div id="spryradio1">
      <table width="200">
        <tr>
          <td><label>
            <input type="radio" name="howdidyouhear" value="radio" id="howdidyouhear_0" />
            Radio</label></td>
        </tr>
        <tr>
          <td><label>
            <input type="radio" name="howdidyouhear" value="tv" id="howdidyouhear_1" />
            TV</label></td>
        </tr>
        <tr>
          <td><label>
            <input type="radio" name="howdidyouhear" value="internet" id="howdidyouhear_2" />
            Internet</label></td>
        </tr>
        <tr>
          <td><label>
            <input type="radio" name="howdidyouhear" value="mail" id="howdidyouhear_3" />
            Mail</label></td>
        </tr>
        <tr>
          <td><label>
            <input type="radio" name="howdidyouhear" value="familyfriend" id="howdidyouhear_4" />
            Familiy Friend</label></td>
        </tr>
        <tr>
          <td><label>
            <input type="radio" name="howdidyouhear" value="other" id="howdidyouhear_5" />
            Other</label></td>
        </tr>
      </table>
      <span class="radioRequiredMsg">Please make a selection.</span></div>
    <p>&nbsp;</p>
    </fieldset>
    <Br/>
    <fieldset>
      <legend>Emergency Contact</legend>
      <p><span id="sprytextfield34">
        <label for="emergencyname">Name (first/last)</label>
        <input type="text" name="emergencyname" id="emergencyname" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></p>
      <p><span id="sprytextfield35">
        <label for="emergencyrelationship">Relationship</label>
        <input type="text" name="emergencyrelationship" id="emergencyrelationship" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></p>
      <p><span id="sprytextfield36">
        <label for="emergencyhomephone">Home Phone</label>
        <input type="text" name="emergencyhomephone" id="emergencyhomephone" />
</span></p>
      <p><span id="sprytextfield37">
        <label for="emergencycellphone">Cell Phone</label>
        <input type="text" name="emergencycellphone" id="emergencycellphone" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></p>
      <p>&nbsp;</p>
    </fieldset>
    
    <p>VOLUNTEER POSITIONS ARE NOT PAID. The Mablean Ephriam Foundation does not provide transportation or hotel accommodations for volunteers. A meal will be provided on the day of the event. MEF will provide a letter of reference acknowledging your participation in the event, as well as a Certificate, a MEF T-shirt and an invitation to the H.U.F. awards post-reception.</p>
    <p>
      MEF appreciates your willingness to serve and thanks you in advance, for your much needed assistance.</p><p>
      By submitting this application, I affirm that the facts set forth in it are true and complete. I understand that if I am accepted as a volunteer, assignment preferences will be considered, but are not guaranteed. Assignments are made on a skill/ needs basis.</p>
    <p>
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
var sprytextfield15 = new Spry.Widget.ValidationTextField("sprytextfield15");
var sprytextfield16 = new Spry.Widget.ValidationTextField("sprytextfield16");
var sprytextfield17 = new Spry.Widget.ValidationTextField("sprytextfield17");
var sprytextfield18 = new Spry.Widget.ValidationTextField("sprytextfield18");
var sprytextfield19 = new Spry.Widget.ValidationTextField("sprytextfield19");
var sprytextfield20 = new Spry.Widget.ValidationTextField("sprytextfield20", "email");
var sprytextfield21 = new Spry.Widget.ValidationTextField("sprytextfield21");
var sprytextfield22 = new Spry.Widget.ValidationTextField("sprytextfield22", "email");
var sprytextarea5 = new Spry.Widget.ValidationTextarea("sprytextarea5", {maxChars:350, counterType:"chars_count", counterId:"countsprytextarea5"});
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10", "integer", {isRequired:false});
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11", "integer", {isRequired:false});
var sprytextfield12 = new Spry.Widget.ValidationTextField("sprytextfield12", "integer", {isRequired:false});
var sprytextfield13 = new Spry.Widget.ValidationTextField("sprytextfield13", "integer", {isRequired:false});
var sprytextfield14 = new Spry.Widget.ValidationTextField("sprytextfield14", "integer", {isRequired:false});
var sprytextfield23 = new Spry.Widget.ValidationTextField("sprytextfield23", "integer", {isRequired:false});
var sprytextfield24 = new Spry.Widget.ValidationTextField("sprytextfield24", "integer", {isRequired:false});
var sprytextfield25 = new Spry.Widget.ValidationTextField("sprytextfield25", "integer", {isRequired:false});
var sprytextfield26 = new Spry.Widget.ValidationTextField("sprytextfield26", "integer", {isRequired:false});
var sprytextfield27 = new Spry.Widget.ValidationTextField("sprytextfield27", "integer", {isRequired:false});
var sprytextfield28 = new Spry.Widget.ValidationTextField("sprytextfield28", "integer", {isRequired:false});
var sprytextfield29 = new Spry.Widget.ValidationTextField("sprytextfield29", "integer", {isRequired:false});
var sprytextfield30 = new Spry.Widget.ValidationTextField("sprytextfield30", "integer", {isRequired:false});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprycheckbox1 = new Spry.Widget.ValidationCheckbox("sprycheckbox1");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield31 = new Spry.Widget.ValidationTextField("sprytextfield31");
var sprycheckbox2 = new Spry.Widget.ValidationCheckbox("sprycheckbox2");
var sprytextfield32 = new Spry.Widget.ValidationTextField("sprytextfield32");
var sprytextfield33 = new Spry.Widget.ValidationTextField("sprytextfield33");
var sprytextfield34 = new Spry.Widget.ValidationTextField("sprytextfield34");
var sprytextfield35 = new Spry.Widget.ValidationTextField("sprytextfield35");
var sprytextfield36 = new Spry.Widget.ValidationTextField("sprytextfield36", "none", {isRequired:false});
var sprytextfield37 = new Spry.Widget.ValidationTextField("sprytextfield37");
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1");
var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2");
</script>
</body>
</html>
