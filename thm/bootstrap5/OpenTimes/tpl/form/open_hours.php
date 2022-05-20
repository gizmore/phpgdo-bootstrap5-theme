<?php
use GDO\OpenTimes\GDT_OpenHours;
use GDO\UI\GDT_Icon;
$field instanceof GDT_OpenHours;
?>
<md-input-container
 class="md-block md-float md-icon-left<?= $field->classError(); ?>"
 flex
 ng-controller="GDOOpenHoursCtrl"
 ng-init='initJSON(<?=json_encode($field->configJSON()); ?>)'>

  <label class="form-label" <?=$field->htmlForID()?>><?= $field->displayLabel(); ?></label>
  <?= GDT_Icon::iconS('schedule'); ?>
<!--   <input type="text" ng-model="data.openHours.display" nag-click="openHoursDialog($event)" /> -->

  <input
   <?=$field->htmlID()?>
   ng-click="openHoursDialog($event)"
   ng-model="data.openHours.display"
   type="text"
   <?=$field->htmlFormName()?>
   value="<?= $field->display(); ?>"
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlPattern(); ?>
   <?= $field->htmlDisabled(); ?> />
  <?= $field->htmlError(); ?>
</md-input-container>
