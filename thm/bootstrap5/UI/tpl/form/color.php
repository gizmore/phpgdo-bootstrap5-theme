<?php
use GDO\UI\GDT_Color;
/** @var $field GDT_Color **/
?>
<div class="form-group <?=$field->classError()?>">
  <?= $field->htmlIcon(); ?>
  <label class="form-label" <?=$field->htmlForID()?>>
    <?=$field->displayLabel()?>
  </label>
  <input
   <?=$field->htmlID()?>
   type="color"
   <?=$field->htmlFormName()?>
<?php if ($color = $field->getVar()) : ?>
   value="<?=html($color)?>"
<?php endif; ?>
   <?=$field->htmlRequired()?>
   <?=$field->htmlDisabled()?>/>
  <?=$field->htmlError()?>
</div>
