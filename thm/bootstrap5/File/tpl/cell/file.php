<?php
use GDO\File\GDT_File;
use GDO\File\GDO_File;
/** @var $gdo GDO_File **/
/** @var $field GDT_File **/
?>
<?php if ($gdo) : ?>
<?php if ( ($gdo->isImageType()) && ($field->previewHREF) ) : ?>
<div class="gdo-file gdo-image-file">
  <img src="<?=$field->displayPreviewHref($gdo)?>" alt="Image" xstyle="<?=$field->styleSize()?>" />
</div>
<?php endif ; ?>
<?php if ($field->withFileInfo) : ?>
<div class="gdo-file">
  <span class="gdo-file-name"><?= html($gdo->getName()); ?></span>
  <span class="gdo-file-size"><?= $gdo->displaySize(); ?></span>
  <span class="gdo-file-type"><?= $gdo->getType(); ?></span>
</div>
<?php endif; ?>
<?php endif; ?>
