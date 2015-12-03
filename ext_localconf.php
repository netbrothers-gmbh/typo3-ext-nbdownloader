<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'NetBrothers.' . $_EXTKEY,
	'Download',
	array(
		'Download' => 'single, download',
        'Category' => 'single',
	),
	// non-cacheable actions
	array(
		'Download' => 'single, download',
        'Category' => 'single',
	)
);
