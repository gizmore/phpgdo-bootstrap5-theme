<?php
namespace GDO\Bootstrap5Theme\thm\bs5\Form\tpl;

use GDO\Form\GDT_Submit;

/** @var GDT_Submit $field * */
?>
<div class="gdt-submit btn btn-primary"><?=$field->htmlIcon()?><input
            type="submit"
		<?=$field->htmlName()?>
		<?=$field->htmlAttributes()?>
		<?=$field->htmlDisabled()?>
		<?=$field->htmlValue()?> /></div>
