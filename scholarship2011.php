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
		height: 1700px;
		}
	div.background {
		height: 1919px;
		}
	
	</style>

		<meta name="description" content="H.U.F. Awards and Scholarship Brunch. Honoring UnSung Fathers. Sponsored by
		The Mablean Ephriam Foundation">

		<META name="keywords" content="Judge Mablean Ephriam, Divorce Court, HUF Awards, Honoring UnSung Fathers, Los Angeles African American Awards,
		Los Angeles Award Ceremonies, Award Ceremony, MEF Foundation, Father's Day Awards, awards for fathers, scholarships in los angeles, scholarships for fatherss,
		">
			
    <script type="text/javascript" src="js/swfobject.js"></script>
    <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>H.U.F. Awards - Honoring UnSung Fathers</title>
	
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
</head>

<body>

<div id="container">
<div class="background">
	
<div class="header">
<div class="awards_date">June 19, 2011 - Long Beach, CA</div>	
	
</div>	


<div class="main_content_holder"><div class="sidenav">
	
<?  include("nav.html");?>
	
</div>	<!-- END SIDE NAV-->


<div class="content">
<img src="images/scholarshipapplication.gif" width="400" height="24" alt="Scholarships">
<h3 style="color:red;">Deadline: May 13, 2011</h3>

<hr width="500" align="left">
<div class="scholarship_eligibility"><blockquote style="width: 570px;">
  <form id="form1" name="form1" method="post" action="mail_form.php">
    <fieldset>
      <legend>Basic Information</legend>
      <p>
        <label>Name</label>
          <input type="text" name="name" id="name" />
        
      </p>
      <p>
        <label>Address</label>
          <input type="text" name="address" id="address" />
        
      </p>
      <p><span id="spry_homephone">
      <label>Home Phone</label>
        <input type="text" name="homephone" id="homephone" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></p>
      <p><span id="spry_bizphone">
      <label>Business Phone</label>
        <input type="text" name="biz_phone" id="biz_phone" />

      <span class="textfieldRequiredMsg">A value is required.</span></span></p>
      <p><span id="spry_bizphone2"><span id="spry_cellphone">
      <label>Cell Phone</label>
        <input type="text" name="cellphone" id="cellphone" />

      <span class="textfieldRequiredMsg">A value is required.</span></span><span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></p>
      <p><span id="spry_email">
        <label>Email</label>
          <input type="text" name="email" id="email" />

        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid email.</span></span> </p>
    </fieldset>
    <p>&nbsp;</p>
    <fieldset>
      <legend>Education</legend>
      <p>
        <label>High School Attended</label>
          <input type="text" name="highschool" id="highschool" />

      </p>
      <p>
        <label>G. P. A </label>
          <input type="text" name="gpa" id="gpa" />

      </p>
      <p>
        <label>Rank in Class</label>
          <input type="text" name="rankinclass" id="rankinclass" />

      </p>
      <p>
        <label>College to Attend / Attending</label>
          <input type="text" name="college" id="college" />

      </p>
      <p>
        <label>Major / Intended Major</label>
          <input type="text" name="major" id="major" />

      </p>
      <p>
        <label>Awards / Honors</label>
          <textarea name="awards" id="awards" cols="45" rows="5"></textarea>

  </p>
      
   
    </fieldset>
        <p>&nbsp;</p>
    <fieldset>
        <legend>Activities</legend>
        <p>
          <label>Hobbies / Interests</label>
            <textarea name="hobbies" id="hobbies" cols="45" rows="5"></textarea>

        </p>
        <p>
          <label>Extra-Curricular Activities</label>
            <textarea name="activities" id="activities" cols="45" rows="5"></textarea>

        </p>
        <p>
          <label>Community Activities</label>
            <textarea name="community" id="community" cols="45" rows="5"></textarea>

        </p>
    </fieldset>
        <p>&nbsp;</p>
      <fieldset>
        <legend>Financial / Employment</legend>
        <p>
          <label>Annual Income of Family</label>
            <input type="text" name="annualincome" id="annualincome" />

        </p>
        <p>
          <label>Your Annual Income (If any)</label>
            <input type="text" name="yourincome" id="yourincome" />

        </p>
        <p>
          <label>Employer</label>
            <input type="text" name="employer" id="employer" />

        </p>
      </fieldset>
      
         <p>&nbsp;</p>
<p><strong>ALL APPLICANTS: </strong></p>
<p>Please attach an essay of no more than two pages, typewritten, double spaced, stating why you want to go to college; what you plan to do with your college education to improve the quality of life for all citizens; what distinguishes you from other applicants; why should you be awarded this scholarship.</p>
<p><strong>FOR APPLICANTS 20 TO 35 YEARS OF AGE:</strong></p>
<p>Please tell us what you have been doing with your life since high school graduation; why you did not go to college after high school graduation and your motivation to go to college now.DEADLINE FOR SUBMISSION:  must be received in mail or by fax no later than May 13, 2011 at 5 P.M. close of business day. NO EXCEPTIONS.</p>
<p>

<p onmouseover="MM_validateForm('name','','R','address','','R','email','','R','highschool','','R','gpa','','R','rankinclass','','R','annualincome','','R','yourincome','','R','employer','','R','awards','','R','hobbies','','R','activities','','R','community','','R');return document.MM_returnValue">
</p>

<p>
<?      require_once('recaptchalib.php');
  $publickey = "6LeC08MSAAAAAMCbzQshpIKJp9XK3TMI3BjI17eM"; // you got this from the signup page
  echo recaptcha_get_html($publickey);
?><br/>
      <input name="submit" type="submit" value="Submit" />
</p>
      

  </form>
  </p>


	</blockquote>
</div>
	
</div> <!-- END CONTENT-->


</div> <!-- END MAIN CONTENT HOLDER-->


	
</div>	<!-- END BACKGROUND-->

<div id="footer">
<?  include("footer.html");?>
</div>
	
</div> <!-- END CONTAINER-->

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("spry_email", "email", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("spry_homephone", "none", {validateOn:["blur", "change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("spry_bizphone", "none", {validateOn:["blur", "change"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("spry_cellphone", "none", {validateOn:["blur", "change"]});
</script>
</body>
</html>
