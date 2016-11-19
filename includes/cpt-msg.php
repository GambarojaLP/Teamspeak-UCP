<?php

$wronghtml = str_get_html('<div class="alert alert-danger"><strong>Danger!</strong> The Captcha was not Completed!</div>');
if ($_GET['error'] == '2') {
    echo $wronghtml;
}
