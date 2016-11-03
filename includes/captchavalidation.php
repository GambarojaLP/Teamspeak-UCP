<?php
$wronghtml = str_get_html('<div class="alert alert-danger"><strong>Danger!</strong> Indicates a dangerous or potentially negative action.</div>');
$truehtml = str_get_html('<div class="alert alert-success"><strong>Erfolgreich</strong> Das Captcha wurde erfolgreich validiert.</div>');
if($_GET["error"] == "1") echo $wronghtml;
if($_GET["success"] == "1") echo $truehtml;


//Notiz an mich, diesen Code verwenden um die POST Ergebnisse auszugeben (Plain-Text)
/*
foreach ($_POST as $key => $value) {
echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
}
*/
?>
