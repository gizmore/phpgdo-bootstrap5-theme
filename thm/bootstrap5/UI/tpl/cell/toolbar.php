<?php
use GDO\UI\GDT_Toolbar;
/** @var $field GDT_Toolbar **/
?>
<div class="btn-toolbar" role="toolbar">
<?php
foreach ($field->getFields() as $gdt)
{
	echo $gdt->renderHTML();
}
?>
</div>
