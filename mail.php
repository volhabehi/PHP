<?php
header("Content-Type: text/html; charset=UTF-8");
$to ='a@a.com';
$subject = 'Topic-x';
$massage = '<h2>Hello from Minsk</h2>';
$header = "From: AutoLinex <b@b.com>". "\r\n";
$header = "Content-Type: text/html; charset=UTF-8" . "\r\n";
if(mail($to, $subject, $massage, $header))
{
echo '<div style = "color = purple;"> Your massege done</div>';
}
else
{
echo '<div style = "color = red;"> Error 404 ! </div>';
}


?>
