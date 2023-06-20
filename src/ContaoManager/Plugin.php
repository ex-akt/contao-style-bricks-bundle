<?php

/*
 * This file is part of the ContaoStyleBricksBundle.
 *
 * (c) ex-akt <https://github.com/ex-akt>
 *
 * @package ContaoBricksHeaderBundle
 * @author Samuel Heer <https://github.com/samuelheer>
 * @license LGPL-3.0-or-later
 * @copyright ex-akt 2019
 */

namespace ExAkt\ContaoStyleBricksBundle\ContaoManager;

use Contao\ManagerPlugin\Config\ConfigPluginInterface;
use Contao\ManagerPlugin\Dependency\DependentPluginInterface;
use Symfony\Component\Config\Loader\LoaderInterface;

class Plugin implements DependentPluginInterface, ConfigPluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getPackageDependencies()
    {
        return ['contao/core'];
    }

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface $loader, array $config)
    {
        $loader->load('@ContaoStyleBricksBundle/Resources/config/config.yml');
    }
}
