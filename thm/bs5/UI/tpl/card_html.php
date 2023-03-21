<?php
namespace GDO\Bootstrap5Theme\thm\bs5\UI\tpl;

use GDO\UI\GDT_Card;

/** @var $field GDT_Card * */
$field->addClass('card');
?>
<div
	<?php
	if (isset($field->gdo)) : ?>
        id="card-<?=$field->gdo->getID()?>"
	<?php
	endif; ?>
	<?=$field->htmlAttributes()?>>
	<?php
	if ($field->hasAvatar() || $field->hasTitle() || $field->hasSubTitle()) : ?>
        <div class="card-header">
			<?php
			if ($field->hasAvatar()) : ?>
                <div class="card-avatar"><?=$field->renderAvatar()?></div>
			<?php
			endif; ?>
			<?php
			if ($field->hasTitle() || $field->hasSubTitle()) : ?>
                <div class="gdt-card-title-texts">
					<?php
					if ($field->hasTitle()) : ?>
                        <h5 class="card-title"><?=$field->renderTitle()?></h5>
					<?php
					endif; ?>
					<?php
					if ($field->hasSubTitle()) : ?>
                        <div class="card-subtitle"><?=$field->renderSubTitle()?></div>
					<?php
					endif; ?>
                    <div class="cb"></div>
                </div>
			<?php
			endif; ?>
        </div>
	<?php
	endif; ?>

	<?php
	if (isset($field->image) || isset($field->content) || $field->getAllFields()) : ?>
        <div class="gdt-card-middle">
			<?php
			if (isset($field->image)) : ?>
                <div class="gdt-card-image"><?=$field->image->renderHTML()?></div>
			<?php
			endif; ?>
			<?php
			if (isset($field->content)) : ?>
                <div class="card-body"><?=$field->content->renderHTML()?></div>
			<?php
			endif; ?>
			<?php
			if ($field->getAllFields()) : ?>
                <div class="gdt-card-fields">
					<?php
					foreach ($field->getFields() as $gdt) : ?>
						<?=$gdt->renderCard()?>
					<?php
					endforeach; ?>
                </div>
			<?php
			endif; ?>
        </div>
	<?php
	endif; ?>

	<?php
	if (isset($field->footer) || $field->hasActions()) : ?>
        <div class="card-footer">
			<?php
			if (isset($field->footer)) : ?>
                <div class="gdt-card-footer"><?=$field->footer->renderHTML()?></div>
			<?php
			endif; ?>
			<?php
			if ($field->getActions()) : ?>
                <div class="gdt-card-actions"><?=$field->actions()->renderHTML()?></div>
			<?php
			endif; ?>
        </div>
	<?php
	endif; ?>
</div>
