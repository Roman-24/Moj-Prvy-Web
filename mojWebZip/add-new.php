<?php

$myfile = fopen("komenty.txt", "a") or die("Unable to open file!");

$meno = $_POST['meno'];
$datum = $_POST['datum'];
/*$mail = $_POST['email'];*/
$text = $_POST['sprava'];


$txt = $meno ."\n". $datum ."\n" /*. $mail ."\n"*/ . $text."\n";
fwrite($myfile, $txt);

fclose($myfile);

//echo "<a href='kontakt.php'>Click here</a>";
exit(header("Location: kontakt.php"));
?>