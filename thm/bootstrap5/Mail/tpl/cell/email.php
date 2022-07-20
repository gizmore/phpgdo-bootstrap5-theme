<?php
use GDO\Mail\GDT_Email;
$field instanceof GDT_Email;
?>
<a
 href="mailto:<?= $field->renderVar(); ?>">
  <?= $field->renderVar(); ?>
</a>
 