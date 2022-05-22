<?php /** @var $field \GDO\Date\GDT_DateTime **/
?>
<div class="form-group <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label class="form-label"><?= $field->renderLabel(); ?></label>
  <input
   class="form-control"
   <?=$field->htmlFormName()?>
   <?=$field->htmlDisabled()?>
   <?=$field->htmlRequired()?>
   value="<?=tt($field->getVar(), 'parse')?>"
   autocomplete="off"
   type="text" />
   <?=$field->htmlError()?>
</div>
