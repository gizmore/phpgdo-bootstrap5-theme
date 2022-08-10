<?php
/** @var $gdt \GDO\UI\GDT_ListItem **/
$gdt->addClass('gdt-list-item list-group-item');
?>
<div <?=$gdt->htmlAttributes()?>>
<?php if ($gdt->avatar || $gdt->title || $gdt->subtitle) : ?>
  <div class="gdt-li-upper">
<?php if ($gdt->avatar) : ?>
	<div class="gdt-li-avatar"><?=$gdt->avatar->renderHTML()?></div>
<?php endif; ?>
<?php if ($gdt->title || $gdt->subtitle) : ?>
    <div class="gdt-li-title-texts">
<?php if ($gdt->title) : ?>
      <div class="gdt-li-title"><?=$gdt->title->renderHTML()?></div>
<?php endif; ?>
<?php if ($gdt->subtitle) : ?>
      <div class="gdt-li-subtitle"><?=$gdt->subtitle->renderHTML()?></div>
<?php endif; ?>
    </div>
<?php endif; ?>
  </div>
<?php endif; ?>
<?php if ($gdt->image || $gdt->content) : ?>
  <div class="gdt-li-main">
<?php if ($gdt->image) : ?>
    <div class="gdt-li-image"><?=$gdt->image->renderHTML()?></div>
<?php endif; ?>
<?php if ($gdt->content) : ?>
    <div class="gdt-li-content"><?=$gdt->content->renderHTML()?></div>
<?php endif; ?>
  </div>
<?php endif; ?>
<?php if ($gdt->actions || $gdt->subtext) : ?>
  <div class="gdt-li-lower">
<?php if ($gdt->subtext) : ?>
	<div class="gdt-li-subtext"><?=$gdt->subtext->renderHTML()?></div>
<?php endif; ?>
<?php if ($gdt->actions) : ?>
    <div class="gdt-li-actions"><?=$gdt->actions()->renderHTML()?></div>
<?php endif; ?>
  </div>
<?php endif; ?>
</div>
