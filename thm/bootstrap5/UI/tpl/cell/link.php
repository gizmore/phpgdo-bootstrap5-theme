<?php
/** @var $link \GDO\UI\GDT_Link **/
$link->addClass('gdt-link')->addClass('nav-link');
?>
<a
<?=$link->htmlID()?>
<?=$link->htmlAttributes()?>
<?=$link->htmlTarget()?>
<?=$link->htmlHREF()?>>
  <?=$link->htmlIcon()?>
<?php if ($link->hasLabel()) : ?>
  <?=$link->displayLabel()?>
<?php else : ?>
  <?=html($link->href)?>
<?php endif; ?>
</a>
