<?php /** @var $field \GDO\Date\GDT_Duration **/ ?>
<div class="form-group <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label class="form-label" <?=$field->htmlForID()?>><?=$field->renderLabel()?></label>
  <input
   <?=$field->htmlID()?>
   class="form-control"
   type="text"
   autocomplete="off"
   <?=$field->htmlFormName()?>
   <?=$field->htmlDisabled()?>
   <?=$field->htmlRequired()?>
   value="<?=$field->getVar()?>" />
  <?=$field->htmlError()?>
</div>
