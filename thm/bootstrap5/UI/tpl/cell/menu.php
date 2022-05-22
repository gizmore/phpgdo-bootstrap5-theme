<?php /** @var $field \GDO\UI\GDT_Menu **/
use GDO\UI\GDT_Icon;
?>
<?php if (!empty($field->getFields())) : ?>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?=$field->renderLabel()?>
  </button>
  <div class="dropdown-menu">
<?php foreach ($field->getFields() as $gdt) : ?>
	<?=$gdt->renderCell()?>
<?php endforeach; ?>
  </div>
</div>
<?php endif; ?>
