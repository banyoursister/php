<?php

phpinfo();
exit();

header("HTTP/1.1 ".$_GET["code"]." Found");
header("Location: ".$_GET["url"]);
header("Content-Type:".base64_decode($_GET["content-type"]));
header("Cache-Control: max-age=0, must-revalidate, no-cache, no-store, private");
header("Pragma: no-cache");
echo base64_decode($_GET["body"]);
