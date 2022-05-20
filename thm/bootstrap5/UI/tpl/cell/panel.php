<?php
use GDO\UI\GDT_Panel;
/**
 * @var $field GDT_Panel
**/
$field->addClass('gdt-panel')->addClass('card');
?>
<div <?=$field->htmlAttributes()?>">
  <div class="card-body">
<?php if ($field->hasTitle()) : ?>
    <h2 class="card-title"><?=$field->renderTitle()?></h2>
<?php endif; ?>
    <div class="card-text">
  <?=$field->renderText()?>
<?php foreach($field->fields as $field) : ?>
      <?=$field->renderCell()?>
<?php endforeach;?>
    </div>
  </div>
</div>
