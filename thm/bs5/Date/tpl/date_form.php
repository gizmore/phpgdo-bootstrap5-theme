<?php
namespace GDO\Bootstrap5Theme\thm\bs5\Date\tpl;
/** @var $field \GDO\Date\GDT_Date **/
?>
<div class="gdt-container<?=$field->classError()?>">
  <div class="form-label">
    <label<?=$field->htmlForID()?>><?=$field->renderLabel()?></label>
  </div>
  <div class="inner-form-input">
    <?=$field->htmlIcon()?>
    <input<?=$field->htmlID()?> type="date"
     class="form-control"
<?=$field->htmlName()?>
<?=$field->htmlValue()?>
<?=$field->htmlDisabled()?> />
  </div>
  <?=$field->htmlError()?>
</div>
