<?php
namespace GDO\Bootstrap5Theme\thm\bs5\Core\tpl;

use GDO\Core\GDT_Int;

/** @var $field GDT_Int * */
?>
<div class="gdt-number gdt-container<?=$field->classError()?>">
    <div class="form-label">
        <label<?=$field->htmlForID()?>>
			<?=$field->renderLabel()?>
        </label>
    </div>
    <div class="inner-form-input">
		<?=$field->htmlIcon()?>
        <input
                class="form-control"
			<?=$field->htmlFocus()?>
			<?=$field->htmlID()?>
                type="number"
			<?=$field->htmlConfig()?>
                min="<?=$field->min?>"
                max="<?=$field->max?>"
                step="<?=$field->step?>"
			<?=$field->htmlName()?>
			<?=$field->htmlDisabled()?>
			<?=$field->htmlRequired()?>
			<?=$field->htmlFocus()?>
			<?=$field->htmlValue()?>>
    </div>
	<?=$field->htmlError()?>
</div>
