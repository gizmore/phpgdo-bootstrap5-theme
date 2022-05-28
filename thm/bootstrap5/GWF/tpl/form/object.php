<?php
use GDO\DB\GDT_Object;
$field instanceof GDT_Object;
?>
<md-input-container class="md-block md-float md-icon-left<?= $field->classError(); ?>" flex>
  <?= $field->htmlIcon(); ?>
  <label class="form-label" <?=$field->htmlForID()?>><?= $field->renderLabel(); ?></label>
  <input
   <?=$field->htmlID()?>
   type="number"
   step="1"
   <?=$field->htmlFormName()?>
   value="<?= $field->display(); ?>"
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlDisabled(); ?>/>
  <div class="gdt-form-error"><?= $field->error; ?></div>
</md-input-container>
