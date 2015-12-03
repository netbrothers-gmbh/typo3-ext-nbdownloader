<?php

namespace NetBrothers\Nbdownloader\Controller;

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
 * ************************************************************* */


use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

/**
 * DownloadController
 * 
 */
class DownloadController
    extends ActionController
{

    /** default javascript
     * 
     */
    const JAVASCRIPT = 'Resources/Public/js/tx_nbdownloader.js';

    /** default css
     * 
     */
    const CSS = 'Resources/Public/css/tx_nbdownloader.css';

    /**
     *  template for single
     */
    const DEFAULT_TEMPLATE_PATH_SINGLE = 'Resources/Private/Templates/Download/Single.html';    

    /**
     * downloadRepository
     *
     * @var \NetBrothers\Nbdownloader\Domain\Repository\DownloadRepository
     * @inject
     */
    protected $downloadRepository = NULL;


    /** Pfad zur Extension
     *
     * @var string
     */
    protected $extPath = NULL;

    /**
     * set extension path to variable $extPath
     * @return void
     */
    protected function setExtPath()
    {
        $this->extPath = ExtensionManagementUtility::siteRelPath('nbdownloader');
    }

    /**
     * Initialize action
     *
     * @return void
     */
    public function initializeAction()
    {
        $this->setExtPath();
        $action = $this->request->getControllerActionName();
        if ($action != 'download') {
            $GLOBALS['TSFE']->getPageRenderer()->addCssFile($this->extPath . self::CSS);
            if ($this->settings['useLicence']) {
                $GLOBALS['TSFE']->getPageRenderer()
                    ->addJsFooterFile($this->extPath . self::JAVASCRIPT);
            }
        }
    }
    
    /**
     * get the template based on settings
     * 
     * @param type $useTemplate
     * @return string
     */
    private function getTemplate()
    {
        $templatePath = trim((string) $this->settings['templatePath']);
        if (strlen($this->settings['templatePath']) > 0) {
            $templatePath = NetBrothers\Nbdownloader\Helper\GetFilePath::getFilePath($templatePath, false);
        } else {
            $templatePath = $this->extPath . self::DEFAULT_TEMPLATE_PATH_SINGLE;  
        }
        return $templatePath;
        
    }

    /**
     * action single
     *
     * @return void
     */    
    public function singleAction()
    {
        $templatePath = $this->getTemplate();
        $download = $this->downloadRepository->findByUid($this->settings['file']); 
        $this->view->setTemplatePathAndFilename($templatePath);
        $this->view->assign('download', $download);
    }

    /**
     * action download
     *
     * @param \NetBrothers\Nbdownloader\Domain\Model\Download $download
     * @return void
     */
    public function downloadAction(\NetBrothers\Nbdownloader\Domain\Model\Download $download)
    {
        $counter = intval($download->getCounter());
        $counter++;
        $download->setCounter($counter);
        $this->downloadRepository->update($download);
        $this->objectManager->get('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager')->persistAll();
        $publicUrl = $download->getSource()->getOriginalResource()->getPublicUrl();
        $fileName = $this->downloadRepository->getDownloadName($download, $this->settings);
        $mimeType = \NetBrothers\Nbdownloader\Helper\GetMimeType::getMimeType($publicUrl);

        header("Content-type: $mimeType");
        header("Content-Disposition: attachment; filename=\"{$fileName}\"");
        ob_clean();
        flush();
        readfile(PATH_site . $publicUrl);
        exit;
    }



}
