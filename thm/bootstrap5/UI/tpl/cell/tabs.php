<?php
use GDO\UI\GDT_Tabs;
/** @var $cell boolean **/
/** @var $field GDT_Tabs **/
?>
<nav class="nav nav-tabs" role="tablist">
<?php $active = 'active'; ?>
<?php foreach ($field->getTabs() as $tab) : ?>
<?php $anchor = sprintf('%s_%s', $field->name, $tab->name); ?>
  <a
   class="nav-link <?=$active?>"
   onclick="GDO.triggerResize()"
   data-bs-toggle="tab"
   href="#<?=$anchor?>"
   role="presentation">
    <?=$tab->renderLabel()?>
  </a>
<?php $active = ''; ?>
<?php endforeach; ?>
</nav>
<div class="tab-content">
<?php $active = 'show active'; ?>
<?php foreach ($field->getTabs() as $tab) : ?>
<?php $anchor = sprintf('%s_%s', $field->name, $tab->name); ?>
  <div class="tab-pane fade <?=$active?>" id="<?=$anchor?>" role="tabpanel">
<?php if ($cell) : ?>
<?=$tab->renderHTML()?>
<?php else : ?>
<?=$tab->renderForm()?>
<?php endif; ?>
  </div>
<?php $active = ''; ?>
<?php endforeach; ?>
</div>
