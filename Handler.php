<?php

namespace LithiumHosting\WebApps\PrestaShop;

use Module\Support\Webapps\App\Type\Unknown\Handler as Unknown;

class Handler extends Unknown
{
	const NAME       = 'PrestaShop';
	const ADMIN_PATH = "";
	const LINK       = 'https://www.prestashop.com/';

	const DEFAULT_FORTIFICATION = 'max';
	const FEAT_ALLOW_SSL        = true;

	public function display(): bool
	{
		return version_compare($this->php_version(), '7', '>=');
	}

	public function hasUpdate(): bool
	{
		return true;
	}
}