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

namespace ExAkt\ContaoBricksHeaderBundle\Tests;

use ExAkt\ContaoStyleBricksBundle\ContaoStyleBricksBundle;
use PHPUnit\Framework\TestCase;

class ContaoStyleBricksBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoStyleBricksBundle();

        $this->assertInstanceOf('ExAkt\ContaoStyleBricksBundle\ContaoStyleBricksBundle', $bundle);
    }
}
