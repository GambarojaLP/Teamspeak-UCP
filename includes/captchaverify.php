<?php
function captchavalidation() {
    if ($_POST['g-recaptcha-response'] > 1) {
        trueredirect();
    }
    else {
        wrongredirect();
    }
}

$wrongurl = "../captcha.php?error=1";
$trueurl = "../captcha.php?success=1";

function trueredirect($trueurl)
{
    if (!headers_sent())
    {
        header('Location: ../captcha.php?success=1');
        exit;
        }
    else
        {
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$trueurl.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$trueurl.'" />';
        echo '</noscript>'; exit;
    }
}

function wrongredirect($wrongurl)
{
    if (!headers_sent())
    {
        header('Location: ../captcha.php?error=1');
        exit;
        }
    else
        {
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$wrongurl.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$wrongurl.'" />';
        echo '</noscript>'; exit;
    }
}

captchavalidation();
?>
