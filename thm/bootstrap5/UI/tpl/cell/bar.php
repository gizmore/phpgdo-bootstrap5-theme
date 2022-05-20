<?php /** @var $bar \GDO\UI\GDT_Bar **/
$bar->addClass('gdt-bar');
$bar->addClass('gdt-bar-' . $bar->htmlDirection());
$bar->addClass('flex-' . $bar->htmlDirection());
$bar->addClass('nav');
$bar->addClass('nav-justified');
?>
<?php if ($bar->fields) : ?>
<ul <?=$bar->htmlAttributes()?>>
  <?php foreach ($bar->fields as $field) : ?>
    <li class="nav-item">
	  <?= $field->render(); ?>
	</li>
  <?php endforeach; ?>
</ul>  
<?php endif;?>
