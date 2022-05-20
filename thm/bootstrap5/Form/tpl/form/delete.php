<?php /** @var \GDO\Form\GDT_DeleteButton $field **/ ?>
<input
 type="submit"
 onclick="return confirm('<?=t('confirm_delete')?>')"
 class="btn btn-secondary"
 <?=$field->htmlFormName()?>
 value="<?=$field->displayLabel()?>"
 <?=$field->htmlDisabled()?> /></input>
