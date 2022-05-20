<?php
namespace GDO\Bootstrap5Theme;

use GDO\Core\GDO_Module;
use GDO\Language\Trans;

/**
 * Combine a few bootstrap5 plugins into a usable gdo6 theme.
 * 
 * @author gizmore
 * @version 6.11.0
 * @since 6.10.4
 */
final class Module_Bootstrap5Theme extends GDO_Module
{
    public $module_license = 'Apache2';
    
    public function getTheme() { return 'bootstrap5'; }

    public function getDependencies()
    {
        return [
        	'FontAwesome',
            'Bootstrap5',
        	'Moment',
        	'JQueryAutocomplete',
        ];
    }
    
    public function getModuleLicenseFilenames()
    {
        return [
        	'bootstrap-datepicker/LICENSE',
        	'bootstrap4-datetimepicker/LICENSE',
        ];
    }

    ##############
    ### Assets ###
    ##############
    public function onIncludeScripts()
    {
        $this->addCSS('css/gdo6-bootstrap5.css');
        $this->addJS('js/gdo6-bootstrap5.js');
        $this->addJS('bootstrap-datepicker/js/bootstrap-datepicker.js');
        switch (Trans::$ISO)
        {
            case 'de': $iso = 'de'; break;
            case 'en':
            default: $iso = 'en-US'; break;
        }
        $this->addJS("bootstrap-datepicker/js/locales/bootstrap-datepicker.{$iso}.js");
        $this->addCSS("bootstrap-datepicker/dist/css/bootstrap-datepicker3.css");
        
        $this->addJS("bootstrap4-datetimepicker/src/js/bootstrap-datetimepicker.js");
        $this->addCSS("bootstrap4-datetimepicker/build/css/bootstrap-datetimepicker.css");
    }

}
