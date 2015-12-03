<?php

namespace NetBrothers\Nbdownloader\Helper;

/* * *************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Stefan Wessel <info@netbrothers.de>, NetBrothers GmbH
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * **************************************************************/

/**
 * get the mimeType of file by finfo
 * 
 */
class GetMimeType
{
    
    /**
     * get the mimeType of file by finfo
     * 
     * @param string $filePublicUrl relative path to file
     * @return string 
     */
    static public function getMimeType($filePublicUrl)
    {
        $file = PATH_site . $filePublicUrl;
        $finfo = finfo_open(FILEINFO_MIME_TYPE); // gibt den MIME-Typ nach Art der mimetype Extension zurück
        $mimeType = finfo_file($finfo, $file);
        finfo_close($finfo);
        return $mimeType;
        
    }    
}
