<?php
use GDO\UI\GDT_Tab;
/** @var $cell boolean **/
/** @var $field GDT_Tab **/
?>
<div class="container">
  <h4><?=$field->displayLabel()?></h4>
  <div>
<?php
foreach ($field->getFields() as $gdt)
{
	echo $cell ? $gdt->renderCell() : $gdt->renderForm();
}
?>
  </div>
</div>
