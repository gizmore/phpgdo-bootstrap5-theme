<?php
use GDO\File\GDT_File;

/** @var $form \GDO\Form\GDT_Form **/
$firstEditableField = null;
?>
<div class="card gdt-form <?=$form->htmlClassSlim()?>">

  <form <?=$form->htmlID()?>
   class="card-body"
   onkeydown="GDO.enterForm(this, event)"
   action="<?=$form->action?>"
   method="<?=$form->method?>"
   enctype="<?=$form->encoding?>">

    <?php if ($form->method === 'GET') : ?>
      <?=$form->htmlHidden()?>
    <?php endif; ?>

<?php if ($form->hasTitle()) : ?>
  <h2 class="card-title gdt-form-title"><?=$form->renderTitle()?></h2>
<?php endif; ?>

<?php if ($form->info) : ?>
      <p class="card-text"><?= $form->info; ?></p>
<?php endif; ?>

<?php if ($form->hasFields()) : ?>
<?php if ($vf = $form->hasVisibleFields()) : ?>
    <div class="gdt-form-inner">
<?php endif; ?>
<?php foreach ($form->getFields() as $field) : ?>
     <?php if ( ($form->autofocus) && ($field->writeable) && ($field->getVar() === null) && ($field->focusable) && (!$field instanceof GDT_File) ) $firstEditableField = $firstEditableField ? $firstEditableField : $field; ?>
      <?php $field->gdo($form->gdo)->var($field->getRequestVar($form->name, $field->var)); ?>
      <?=$field->renderForm()?>
<?php endforeach; ?>
<?php if ($vf) : ?>
	</div>
<?php endif; ?>
<?php endif; ?>

<?php if ($form->hasActions()) : ?>
	<div class="gdt-form-actions">
      <?=$form->actions()->renderHTML()?>
	</div>
<?php endif; ?>

  </form>
</div>
<script>
window.GDO_FIRST_EDITABLE_FIELD = window.GDO_FIRST_EDITABLE_FIELD||'<?=$firstEditableField?$firstEditableField->id():null?>';
</script>
