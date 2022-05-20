<?php
use GDO\UI\GDT_Tooltip;
/** @var $field GDT_Tooltip **/
$text = t($field->iconText, $field->iconTextArgs);
$text = str_replace('"', "'", $text);
?>
<button
 type="button"
 class="gdo-icon"
 title="<?=$text?>"
 data-html="true"
 data-toggle="tooltip"
 <?=$field->htmlAttributes()?>><i class="fa fa-question-circle"></i></button>
 