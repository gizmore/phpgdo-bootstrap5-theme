<?php
/** @var $field GDT_AntiCSRF **/
?>
<input
 type="hidden"
 <?=$field->htmlFormName()?>
 value="<?=$field->csrfToken()?>"></input>
<?=$field->htmlError()?>