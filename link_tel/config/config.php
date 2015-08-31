<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   link_tel
 * @author    Lars Graubner
 * @license   MIT
 */

$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('LinkTel', 'linkTelInserttag');
