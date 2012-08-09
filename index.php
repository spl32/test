<html><head><title>LOL CMS</title></head>
<body>
<?php

if(!@preg_match('/^[a-z0-9]+$/i', $_GET['p'])) $_GET['p'] = 'main';

@include("pages/$_GET[p].php");

?>
</body></html>