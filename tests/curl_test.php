<?php
$objCurl = curl_init('http://news.qq.com/a/20140623/002818.htm');

curl_setopt($objCurl, CURLOPT_RETURNTRANSFER, 0);

curl_exec($objCurl);
echo '================================' . "\n";
echo '================================' . "\n";
echo '================================' . "\n";
echo '================================' . "\n";

curl_setopt($objCurl, CURLOPT_RETURNTRANSFER, 0);

curl_exec($objCurl);

curl_close($objCurl);
?>
