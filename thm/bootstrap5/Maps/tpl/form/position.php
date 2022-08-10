<?php
use GDO\UI\GDT_Dialog;
use GDO\UI\GDT_DIV;
/** @var $field \GDO\Maps\GDT_Position **/ ?>
<div class="form-group <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label class="form-label" <?=$field->htmlForID()?>><?= $field->renderLabel(); ?></label>
  <input
   <?=$field->htmlID()?>
   type="text"
   class="form-control gdo-auto-complete"
   <?=$field->htmlRequired()?>
   <?=$field->htmlDisabled()?>
   onclick="GDO.Maps.openDialog('<?=$field->id()?>_picker')"
   size="16"
   <?=$field->htmlFormName()?>
   value="<?=$field->hasVar()?$field->getValue()->displayRaw():''; ?>" />
  <?=$field->htmlError()?>
</div>

<?php
$dlg = GDT_Dialog::make($field->name.'_picker');
$dlg->addField(GDT_DIV::make($field->name.'_canvas')->addClass('maps-canvas'));
$dlg->okButton();
$dlg->cancelButton();
$dlg->attr('gdo-on-close', "GDO.Maps.closeDialog('".$dlg->name."_picker', '".$field->id()."')");
echo $dlg->renderHTML();
?>
