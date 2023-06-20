<?php

declare(strict_types=1);

/*
 * This file is part of the ex-akt/contao-style-bricks-bundle.
 *
 * (c) ex-akt <https://github.com/ex-akt>
 *
 * @license LGPL-3.0-or-later
 */

namespace ExAkt\ContaoStyleBricksBundle\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\LayoutModel;
use Contao\PageModel;
use Contao\PageRegular;

/**
 * @Hook("getPageLayout")
 */
final class IncludeCssListener
{
    public function __invoke(PageModel $pageModel, LayoutModel $layoutModel, PageRegular $page): void
    {
        if (!$layoutModel->addFontAwesome) {
            return;
        }

        $GLOBALS['TL_FRAMEWORK_CSS'][] = 'assets/contao-component-fontawesome-free/fontawesomefree/css/fontawesome.css';
    }
}
