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

namespace ExAkt\ContaoBricksHeaderBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use ExAkt\ContaoBricksHeaderBundle\ContaoBricksHeaderBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoBricksHeaderBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
