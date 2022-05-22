<?php
/** @var $field \GDO\DB\GDT_Object **/
?>
<div
 class="form-group <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label class="form-label" <?=$field->htmlForID()?>><?= $field->renderLabel(); ?></label>
  <input
   <?=$field->htmlID()?>
   class="form-control"
   type="number"
   step="1"
   <?=$field->htmlFormName()?>
   <?=$field->htmlDisabled()?>
   <?=$field->htmlRequired()?>
   value="<?=$field->display()?>" />
  <?= $field->htmlError(); ?>
</div>
