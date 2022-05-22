<?php /** @var $field \GDO\UI\GDT_Message **/
?>
<div
 class="form-group mb-3 <?= $field->classError(); ?>">
  <label
   class="col-form-label"
   <?=$field->htmlForID()?>>
     <?= $field->htmlIcon(); ?>
     <?= $field->renderLabel(); ?>
   </label>
   <div 
    <?=$field->htmlID()?>
    class="<?=$field->classEditor()?>">
  <textarea
   <?=$field->htmlRequired()?>
   novalidate="novalidate"
   class="form-control"
   <?=$field->htmlFormName()?>
   rows="6"
   <?= $field->htmlDisabled(); ?>><?= $field->display(); ?></textarea>
   </div>
  <?=$field->htmlError()?>
</div>
