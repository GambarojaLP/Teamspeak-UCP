<?php

$wronghtml = str_get_html('<div class="alert alert-danger"><strong>Danger!</strong> Indicates a dangerous or potentially negative action.</div>');
$truehtml = str_get_html('<div class="alert alert-success"><strong>Erfolgreich</strong> Das Captcha wurde erfolgreich validiert.</div>');
if ($_GET['error'] == '2') {
    echo $wronghtml;
}
if ($_GET['cpt-success'] == '1') {
    echo $truehtml;
}
