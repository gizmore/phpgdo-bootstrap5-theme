<?php
namespace GDO\Bootstrap5Theme\thm\bs5\Date\tpl;

use GDO\Date\GDT_DateTime;

/** @var $field GDT_DateTime * */
?>
<div class="gdt-container<?=$field->classError()?>">
    <div class="form-label">
        <label<?=$field->htmlForID()?>><?=$field->renderLabel()?></label>
    </div>
    <div class="inner-form-input">
		<?=$field->htmlIcon()?>
        <input<?=$field->htmlID()?> type="datetime-local"
                                    class="form-control"
                                    autocomplete="off"
                                    value="<?=tt($field->getVar(), 'local')?>"
			<?=$field->htmlName()?>
			<?=$field->htmlDisabled()?> />
    </div>
	<?=$field->htmlError()?>
</div>
