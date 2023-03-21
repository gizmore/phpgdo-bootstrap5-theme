<?php
namespace GDO\Bootstrap5Theme\thm\bs5\Table\tpl;

use GDO\Table\GDT_PageMenu;
use GDO\Table\PageMenuItem;

/** @var $pagemenu GDT_PageMenu * */
/** @var $pages PageMenuItem[] * */
?>
<div class="gdo-pagemenu">
    <nav aria-label="Pager">
        <ul class="pagination">
			<?php
			foreach ($pages as $page) : ?>
                <li class="page-item<?=$page->selected ? ' active' : ''?>">
                    <a class="page-link" href="<?=$page->href?>" rel="<?=$pagemenu->relationForPage($page)?>"><?=$page->page?></a>
                </li>
			<?php
			endforeach; ?>
        </ul>
    </nav>
</div>
