<?php
use GDO\Form\GDT_Submit;
/** @var $field GDT_Submit **/
$classes = [
	'btn-primary',
	'btn-outline-success',
	'btn-outline-danger',
];
$field->addClass('btn');
$field->addClass($classes[$field->priority]);
?>
<input
 type="submit"
 name="<?=$field->formName()?>"
 value="<?=$field->renderLabel()?>"
 <?=$field->htmlAttributes()?>
 <?=$field->htmlDisabled()?> /></input>
