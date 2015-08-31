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

class LinkTel extends \Frontend {
    public function linkTelInserttag($strTag) {
        $arrSplit = explode("::", $strTag);

        if($arrSplit[0] == "link_tel") {
            if(isset($arrSplit[1])) {

                $label = $arrSplit[1];
                $link = preg_replace(array('/^0\s*-*/', '/\s*(\/|-)\s*|\s+/'), array('+49-', '-'), $arrSplit[1]);

                return sprintf("<a href=\"tel:%s\">%s</a>", $link, $label);
            }
        }

        return false;
    }
}
