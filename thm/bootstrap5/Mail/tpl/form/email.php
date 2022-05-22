<?php
use GDO\Mail\GDT_Email;
/** @var $field GDT_Email **/
?>
<div class="mb-3 <?=$field->classError()?>">
  <label class="col-form-label col-auto" <?=$field->htmlForID()?>>
    <?=$field->htmlIcon()?>
    <?=$field->renderLabel()?>
  </label>
    <input
     class="col-auto form-control"
     type="email"
     <?=$field->htmlID()?>
     <?=$field->htmlFormName()?>
     value="<?= $field->display(); ?>"
     <?= $field->htmlRequired(); ?>
     <?= $field->htmlDisabled(); ?> />
    <?= $field->htmlError(); ?>
      
</div>
