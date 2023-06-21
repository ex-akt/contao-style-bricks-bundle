<?php

/*
 * This file is part of the ex-akt/contao-style-bricks-bundle.
 *
 * (c) ex-akt <https://github.com/ex-akt>
 *
 * @license LGPL-3.0-or-later
 */

namespace ExAkt\ContaoStyleBricksBundle\ContaoManager;

use Codefog\Cookiebar\CookiebarGenerator;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Config\ConfigPluginInterface;
use ExAkt\ContaoStyleBricksBundle\ContaoStyleBricksBundle;
use Symfony\Component\Config\Loader\LoaderInterface;

class Plugin implements BundlePluginInterface, ConfigPluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoStyleBricksBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class,CookiebarGenerator::class]),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface $loader, array $config)
    {
        $loader->load(__DIR__.'/../../config/config.yml');
    }
}
