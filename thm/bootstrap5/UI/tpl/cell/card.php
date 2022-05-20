<?php
/** @var $field \GDO\UI\GDT_Card **/
$field->addClass('gdt-card card w-100');
?>
<div <?=$field->htmlAttributes()?>>

<?php if ($field->gdo) : ?>
  <a id="card-<?=$field->gdo->getID()?>" class="n"></a>
<?php endif; ?>

<?php if ($field->avatar || $field->title || $field->subtitle) : ?>
  <div class="gdt-card-upper card-header">
<?php if ($field->avatar) : ?>
    <div class="gdt-card-avatar"><?=$field->avatar->renderCell()?></div>
<?php endif; ?>
<?php if ($field->title || $field->subtitle) : ?>
    <div class="gdt-card-title-texts">
<?php if ($field->title) : ?>
      <h3 class="gdt-card-title card-title"><?=$field->title->renderCell()?></h3>
<?php endif; ?>
<?php if ($field->subtitle) : ?>
      <div class="gdt-card-subtitle card-subtitle"><?=$field->subtitle->renderCell()?></div>
<?php endif; ?>
  </div>
<?php endif; ?>
</div>
<?php endif; ?>

<?php if ($field->image || $field->content || $field->fields) : ?>
  <div class="gdt-card-middle card-body">
<?php if ($field->image) : ?>
    <div class="gdt-card-image "><?=$field->image->renderCell()?></div>
<?php endif; ?>
<?php if ($field->content) : ?>
    <div class="gdt-card-content card-text"><?=$field->content->renderCell()?></div>
<?php endif; ?>
<?php if ($field->fields) : ?>
    <div class="gdt-card-fields">
    <?php foreach ($field->fields as $gdt) : ?>
      <div class="row">
        <?=$gdt->renderCard()?>
      </div>
    <?php endforeach; ?>
    </div>
<?php endif; ?>
  </div>
<?php endif; ?>

<?php if ($field->footer || $field->actions) : ?>
  <div class="gdt-card-lower card-footer">
<?php if ($field->footer) : ?>
    <div class="gdt-card-footer text-muted"><?=$field->footer->renderCell()?></div>
<?php endif; ?>
<?php if ($field->actions) : ?>
    <div class="gdt-card-actions"><?=$field->actions()->renderCell()?></div>
<?php endif; ?>
  </div>
<?php endif; ?>
  
</div>
