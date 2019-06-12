<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace ExAkt\ContaoBricksHeaderBundle\Tests;

use ExAkt\ContaoBricksHeaderBundle\ContaoBricksHeaderBundle;
use PHPUnit\Framework\TestCase;

class ContaoSkeletonBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoBricksHeaderBundle();

        $this->assertInstanceOf('ExAkt\ContaoBricksHeaderBundle\ContaoBricksHeaderBundle', $bundle);
    }
}
