<?php
namespace GDO\Bootstrap5Theme\thm\bs5\Core\tpl;

use GDO\Core\GDT_String;

/** @var $field GDT_String * */
?>
<div class="gdt-container<?=$field->classError()?>">
    <div class="form-label">
        <label<?=$field->htmlForID()?>><?=$field->renderLabel()?></label>
    </div>
    <div class="inner-form-input">
		<?=$field->htmlIcon()?>
        <input
                class="form-control"
			<?=$field->htmlFocus()?>
                type="<?=$field->getInputType()?>"
			<?=$field->htmlID()?>
			<?=$field->htmlRequired()?>
			<?=$field->htmlPattern()?>
			<?=$field->htmlDisabled()?>
                maxlength="<?=$field->max?>"
                size="<?=min($field->max, 64)?>"
			<?=$field->htmlName()?>
			<?=$field->htmlValue()?> />
    </div>
	<?=$field->htmlError()?>
</div>
