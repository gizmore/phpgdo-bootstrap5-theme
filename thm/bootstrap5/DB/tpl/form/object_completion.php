<?php
use GDO\Core\GDT_Object;
/** @var $field GDT_Object **/
?>
<div
 data-gdt-config='<?=$field->displayConfigJSON()?>'
 class="form-group gdo-autocomplete <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label class="form-label" <?=$field->htmlForID()?>><?= $field->renderLabel(); ?></label>
  <input
   <?=$field->htmlID()?>
   <?=$field->htmlAutocompleteOff()?>
   class="form-control gdo-autocomplete-input"
   type="text"
   <?=$field->htmlFormName()?>
   <?=$field->htmlDisabled()?>
   <?=$field->htmlRequired()?>
   value="<?=$field->display()?>" />
  <input type="hidden" id="nocompletion_<?=$field->name?>" name="nocompletion_<?=$field->name?>" value="1" />
  <input type="hidden" id="completion-<?=$field->name?>" />
  <?=$field->htmlError()?>
</div>
