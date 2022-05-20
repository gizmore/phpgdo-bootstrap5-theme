<?php
use GDO\UI\GDT_Badge;
/** @var $field GDT_Badge **/
$field->addClass('badge badge-primary');
?>
<span <?=$field->htmlAttributes()?>><?=$field->var?></span>
