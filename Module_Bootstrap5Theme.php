<?php
namespace GDO\Bootstrap5Theme;

use GDO\Core\Application;
use GDO\Core\GDO_Module;
use GDO\Language\Trans;

/**
 * Combine a few Bootstrap5 plugins into a usable GDOv7 Theme.
 * The plugins are all Apache2 compatible.
 *
 * @version 7.0.1
 * @since 6.10.4
 * @author gizmore
 */
final class Module_Bootstrap5Theme extends GDO_Module
{

	public string $license = 'Apache2';

	public function getTheme(): ?string { return 'bs5'; }

	public function getDependencies(): array
	{
		return [
			'Bootstrap5',
			'Moment',
		];
	}

	public function getFriendencies(): array
	{
		return [
			'FontAwesome',
			'JQueryAutocomplete',
		];
	}

	public function getLicenseFilenames(): array
	{
		return [
			'bootstrap-datepicker/LICENSE',
			'bootstrap4-datetimepicker/LICENSE',
		];
	}

	##############
	### Assets ###
	##############
	public function onIncludeScripts(): void
	{
//		if (Application::$INSTANCE->hasTheme('bs5'))
//		{
        $this->addCSS('css/gdo7-bootstrap5.css');
        $this->addJS('js/gdo7-bootstrap5.js');
        $this->addJS('bootstrap-datepicker/js/bootstrap-datepicker.js');
        switch (Trans::$ISO)
        {
            case 'de':
                $iso = 'de';
                break;
            case 'en':
            default:
                $iso = 'en-US';
                break;
        }
        $this->addJS("bootstrap-datepicker/js/locales/bootstrap-datepicker.{$iso}.js");
        $this->addCSS('bootstrap-datepicker/dist/css/bootstrap-datepicker3.css');

        $this->addJS('bootstrap4-datetimepicker/src/js/bootstrap-datetimepicker.js');
        $this->addCSS('bootstrap4-datetimepicker/build/css/bootstrap-datetimepicker.css');
//		}
	}

}
