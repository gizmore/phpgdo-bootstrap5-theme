<?php /** @var $field \GDO\DB\GDT_String **/ ?>
<div
 class="mb-3 <?=$field->classError()?>">
  <label class="col-form-label col-auto" <?=$field->htmlForID()?>>
    <?= $field->htmlIcon(); ?>
    <?= $field->renderLabel(); ?>
  </label>
  <input
   <?=$field->htmlID()?>
   <?=$field->htmlRequired()?>
   type="<?=$field->_inputType?>"
   class="col-auto form-control"
   <?= $field->htmlPattern(); ?>
   <?= $field->htmlDisabled(); ?>
   min="<?= $field->min; ?>"
   max="<?= $field->max; ?>"
   size="<?= min($field->max, 32); ?>"
   <?=$field->htmlFormName()?>
   value="<?= $field->getVar(); ?>" />
  <?=$field->htmlError()?>
</div>
