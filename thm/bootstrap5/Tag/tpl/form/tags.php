<?php
use GDO\Tags\GDT_Tags;
/** @var $field GDT_Tags **/
?>
<div class="form-group <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label <?=$field->htmlForID()?>><?= $field->renderLabel(); ?></label>
  <input
   <?=$field->htmlID()?>
   class="form-control"
   type="text"
   data-role="tagsinput"
   <?=$field->htmlFormName()?>
   <?= $field->htmlDisabled(); ?>
   <?= $field->htmlRequired(); ?>
   value="<?= $field->getVar(); ?>" />
  <?=$field->htmlError()?>
</div>
