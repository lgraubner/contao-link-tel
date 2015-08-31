<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   telephone_inserttag
 * @author    Lars Graubner
 * @license   MIT
 */

$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('TelephoneInserttag', 'telephoneInserttag');
