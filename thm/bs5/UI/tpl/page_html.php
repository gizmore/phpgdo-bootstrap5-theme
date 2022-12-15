<?php
namespace GDO\Bootstrap5Theme\thm\bs5\UI\tpl;
use GDO\Core\Website;
use GDO\Core\Javascript;
use GDO\UI\GDT_Page;
use GDO\UI\GDT_Loading;
use GDO\Language\Trans;
/** @var $page GDT_Page **/
?>
<!DOCTYPE html>
<html class="nojs" lang="<?=Trans::$ISO?>">
    <head>
     	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
		<title><?=$page->renderTitle()?></title>
		<?=Website::displayHead()?>
		<?=Website::displayMeta()?>
		<?=Website::displayLink()?>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <ul id="leftnav" class="list-group list-group-flush">
<?php foreach ($page->leftBar()->getFields() as $gdt) : ?>
                    <li class="list-group-item list-group-item-action"><?=$gdt->renderHTML()?></li>
<?php endforeach; ?>
                </ul>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle"><span class="navbar-toggler-icon"></span></button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
<?php foreach ($page->rightBar()->getFields() as $gdt) : ?>
                                <li class="nav-item"><span class="nav-link"><?=$gdt->renderHTML()?></span></li>
<?php endforeach; ?>                                        
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- topTabs -->
                <!-- Page content-->
                <div id="content-wrap" class="container-fluid">
                    <?=$page->topResponse()->renderHTML()?>
                    <?=$page->html?>
                </div>
            </div>
        </div>
        <footer><?=$page->bottomBar()->addClass('gdt-footer')->renderHTML()?></footer>
	    <?=GDT_Loading::make()->renderHTML()?>
		<?=Javascript::displayJavascripts()?>
    </body>
</html>
