<?php

namespace NetBrothers\Nbdownloader\Helper;

/**
 * Created by PhpStorm.
 * User: sector12
 * Date: 18.01.2015
 * Time: 16:27
 */

use \TYPO3\CMS\Core\Utility\GeneralUtility;

class GetFilePath {

    static public function getFilePath($file, $absolutePath = true)
    {
        $path = $file;

        if (GeneralUtility::isFirstPartOfStr($file, 'file:')) {
            $fileReference = substr($file, 5);
            $resourceFactory = \TYPO3\CMS\Core\Resource\ResourceFactory::getInstance();

            $fileOrFolder = $resourceFactory->retrieveFileOrFolderObject($fileReference);
            $path = $fileOrFolder->getPublicUrl();
        }
        if ($absolutePath === true) {
            return GeneralUtility::getFileAbsFileName($path);
        }

        return $path;
    }
}