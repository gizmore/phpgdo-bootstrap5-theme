<?php
namespace GDO\Table\tpl;

use GDO\Core\GDT;
use GDO\Core\GDT_Template;
use GDO\Table\GDT_List;

/** @var $field GDT_List * */

global $me;

echo GDT_Template::php('Table', 'list_filter.php', ['field' => $field]);

###################
### Search Form ###
###################
// if ($field->searched)
// {
// 	$formSearch = GDT_Form::make($field->headers->name)->slim()->verb('GET');
// 	$formSearch->addField(GDT_SearchField::make('search'));
// 	$formSearch->actions()->addField(GDT_Submit::make()->css('display', 'none'));
// 	echo $formSearch->renderHTML();
// }

############
### List ###
############
$pagemenu = isset($field->pagemenu) ? $field->pagemenu : GDT::EMPTY_STRING;
$page = $pagemenu ? $pagemenu->page : 1;
$pagemenu = $pagemenu ? $pagemenu->renderHTML() : GDT::EMPTY_STRING;

if (!$field->countItems())
{
	if ($field->hideEmpty)
	{
		return;
	}
}

$result = $field->getResult();

echo $pagemenu;
?>
    <!-- Begin List -->
    <div class="gdt-list list-group">
		<?php
		if (($page == 1) && ($field->hasText())) : ?>
            <p class="gdt-list-text"><?=$field->renderText()?></p>
		<?php
		endif; ?>
		<?php
		if ($field->hasTitle()) : ?>
            <h5 class="gdt-list-title"><?=$field->renderTitle()?></h5>
		<?php
		endif; ?>
		<?php
		$gdo = $field->fetchAs->cache->getDummy();
		while ($gdo = $result->fetchInto($gdo)) :
			echo $me->renderList($gdo);
		endwhile;
		?>
    </div>
    <!-- End of List -->
	<?php
echo $pagemenu;
