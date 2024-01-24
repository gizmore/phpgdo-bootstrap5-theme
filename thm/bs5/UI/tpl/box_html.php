<?php
namespace GDO\UI\tpl;
use GDO\Core\GDT;

/** @var \GDO\UI\GDT_Box $field **/
$field->addClass('card');
if (!$field->hasFields())
{
    return;
}
?>
<div<?=$field->htmlAttributes()?>>
    <div class="card-body">
<?php if ($field->hasTitle()) : ?>
    <h5 class="card-title"><?=$field->renderTitle()?></h5>
<?php endif; ?>
        <?=$field->renderFieldsB(GDT::RENDER_HTML)?>
    </div>
</div>
