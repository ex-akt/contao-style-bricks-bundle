<?php

declare(strict_types=1);

/*
 * This file is part of the ex-akt/contao-style-bricks-bundle.
 *
 * (c) ex-akt <https://github.com/ex-akt>
 *
 * @license LGPL-3.0-or-later
 */

$GLOBALS['TL_DCA']['tl_layout']['palettes']['default'] = str_replace(
    ',combineScripts',
    ',combineScripts,addFontAwesome',
    $GLOBALS['TL_DCA']['tl_layout']['palettes']['default']
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['addFontAwesome'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_layout']['addFontAwesome'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'w50'],
    'sql' => "char(1) NOT NULL default ''",
];
