<?php

/**
 * Inserttag to generate valid telephone links.
 *
 * @copyright   Copyright (c) 2015, Lars Graubner
 * @author      Lars Graubner <mail@larsgraubner.de>
 * @license     LGPL-3.0+
 * @link        https://github.com/lgraubner/contao-telephone-inserttag
 */

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('TelephoneInserttag', 'telephoneInserttag');
