<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_nbdownloader_domain_model_download'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_nbdownloader_domain_model_download']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, filename, source, download_name, abstract, abstract, description, author, version, public_date, cat, counter',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, filename, download_name, source, abstract;;;richtext:rte_transform[mode=ts_links], description;;;richtext:rte_transform[mode=ts_links], author, version, public_date, cat, counter, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_nbdownloader_domain_model_download',
				'foreign_table_where' => 'AND tx_nbdownloader_domain_model_download.pid=###CURRENT_PID### AND tx_nbdownloader_domain_model_download.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'filename' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:nbdownloader/Resources/Private/Language/locallang_db.xlf:tx_nbdownloader_domain_model_download.filename',
			'config' => array(
                'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		'source' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:nbdownloader/Resources/Private/Language/locallang_db.xlf:tx_nbdownloader_domain_model_download.source',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'source',
				array('maxitems' => 1),
				'zip'
			),
		),
        'download_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:nbdownloader/Resources/Private/Language/locallang_db.xlf:tx_nbdownloader_domain_model_download.downloadName',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'abstract' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:nbdownloader/Resources/Private/Language/locallang_db.xlf:tx_nbdownloader_domain_model_download.abstract',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim,required',
			),
			'defaultExtras' => 'richtext[]'
		),
        'description' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:nbdownloader/Resources/Private/Language/locallang_db.xlf:tx_nbdownloader_domain_model_download.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim,required',
			),
			'defaultExtras' => 'richtext[]'
		),
		'author' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:nbdownloader/Resources/Private/Language/locallang_db.xlf:tx_nbdownloader_domain_model_download.author',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'version' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:nbdownloader/Resources/Private/Language/locallang_db.xlf:tx_nbdownloader_domain_model_download.version',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'public_date' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:nbdownloader/Resources/Private/Language/locallang_db.xlf:tx_nbdownloader_domain_model_download.public_date',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'cat' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:nbdownloader/Resources/Private/Language/locallang_db.xlf:tx_nbdownloader_domain_model_download.cat',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_nbdownloader_domain_model_category',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
        'counter' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:nbdownloader/Resources/Private/Language/locallang_db.xlf:tx_nbdownloader_domain_model_download.counter',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		
	),
);
