<?php

function captchavalidation()
{
    if ($_POST['g-recaptcha-response'] > 1) {
        trueredirect();
    } else {
        wrongredirect();
    }
}

$wrongurl = '../index.php?error=2';

function loginredirect($wrongurl)
{
    if (!headers_sent()) {
        header('Location: ../index.php?error=2');
        exit;
    } else {
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$wrongurl.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$wrongurl.'" />';
        echo '</noscript>';
        exit;
    }
}
captchavalidation();
