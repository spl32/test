<html><head><title>LOL CMS</title></head>
<body>
<?php

if(!@preg_match('/^[a-z0-9]+$/i', $_GET['p'])) $_GET['p'] = 'main';

$filename = "pages/$_GET[p].php";
if (file_exists($filename)) @include("pages/$_GET[p].php");
else echo 'page not found';

?>
</body></html>