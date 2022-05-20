<?php /** @var $field \GDO\Core\GDT_Error **/
use GDO\UI\GDT_Icon; ?>
<div class="alert alert-danger" role="alert">
  <?php if ($field->hasTitle()) : ?>
  <h3><?=$field->renderTitle()?></h3>
  <?php endif; ?>
  <p><?=GDT_Icon::iconS('error')?><?=$field->renderText()?></p>
</div>
