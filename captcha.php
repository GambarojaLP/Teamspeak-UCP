<?php
    require_once "includes/recaptchalib.php";
    require_once "includes/config.php";
  foreach ($_POST as $key => $value) {
    echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
  }

  $response = null;
  $reCaptcha = new ReCaptcha($secret);
  // if submitted check response
  if ($_POST["g-recaptcha-response"]) {
      $response = $reCaptcha->verifyResponse(
          $_SERVER["REMOTE_ADDR"],
          $_POST["g-recaptcha-response"]
      );
  }

/*
  if ($response != null && $response->success) {
    echo "Validated.";
  } else {
      echo "Captcha wasnt clicked";
  }
*/

?>



<!DOCTYPE html>
<html lang="en">
  <head>
      <script src="js/sweetalert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <title>How to Integrate Google “No CAPTCHA reCAPTCHA” on Your Website</title>
  </head>

  <body>



      <!-- Disable Submit Button
      <script type="text/JavaScript">
      document.addEventListener('load', function() {
        document.getElementById('submitcaptcha').setAttributeNode('disabled');

      });
      </script>

-->

      <!-- Enable Submit Button (Func)
      <script type="text/JavaScript">
        function enableBtn(){
            document.getElementById("submitcaptcha").removeAttribute("disabled");
        }
      </script>
  -->


      <!-- Testing around with Captcha Check -->
<script type="text/JavaScript">
function checkre() {
            var googleResponse = jQuery('#g-recaptcha-response').val();
        if (!googleResponse) {
            $('<p style="color:red !important" class=error-captcha"><span class="glyphicon glyphicon-remove " ></span> Please fill up the captcha.</p>" ').insertAfter("#html_element");
            return false;
        } else {

            return true;
        }
}
</script>

    <form id="formtest" action="" method="post" onsubmit="checkre()">
      <label for="name">Name:</label>
      <input name="name" required><br />

      <label for="email">Email:</label>
      <input name="email" type="email" required><br />

	  <!-- Insert your Public Key inside the data-sitekey -->
      <div class="g-recaptcha" data-sitekey="" data-callback="enableBtn"></div>

      <button type="submit" id="submitcaptcha">Abschicken</button>

    </form>

    <!--js-->
    <script src='https://www.google.com/recaptcha/api.js'></script>

  </body>
</html>
