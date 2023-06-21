<?php

declare(strict_types=1);

/*
 * This file is part of the ex-akt/contao-style-bricks-bundle.
 *
 * (c) ex-akt <https://github.com/ex-akt>
 *
 * @license LGPL-3.0-or-later
 */

namespace ExAkt\ContaoStyleBricksBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

final class ContaoStyleBricksExtension extends Extension
{
    public function getAlias(): string
    {
        return 'ex-akt_contao_style_bricks';
    }

    public function load(array $configs, ContainerBuilder $container): void
    {
        $config = $this->processConfiguration(new Configuration(), $configs);
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../../config'));

        $loader->load('services.yml');

    }
}
