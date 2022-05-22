<?php
use GDO\File\GDT_File;
/** @var $field GDT_File **/
?>

<?php foreach ($field->getInitialFiles() as $file) : ?>
<?php $deleteButton = $field->noDelete ? '' : sprintf('<input type="submit" name="%s[delete_%s][%s]" value="Remove File" onclick="return confirm(\'%s\')" />', $field->formVariable(), $field->name, $file->getID(), t('confirm_delete')); ?>
<div id="gdo-file-preview-<?=$file->getID()?>" class="form-group">
<?php if ($file && $file->isImageType()) : ?>
<?php if ($file->isImageType()) : ?>
  <img 
   class="gdt-file-image-preview"
<?php if ($file && $file->isPersisted()) : ?>
   src="<?=$field->displayPreviewHref($file)?>"
<?php endif; ?>
  />
<?php endif; ?>
<?php else : ?>
  <span class="gdt-file-preview"><?=$file->displayName()?> <?=$file->displaySize()?></span>
<?php endif; ?>
  <?=$deleteButton?>
</div>
<?php endforeach; ?>

<div id="gdo-file-preview-<?=$field->name?>"></div>

<div class="form-group gdo-flow-file <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <?=$field->renderLabel()?>
<?php if ($field->notNull) : ?>
 *
<?php endif; ?>
  <div class="input-group">
    <label class="form-label">
        <span class="btn btn-primary">
            <?=t('browse')?>
            <input
<?php if ($field->multiple) : ?>
             multiple="multiple"
<?php endif; ?>
             name="<?=$field->name?>"
             type="file"
             style="display:none;" />
        </span>
    </label>
    <input
     type="text"
     class="form-control"
     id="gdo-file-input-<?=$field->name?>"
     readonly />
  </div>
  <?=$field->htmlError()?>
</div>
