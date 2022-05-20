<?php /** @var $field \GDO\Core\GDT_Success **/
use GDO\UI\GDT_Icon; ?>
<div class="alert alert-success" role="alert">
  <?php if ($field->hasTitle()) : ?>
  <h3><?=$field->renderTitle()?></h3>
  <?php endif; ?>
  <?php if ($field->hasText()) : ?>
  <p><?=GDT_Icon::iconS('check')?><?=$field->renderText()?></p>
  <?php endif; ?>
</div>
