<?php
use GDO\Language\GDO_Language;
use GDO\Language\Module_Language;
use GDO\Language\Trans;
$root = GDO_WEB_ROOT;
$languages = Module_Language::instance()->cfgSupported();
?>
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <?=GDO_Language::current()->renderCell()?>
    <?=GDO_Language::current()->displayName()?>
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
<?php
foreach ($languages as $language) :
$sel = Trans::$ISO === $language->getISO() ? 'active' : '';
$icon = <<<END
<li>
 <a
  class="dropdown-item"
  onclick="GDO.Language.switch('{$language->getISO()}'); return false;">
  <img
   class="gdo-language {$sel}"
   alt="{$language->displayName()}"
   src="{$root}GDO/Language/img/{$language->getID()}.png" />
    {$language->displayName()}
 </a>
</li>
END;
echo $icon;
endforeach;
?>
  </ul>
</div>
