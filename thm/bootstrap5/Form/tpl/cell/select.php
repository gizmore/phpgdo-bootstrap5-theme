<?php /** @var $field \GDO\Form\GDT_Select **/ ?>
<div class="form-group <?=$field->htmlClass()?>">
  <?=$field->htmlIcon()?>
<?php if ($label = $field->displayLabel()) : ?>
  <label class="form-label"><?=$label?></label>
<?php endif; ?>
  <select
   <?=$field->htmlAttributes()?>
   class="form-control"
<?php if ($field->multiple) : ?>
   multiple="multiple"
<?php endif; ?>
   name="<?=$field->name?>">
	<?php foreach ($field->choices as $value => $choice) : ?>
	  <?php $sel = $value == $field->var ? ' selected="selected"' : ''; ?>
	  <option value="<?=htmlspecialchars($value)?>"<?=$sel?>><?= $field->renderChoice($choice); ?></option>
	<?php endforeach; ?>
  </select>
</div>
