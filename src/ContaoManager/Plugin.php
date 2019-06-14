<?php

/*
 * This file is part of the ContaoBricksHeaderBundle.
 *
 * (c) ex-akt <https://github.com/ex-akt>
 *
 * @package ContaoBricksHeaderBundle
 * @author Samuel Heer <https://github.com/samuel.heer>
 * @license LGPL-3.0-or-later
 * @copyright ex-akt 2019
 */

namespace ExAkt\ContaoStyleBricksBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Config\ConfigPluginInterface;
use Contao\ManagerPlugin\Dependency\DependentPluginInterface;
use Symfony\Component\Config\Loader\LoaderInterface;
use ExAkt\ContaoStyleBricksBundle\ContaoStyleBricksBundle;


class Plugin implements BundlePluginInterface, ConfigPluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoStyleBricksBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface $loader, array $config)
    {
        $loader->load('@ContaoStyleBricksBundle/Resources/config/config.yml');
    }
}
