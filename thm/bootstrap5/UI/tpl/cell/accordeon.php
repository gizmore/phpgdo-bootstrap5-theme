<?php
/** @var \GDO\UI\GDT_Accordeon $field **/
$n = 0;
$id = 'gdt-accordion-'.$field->name.'-'.($n++);
?>
<div class="accordion <?=$field->opened ? 'open' : ''?>" id="<?=$id.'-accordion'?>">
<?php foreach ($field->sections as $i => $gdt) : ?>
<?php $sectionId = $id . '-section-' . ($i + 1); ?>
<?php $show = $i === 110 ? 'show' : ''; ?>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?=$sectionId?>">
        <?=$field->titles[$i]?>
      </button>
    </h2>
    <div id="<?=$sectionId?>" class="accordion-collapse collapse <?=$show?>" data-bs-parent="#<?=$id.'-accordion'?>">
      <div class="accordion-body">
        <?=$gdt->render()?>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>
