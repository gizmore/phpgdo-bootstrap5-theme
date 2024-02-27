<?php
namespace GDO\Bootstrap5Theme\thm\bs5\Form\tpl;

use GDO\Form\GDT_Form;
use GDO\UI\GDT_Error;

/** @var GDT_Form $field * */
$field->addClass('card');
if ($field->focus)
{
    $field->addClass('focusable');
}
?>
<?php
if ($field->hasError()) : ?>
	<?=GDT_Error::make()->textRaw($field->renderError())->render()?>
<?php
endif; ?>
<div<?=$field->htmlID()?><?=$field->htmlAttributes()?>>
    <form<?=$field->htmlVerb()?><?=$field->htmlAction()?><?=$field->htmlTarget()?>>
		<?php
		if ($field->hasTitle() || $field->hasText()) : ?>
            <div class="gdt-form-text card-header">
				<?php
				if ($field->hasTitle()) : ?>
                    <h3 class="card-title"><?=$field->renderTitle()?></h3>
				<?php
				endif; ?>
				<?php
				if ($field->hasText()) : ?>
                    <p><?=$field->renderText()?></p>
				<?php
				endif; ?>
            </div>
		<?php
		endif; ?>
        <div class="gdt-form-inner">
			<?php
			if ($field->hasFields()) : ?>
                <div class="gdt-form-fields">
					<?php
					foreach ($field->getFields() as $gdt)
					{
						if (isset($field->gdo))
						{
							$gdt->gdo($field->gdo);
						}
						echo $gdt->renderForm();
					} ?></div>
			<?php
			endif; ?>
        </div>
		<?php
		if ($field->hasActions()) : ?>
            <div class="gdt-form-actions card-footer">
				<?=$field->actions()->renderForm()?>
            </div>
		<?php
		endif; ?>
    </form>
</div>
