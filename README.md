# ApisCP PrestaShop application

PrestaShop 1-click Application for [ApisCP](https://apiscp.com).

## Installation

```bash
cd /usr/local/apnscp
mkdir -p config/custom/webapps
git clone https://github.com/LithiumHosting/apiscp-webapp-prestashop config/custom/webapps/prestashop
./composer dump-autoload -o
```
Edit config/custom/boot.php, create if not exists:

```php
<?php
	\a23r::registerModule('prestashop', \LithiumHosting\WebApps\PrestaShop\PrestaShop_Module::class);
	\Module\Support\Webapps::registerApplication('prestashop', \LithiumHosting\WebApps\PrestaShop\Handler::class);
```

Then refresh the web apps
```bash
cpcmd webapp:refresh-apps
```

Voila!

## Learning more
All third-party documentation is available via [docs.apiscp.com](https://docs.apiscp.com/admin/webapps/Custom/).
