<?php
namespace GDO\Bootstrap5Theme\thm\bs5\Core\tpl;
/** @var $field \GDO\Core\GDT_Object **/
?>
<div class="gdt-container<?=$field->classError()?> gdo-autocomplete">
 <div class="form-label">
  <label<?=$field->htmlForID()?>><?=$field->renderLabel()?></label>
 </div>
 <div class="inner-form-input">
<?=$field->htmlIcon()?>
 <span class="complete-input">
  <input
<?=$field->htmlAutocompleteOff()?>
<?=$field->htmlConfig()?>
<?=$field->htmlID()?>
   type="search"
   class="gdo-autocomplete-input form-control"
<?=$field->htmlFocus()?>
<?=$field->htmlPlaceholder()?>
<?=$field->htmlRequired()?>
<?=$field->htmlDisabled()?>
<?=$field->htmlName()?>
<?=$field->htmlValue()?> />
  <input type="hidden" id="nocompletion_<?=$field->name?>" name="nocompletion_<?=$field->name?>" value="1" />
  <input type="hidden" id="completion-<?=$field->name?>" <?=$field->htmlValue()?> />
 </span>
</div>
<?=$field->htmlError()?>
</div>
