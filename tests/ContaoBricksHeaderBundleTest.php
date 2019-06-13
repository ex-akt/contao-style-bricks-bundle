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

namespace ExAkt\ContaoBricksHeaderBundle\Tests;

use ExAkt\ContaoBricksHeaderBundle\ContaoBricksHeaderBundle;
use PHPUnit\Framework\TestCase;

class ContaoBricksHeaderBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoBricksHeaderBundle();

        $this->assertInstanceOf('ExAkt\ContaoBricksHeaderBundle\ContaoBricksHeaderBundle', $bundle);
    }
}
