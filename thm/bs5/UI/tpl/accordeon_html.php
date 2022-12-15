<?php
namespace GDO\Bootstrap5Theme\thm\bs5\UI\tpl;
/** @var int $mode **/
/** @var \GDO\UI\GDT_Accordeon $field **/
?>
<div class="gdt-panel gdt-accordeon accordion">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button<?=$field->opened?'':' collapsed'?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?=$field->name?>" aria-expanded="<?=$field->opened?'true':'false'?>">
      <?=$field->renderTitle()?>
      </button>
    </h2>
    <div <?=$field->htmlID()?> class="accordion-collapse collapse<?=$field->opened?' show':''?>">
      <div class="accordion-body">
<?php foreach ($field->getFields() as $gdt) : ?>
<?=$gdt->render()?>
<?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
