<?php
use GDO\Util\Strings;
/** @var $content string **/
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h1><?=sitename()?></h1>

<?=Strings::nl2brHTMLSafe($content)?>

</body>
</html>
