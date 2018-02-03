<?php
// OPTIONS - PLEASE CONFIGURE THESE BEFORE USE!

$yourEmail = "efromfoundation@aol.com"; // the email address you wish to receive these mails through
$yourWebsite = "H.U.F. Awards"; // the name of your website
$thanksPage = 'scholarship_thanks.php'; // URL to 'thanks for sending mail' page; leave empty to keep message on the same page 
$maxPoints = 4; // max points a person can hit before it refuses to submit - recommend 4


// DO NOT EDIT BELOW HERE

$error_msg = null;
$result = null;

function isBot() {
	$bots = array("Indy", "Blaiz", "Java", "libwww-perl", "Python", "OutfoxBot", "User-Agent", "PycURL", "AlphaServer", "T8Abot", "Syntryx", "WinHttp", "WebBandit", "nicebot");
	
	$isBot = false;
	foreach ($bots as $bot)
	if (strpos($_SERVER['HTTP_USER_AGENT'], $bot) !== false)
		$isBot = true;

	if (empty($_SERVER['HTTP_USER_AGENT']) || $_SERVER['HTTP_USER_AGENT'] == " ")
		$isBot = true;
	
	exit("Bots not allowed.</p>");
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	function clean($data) {
		$data = trim(stripslashes(strip_tags($data)));
		return $data;
	}
	
	// lets check a few things - not enough to trigger an error on their own, but worth assigning a spam score.. 
	// score quickly adds up therefore allowing genuine users with 'accidental' score through but cutting out real spam :)
	$points = (int)0;
	
	$badwords = array("adult", "beastial", "bestial", "blowjob", "clit", "cum", "cunilingus", "cunillingus", "cunnilingus", "cunt", "ejaculate", "fag", "felatio", "fellatio", "fuck", "fuk", "fuks", "gangbang", "gangbanged", "gangbangs", "hotsex", "hardcode", "jism", "jiz", "orgasim", "orgasims", "orgasm", "orgasms", "phonesex", "phuk", "phuq", "porn", "pussies", "pussy", "spunk", "xxx", "viagra", "phentermine", "tramadol", "adipex", "advai", "alprazolam", "ambien", "ambian", "amoxicillin", "antivert", "blackjack", "backgammon", "texas", "holdem", "poker", "carisoprodol", "ciara", "ciprofloxacin", "debt", "dating", "porn", "link=", "voyeur");
	$exploits = array("content-type", "bcc:", "cc:", "document.cookie", "onclick", "onload", "javascript");

	foreach ($badwords as $word)
		if (strpos($_POST['comments'], $word) !== false)
			$points += 2;
	
	foreach ($exploits as $exploit)
		if (strpos($_POST['comments'], $exploit) !== false)
			$points += 2;
	
	if (strpos($_POST['comments'], "http://") !== false || strpos($_POST['comments'], "www.") !== false)
		$points += 2;
	if (isset($_POST['nojs']))
		$points += 1;
	if (preg_match("/(<.*>)/i", $_POST['comments']))
		$points += 2;
	if (strlen($_POST['name']) < 3)
		$points += 1;
	if (strlen($_POST['comments']) < 15 || strlen($_POST['comments'] > 1500))
		$points += 2;
	// end score assignments

	foreach ($_POST as $key => $value)
		$_POST[$key] = trim($value);
		
	require_once('recaptchalib.php');
 	$privatekey = "6LeC08MSAAAAAOj-Z8Piey_3rgQQTrY81cDW2mMm";
	$resp = recaptcha_check_answer ($privatekey,
    	$_SERVER["REMOTE_ADDR"],
        $_POST["recaptcha_challenge_field"],
        $_POST["recaptcha_response_field"]);

		
	
	if ($error_msg == NULL && $points <= $maxPoints && $resp->is_valid) {
		$subject = "H.U.F. Scholarship Application from Website";

		$message = "Someone filled out the HUF Scholarship Form on your website for 2011. Please review the application below: \n\n";
		foreach ($_POST as $key => $val) {
			$message .= ucwords($key) . ": " . clean($val) . "\r\n";
		}
		$message .= 'IP: '.$_SERVER['REMOTE_ADDR']."\r\n";
		$message .= 'Browser: '.$_SERVER['HTTP_USER_AGENT']."\r\n";
		$message .= 'Points: '.$points;

		if (strstr($_SERVER['SERVER_SOFTWARE'], "Win")) {
			$headers   = "From: $yourEmail \r\n";
			$headers  .= "Reply-To: {$_POST['email']}";
		} else {
			$headers   = "From: $yourWebsite <$yourEmail> \r\n";
			$headers  .= "Reply-To: {$_POST['email']}";
		}

		if (mail($yourEmail,$subject,$message,$headers)) {
			if (!empty($thanksPage)) {
				header("Location: $thanksPage");
				exit;
			} else {
				$result = 'Your mail was successfully sent.';
			}
		} else {
			$error_msg = 'Your mail could not be sent this time.';
		}
	} else {
		if (empty($error_msg))
			$error_msg = 'Your mail looks too much like spam, and could not be sent this time. ['.$points.']';
	}
}
function get_data($var) {
	if (isset($_POST[$var]))
		echo htmlspecialchars($_POST[$var]);
}

if ($error_msg != NULL) {
	echo '<p class="error">ERROR: '. nl2br($error_msg) . '
	<br/><br/>
	<a href="scholarship2011.php" target="_self">Try again</a>
	</p>';
}
?>
