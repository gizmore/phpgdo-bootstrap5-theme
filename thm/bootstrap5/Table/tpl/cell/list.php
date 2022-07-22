<?php
use GDO\Table\GDT_List;
use GDO\Form\GDT_Form;
use GDO\UI\GDT_SearchField;
use GDO\UI\GDT_Menu;
use GDO\UI\GDT_Link;
use GDO\Form\GDT_Submit;

/** @var $field GDT_List **/

###################
### Search Form ###
###################
if ($field->searched)
{
    $formSearch = GDT_Form::make($field->headers->name)->slim()->verb('GET');
    $formSearch->addField(GDT_SearchField::make('search'));
    $formSearch->actions()->addField(GDT_Submit::make()->css('display', 'none'));
    echo $formSearch->render();
}

##################
### Order Form ###
##################
if ($field->ordered)
{
    if ($field->headers)
    {
        $o = $field->headers->name;
        $ob = @$_REQUEST[$o]['order_by'];
        $od = @$_REQUEST[$o]['order_dir'];
        
        $menu = GDT_Menu::make('order');
        foreach ($field->headers->fields as $gdt)
        {
            if ($gdt->orderable)
            {
                $link = GDT_Link::make()->labelRaw($gdt->renderLabel());
                
                if ($gdt->name === $ob)
                {
                    $menu->label('list_order', [$gdt->renderLabel(), t(strtolower(html($od)))]);
                }
                $href = $field->replacedHREF("{$o}[order_by]", $gdt->name);
                $href = $field->replacedHREF("{$o}[order_dir]", $gdt->orderDefaultAsc ? 'ASC' : 'DESC', $href);
                $link->href($href);
                $menu->addField($link);
            }
        }
        echo $menu->render();
    }
}

############
### List ###
############
$pagemenu = $field->getPageMenu();
$pagemenu = $pagemenu ? $pagemenu->renderCell() : '';

$result = $field->getResult();
$template = $field->getItemTemplate();

echo $pagemenu;
?>
<div class="gdt-list card">
<?php if ($field->hasTitle()) : ?>
  <div class="card-header">
    <?=$field->renderTitle()?>
  </div>
<?php endif; ?>
  <div class="list-group list-group-flush">
<?php
while ($gdo = $result->fetchObject()) :
	echo $template->gdo($gdo)->renderList();
endwhile;
?>
  </div>
</div>
<?php
echo $pagemenu;
