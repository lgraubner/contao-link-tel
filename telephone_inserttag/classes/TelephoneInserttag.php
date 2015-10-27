<?php

/**
 * Inserttag to generate valid telephone links.
 *
 * @copyright   Copyright (c) 2015, Lars Graubner
 * @author      Lars Graubner <mail@larsgraubner.de>
 * @license     LGPL-3.0+
 * @link        https://github.com/lgraubner/contao-telephone-inserttag
 */

class TelephoneInserttag extends \Frontend
{

	/**
	 * Inserttag hook function
	 *
	 * @param string	$strTag
	 *
	 * @return boolean
	 */
	public function telephoneInserttag($strTag)
	{
		$arrSplit = explode("::", $strTag);

		if($arrSplit[0] == "telephone")
		{
			if(isset($arrSplit[1]))
			{

				$label = $arrSplit[1];
				$link = preg_replace(array('/^0\s*-*/', '/(\(0\)|\(|\))/', '/\s*(\/|-)\s*|(\s)+/'), array('+49-', '', '-'), $arrSplit[1]);

				return sprintf("<a href=\"tel:%s\">%s</a>", $link, $label);
			}
		}

		return false;
	}
}
