<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Download',
	'NetBrothers Downloader'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'NetBrothers Downloader');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nbdownloader_domain_model_download', 'EXT:nbdownloader/Resources/Private/Language/locallang_csh_tx_nbdownloader_domain_model_download.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nbdownloader_domain_model_download');
$GLOBALS['TCA']['tx_nbdownloader_domain_model_download'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:nbdownloader/Resources/Private/Language/locallang_db.xlf:tx_nbdownloader_domain_model_download',
		'label' => 'filename',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
        'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'filename,source,download_name,abstract,description,counter,author,version,public_date,cat,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Download.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_nbdownloader_domain_model_download.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nbdownloader_domain_model_category', 'EXT:nbdownloader/Resources/Private/Language/locallang_csh_tx_nbdownloader_domain_model_category.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nbdownloader_domain_model_category');
$GLOBALS['TCA']['tx_nbdownloader_domain_model_category'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:nbdownloader/Resources/Private/Language/locallang_db.xlf:tx_nbdownloader_domain_model_category',
		'label' => 'category',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'category,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Category.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_nbdownloader_domain_model_category.gif'
	),
);



//Add ts config to page (content element)
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:nbdownloader/Configuration/TypoScript/PageTsConfig.ts">'
);

$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY.'_download']='pi_flexform';            
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($_EXTKEY.'_download', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/Settings.xml');            // new!


include_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) .'Classes/Helper/class.tx_nbdownloader_addFieldsToFlexForm.php');
