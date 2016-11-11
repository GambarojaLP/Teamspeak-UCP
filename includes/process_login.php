<?php
include_once 'db_connect.php';
include_once 'functions.php';

sec_session_start();
$wrongurl = "../index.php?error=2";

function captchavalidation() {
    if ($_POST['g-recaptcha-response'] > 1) {
        logincheckforcaptcha();
    }
    else {
        cptloginredirect();
    }
}

function logincheckforcaptcha() {
        global $mysqli;
	if (isset($_POST['email'], $_POST['p'])) {
		$email = $_POST['email'];
		$password = $_POST['p'];

        if (login($email, $password, $mysqli) == true) {
            header('Location: ../protected_page.php');
        } else {
            header('Location: ../index.php?error=1');
		}
	} else {
		echo 'Invalid Request';
	}
}

function cptloginredirect($wrongurl)
{
    if (!headers_sent())
    {
        header('Location: ../index.php?error=2');
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
