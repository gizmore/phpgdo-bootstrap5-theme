<?php
use GDO\Table\GDT_PageMenu;
use GDO\Table\PageMenuItem;
/** @var $pagemenu GDT_PageMenu **/
/** @var $pages PageMenuItem[] **/
$pagemenu instanceof GDT_PageMenu;
?>
<nav aria-label="Pagemenu">
  <ul class="pagination">
<?php foreach ($pages as $page) : $page instanceof PageMenuItem; ?>
    <li class="page-item <?=$page->isSelected()?'active':''?>">
      <a
       class="page-link"
       href="<?=html($page->href)?>"
       rel="<?=$pagemenu->relationForPage($page)?>"><?= $page->page; ?></a>
    </li>
<?php endforeach; ?>
  </ul>
</nav>
