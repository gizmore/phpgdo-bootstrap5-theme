<?php
namespace GDO\UI\tpl;

use GDO\UI\GDT_Tabs;

/** @var $cell bool * */
/** @var $field GDT_Tabs * */
?>
<div class="gdt-tabs">
  <ul class="nav nav-tabs" role="tablist">
    <?php
	foreach ($field->getTabs() as $tab) :
    ?>
        <li class="nav-item" role="presentation">
            <a class="nav-link <?=$tab->active?'active':''?>"
               id="<?=$field->getName()?>_<?=$tab->getName()?>"
               data-bs-toggle="tab"
               href="#tab_<?=$tab->getName()?>"
               role="tab"
               aria-controls="<?=t('switch_tab', [$tab->renderLabel()])?>"
               aria-selected="<?=$tab->active?'true':'false'?>"><?=$tab->renderLabel()?></a>
        </li>
    <?php
    endforeach;
    ?>
  </ul>
  <div class="tab-content pt-5" id="tab_content_<?=$field->getName()?>">
    <?php
    foreach ($field->getTabs() as $tab) :
    ?>
    <div class="tab-pane <?=$tab->active?'active':''?>"
         id="tab_<?=$tab->getName()?>"
         role="tabpanel"
         aria-labelledby="<?=$field->getName()?>_<?=$tab->getName()?>"><?=$tab->render()?></div>
    <?php
    endforeach;
    ?>
  </div>
</div>
