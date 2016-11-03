<?php
    require_once "includes/dom.php";
    require_once "includes/recaptchalib.php";
    require_once "includes/config.php";
    require_once "includes/functions.php";
    require_once "includes/captchavalidation.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>How to Integrate Google “No CAPTCHA reCAPTCHA” on Your Website</title>
  </head>

  <body>
      <form id="formtest" method="post" action="includes/captchaverify.php">
            <label for="name">Name:</label>
            <input name="name" required><br />
            <label for="email">Email:</label>
            <input name="email" type="email" required><br />

            <div class="g-recaptcha" data-sitekey="6LddmRwTAAAAAN0MHGZjUYzxY95LTgVF48bjqtlM" data-callback="solved"></div>

            <button type="submit" id="submitcaptcha">Abschicken</button>
      </form>

      <!--js-->
      <script src='https://www.google.com/recaptcha/api.js'></script>

      </body>
 </html>
