<?php
/** @var $field \GDO\Date\GDT_Date **/
?>
<div class="form-group <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label class="form-label"><?= $field->renderLabel(); ?></label>
  <input
   class="form-control"
   <?=$field->htmlFormName()?>
   <?=$field->htmlDisabled()?>
   <?=$field->htmlRequired()?>
   value="<?=tt($field->getVar(), 'day', '')?>"
   autocomplete="off"
   type="text" />
   <?=$field->htmlError()?>
</div>
 