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

namespace ExAkt\ContaoBricksHeaderBundle\FrontendModule;

use Contao\FilesModel;
use Contao\Module;
use Contao\System;

class ModuleHeader extends Module
{
    /**
     * Template.
     *
     * @var string
     */
    protected $strTemplate = 'mod_header';

    public function compile()
    {
        $objFile = FilesModel::findByUuid($this->singleSRC);

        if (null === $objFile || !is_file(System::getContainer()->getParameter('kernel.project_dir').'/'.$objFile->path)) {
            return '';
        }

        $this->Template->logoSRC = $objFile->path;
    }
}
