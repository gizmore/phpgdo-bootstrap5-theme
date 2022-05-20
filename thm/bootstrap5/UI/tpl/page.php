<?php /** @var $page \GDO\UI\GDT_Page **/
use GDO\Core\Website;
use GDO\Javascript\Javascript;
use GDO\User\GDO_User;
use GDO\UI\GDT_Page;
use GDO\UI\GDT_Loading;
use GDO\Profile\GDT_ProfileLink;
use GDO\Javascript\Module_Javascript;
use GDO\Language\Trans;
/** @var $page GDT_Page **/
$user = GDO_User::current();
?>
<!DOCTYPE html>
<html lang="<?=Trans::$ISO?>">
    <head>
     	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<title><?=$page->renderTitle()?></title>
		<?=Website::displayHead()?>
		<?=Website::displayMeta()?>
		<?=Website::displayLink()?>
    </head>
    <body class="nojs">
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <ul id="leftnav" class="list-group list-group-flush">
<?php foreach (GDT_Page::$INSTANCE->leftNav->getFields() as $gdt) : ?>                
                    <li class="list-group-item list-group-item-action"><?=$gdt->renderSidebar()?></li>
<?php endforeach; ?>
                </ul>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
<?php foreach (GDT_Page::$INSTANCE->rightNav->getFields() as $gdt) : ?>                
                                <li class="nav-item"><span class="nav-link"><?=$gdt->renderSidebar()?></span></li>
<?php endforeach; ?>                                        
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- topTabs -->
                <?=$page->topTabs->renderCell()?>
                <!-- Page content-->
                <div id="content-wrap" class="container-fluid">
                    <?=Website::topResponse()->renderCell()?>
                    <?=$page->html?>
                </div>
            </div>
        </div>
        <footer><?=$page->bottomNav->addClass('gdo-footer')->renderCell()?></footer>
	    <?=GDT_Loading::make()->renderCell()?>
		<?=Javascript::displayJavascripts(Module_Javascript::instance()->cfgMinifyJS() === 'concat')?>
    </body>
</html>
