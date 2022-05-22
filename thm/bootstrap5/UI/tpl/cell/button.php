<?phpuse GDO\UI\GDT_Button;/** @var $field GDT_Button **//** @var $href string **/$field->addClass("gdt-button");$field->addClass("btn");$classes = [	'btn-primary',	'btn-outline-success',
	'btn-outline-danger',
];
$field->addClass($classes[$field->priority]);?>
<a href="<?=$href?>"<?=$field->htmlDisabled()?> <?=$field->htmlAttributes()?>><?=$field->htmlIcon()?> <?=$field->renderLabel()?></a>
