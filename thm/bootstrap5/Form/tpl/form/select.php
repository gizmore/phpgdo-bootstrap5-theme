<?php /** @var $field \GDO\Form\GDT_Select **/ ?>
<div class="form-group <?=$field->htmlClass()?>">
  <?=$field->htmlIcon()?>
  <label class="form-label"><?= $field->renderLabel(); ?></label>
  <select
   class="selectpicker form-select"
   data-width="100%"
   data-live-search="<?=count($field->choices) > 10 ? 'true' : 'false'?>"
   <?=$field->htmlFormName()?>
   <?=$field->htmlRequired()?>
   <?=$field->htmlDisabled()?>
   <?=$field->htmlMultiple()?>
   class="form-control">
    <?php if ($field->emptyLabel) : ?>
    <option
     data-content='<?=$field->displayEmptyLabel()?>'
     <?=$field->htmlSelected($field->emptyValue)?>	   
     value="<?=$field->emptyValue?>">
     <?=$field->displayEmptyLabel()?>
    </option>
    <?php endif; ?>
	<?php foreach ($field->choices as $value => $choice) : ?>
	  <option
	   data-content='<?=$field->renderChoice($choice)?>'
       <?=$field->htmlSelected($value)?>	   
	   value="<?= htmlspecialchars($value); ?>">
		<?= $field->renderChoice($choice); ?>
	  </option>
	<?php endforeach; ?>
  </select>
  <?=$field->htmlError()?>
</div>
