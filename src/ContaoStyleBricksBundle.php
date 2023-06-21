<?php

/*
 * This file is part of the ex-akt/contao-style-bricks-bundle.
 *
 * (c) ex-akt <https://github.com/ex-akt>
 *
 * @license LGPL-3.0-or-later
 */

namespace ExAkt\ContaoStyleBricksBundle;

use ExAkt\ContaoStyleBricksBundle\DependencyInjection\ContaoStyleBricksExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ContaoStyleBricksBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

    public function getContainerExtension(): ContaoStyleBricksExtension
    {
        return new ContaoStyleBricksExtension();
    }
}
