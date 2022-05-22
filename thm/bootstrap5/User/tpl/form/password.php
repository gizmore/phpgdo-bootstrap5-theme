<?php /** @var $field \GDO\User\GDT_Password **/ ?>
<div class="form-group <?=$field->classError()?>">
  <?= $field->htmlIcon(); ?>
  <label class="form-label" for="form[<?= $field->name; ?>]"><?= $field->renderLabel(); ?></label>
  <input
   x=1
   type="password"
   class="form-control"
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlPattern(); ?>
   min="<?= $field->min; ?>"
   max="<?= $field->max; ?>"
   size="<?= min($field->max, 32); ?>"
   <?=$field->htmlFormName()?>
   value="<?= $field->getVar(); ?>" />
  <?=$field->htmlError()?>
</div>
