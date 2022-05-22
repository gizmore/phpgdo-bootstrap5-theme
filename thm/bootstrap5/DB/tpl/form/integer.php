<?php /** @var $field \GDO\DB\GDT_Int **/ ?>
<div class="form-group <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label class="form-label" <?=$field->htmlForID()?>><?= $field->renderLabel(); ?></label>
  <input
   <?=$field->htmlID()?>
   class="form-control"
   type="number"
   <?=$field->htmlFormName()?>
   <?=$field->htmlDisabled()?>
   <?=$field->htmlRequired()?>
<?php if ($field->min !== null) : ?>
   min="<?=$field->min?>"
<?php endif; ?>
<?php if ($field->max !== null) : ?>
   max="<?=$field->max?>"
<?php endif; ?>
<?php if ($field->step !== null) : ?>
   step="<?=$field->step?>"
<?php endif; ?>
   value="<?=$field->display()?>" />
  <?=$field->htmlError()?>
</div>
