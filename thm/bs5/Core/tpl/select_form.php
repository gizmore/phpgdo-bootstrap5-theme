<?php
namespace GDO\Bootstrap5Theme\thm\bs5\Core\tpl;
use GDO\Core\GDT_Select;
/** @var $field GDT_Select **/
?>
<div class="gdt-container <?=$field->htmlClass()?><?=$field->classError()?>">
<?php require 'select_cell.php'; ?>
<?=$field->htmlError()?>
</div>
