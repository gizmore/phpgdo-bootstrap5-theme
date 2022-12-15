<?php
namespace GDO\Bootstrap5Theme\thm\bs5\UI\tpl;
/** @var $field \GDO\UI\GDT_Menu **/
$field->addClass('gdt-menu');
?>
<div<?=$field->htmlAttributes()?>>
<?php if ($field->hasLabel()) : ?>
 <div class="menu-title"><?=$field->renderLabel()?></div>
<?php endif; ?>
<?php foreach ($field->getFields() as $gdt) : ?>
 <?=$gdt->render()?>
<?php endforeach; ?>
</div>
