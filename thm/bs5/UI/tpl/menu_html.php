<?php
namespace GDO\Bootstrap5Theme\thm\bs5\UI\tpl;

use GDO\UI\GDT_Menu;

/** @var $field GDT_Menu * */
$field->addClass('gdt-menu');
?>
<div<?=$field->htmlAttributes()?>>
	<?php
	foreach ($field->getFields() as $gdt) : ?>
		<?=$gdt->render()?>
	<?php
	endforeach; ?>
</div>
