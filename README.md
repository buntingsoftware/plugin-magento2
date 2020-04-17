## Bunting Personalisation (Magento 2)

Bunting's suite of machine learning tools boost conversions by serving personalized content to visitors across your site. Bunting is built for marketers, allowing you to create, launch and measure content fast.

From the moment you plug it into your site, Bunting learns about your visitors and their unique behaviour. You can then easily set up personalized messaging, recommendations, banners, emails, popups, offers and more to match your visitors’ unique wants and needs. By targeting intelligent visitor segments, you can expect to significantly raise e-commerce conversions, engagement, and order values.

## Installation

* Go to your linux box that has your m2 installation on and remove/uninstall any previous Bunting packages.
* Run `composer require bunting/personalisation-m2` (Notes 1 & 2)
* Run `composer install`
* Once done, flush your m2 caches then visit System > Web installation > Modules > Enable the Bunting plugins.   

1. This will take a few minutes and look like it's hanged, leave it a while!).
2. If you're on Docker (for instance if you installed [this](https://github.com/buntingsoftware/docker-magento2]) then run `docker exec -it docker-magento2_web_1 bash  YOUR_COMMAND` to execute inside the container.

## Support

* Officially supports PHP 5.5+ and PHP 7.x, with support for Magento version 2.0+.
* Main repo may be found @ https://bitbucket.org/bunting-software/bunting-magento-2-core
* Package is distributed @ https://packagist.org/packages/bunting/personalisation-m2

