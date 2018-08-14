<?php
return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_viectimtho',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
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
		'searchFields' => 'title,noidung,hinhanh,tailieu,tennguoitim,mieutacongviec,diachi,admin,email,phone,fax,www,lienhe,batdau,ketthuc,kategorie,unterkategorie,tinhthanhpho1,quanhuyen1,adminstrator,kategorienganh,unterkategorienganh,tinhthanhpho,quanhuyen,danhgia,',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('thosuachua') . 'Resources/Public/Icons/tx_thosuachua_domain_model_viectimtho.gif'
	),
	'interface' => array(
		//'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, noidung, hinhanh, tailieu, tennguoitim, mieutacongviec, diachi, email, phone, fax, www, lienhe, batdau, ketthuc, adminstrator, kategorienganh, unterkategorienganh, tinhthanhpho, quanhuyen, danhgia',
	'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, noidung,admin, hinhanh, tailieu, tennguoitim, mieutacongviec, diachi, email, phone, fax, www, lienhe, batdau, ketthuc,kategorie,unterkategorie,tinhthanhpho1,quanhuyen1, danhgia',
	
            ),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1,admin, hidden1;;1, title, noidung, hinhanh, tailieu, tennguoitim, mieutacongviec, diachi, email, phone, fax, www, lienhe, batdau, ketthuc,kategorie,unterkategorie,tinhthanhpho1,quanhuyen1, danhgia, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	//	'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, noidung, hinhanh, tailieu, tennguoitim, mieutacongviec, diachi, email, phone, fax, www, lienhe, batdau, ketthuc, adminstrator, kategorienganh, unterkategorienganh, tinhthanhpho, quanhuyen, danhgia, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	
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
				'foreign_table' => 'tx_thosuachua_domain_model_viectimtho',
				'foreign_table_where' => 'AND tx_thosuachua_domain_model_viectimtho.pid=###CURRENT_PID### AND tx_thosuachua_domain_model_viectimtho.sys_language_uid IN (-1,0)',
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
            	'hidden1' => array(
			'exclude' => 1,
			'label' => 'Hidden1',
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
        'crdate' => array(
            'label' => 'crdate',
            'config' => array(
                'type' => 'passthrough',
            )
        ),
		'title' => array(
			'exclude' => 1,
			'label' => 'Tiêu Đề',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'noidung' => array(
			'exclude' => 1,
			'label' => 'noidung',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'hinhanh' => array(
			'exclude' => 1,
			'label' => 'hinhanh',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'hinhanh',
				array('maxitems' => 1,
					'appearance' => array(
						'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
					),
					'foreign_types' => array(
						'0' => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						)
					)
				),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'tailieu' => array(
			'exclude' => 1,
			'label' => 'tailieu',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'tailieu',
				array('maxitems' => 1,
					'appearance' => array(
						'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:media.addFileReference'
					),
					'foreign_types' => array(
						'0' => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						)
					)
				)
			),
		),
		'tennguoitim' => array(
			'exclude' => 1,
			'label' => 'tennguoitim',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'mieutacongviec' => array(
			'exclude' => 1,
			'label' => 'mieutacongviec',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'diachi' => array(
			'exclude' => 1,
			'label' => 'diachi',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'email' => array(
			'exclude' => 1,
			'label' => 'email',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'phone' => array(
			'exclude' => 1,
			'label' => 'phone',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'fax' => array(
			'exclude' => 1,
			'label' => 'fax',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'www' => array(
			'exclude' => 1,
			'label' => 'www',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'lienhe' => array(
			'exclude' => 1,
			'label' => 'lienhe',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'batdau' => array(
			'exclude' => 1,
			'label' => 'batdau',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ketthuc' => array(
			'exclude' => 1,
			'label' => 'ketthuc',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
        'kategorie' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_viectimtho.kategorie',
            'config' => array(
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            )
        ),
        'unterkategorie' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_viectimtho.unterkategorie',
            'config' => array(
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            )
        ),
        'tinhthanhpho1' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_viectimtho.tinhthanhpho1',
            'config' => array(
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            )
        ),
        'quanhuyen1' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_viectimtho.quanhuyen1',
            'config' => array(
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            )
        ),
//		'adminstrator' => array(
//			'exclude' => 1,
//			'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_viectimtho.adminstrator',
//			'config' => array(
//				'type' => 'inline',
//				'foreign_table' => 'fe_users',
//				'minitems' => 0,
//				'maxitems' => 1,
//				'appearance' => array(
//					'collapseAll' => 0,
//					'levelLinksPosition' => 'top',
//					'showSynchronizationLink' => 1,
//					'showPossibleLocalizationRecords' => 1,
//					'showAllLocalizationLink' => 1
//				),
//			),
//		),
//		'kategorienganh' => array(
//			'exclude' => 1,
//			'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_viectimtho.kategorienganh',
//			'config' => array(
//				'type' => 'select',
//				'foreign_table' => 'tx_thosuachua_domain_model_kategorienganh',
//				'MM' => 'tx_thosuachua_viectimtho_kategorienganh_mm',
//				'size' => 10,
//				'autoSizeMax' => 30,
//				'maxitems' => 9999,
//				'multiple' => 0,
//				'wizards' => array(
//					'_PADDING' => 1,
//					'_VERTICAL' => 1,
//					'edit' => array(
//						'module' => array(
//							'name' => 'wizard_edit',
//						),
//						'type' => 'popup',
//						'title' => 'Edit',
//						'icon' => 'edit2.gif',
//						'popup_onlyOpenIfSelected' => 1,
//						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
//						),
//					'add' => Array(
//						'module' => array(
//							'name' => 'wizard_add',
//						),
//						'type' => 'script',
//						'title' => 'Create new',
//						'icon' => 'add.gif',
//						'params' => array(
//							'table' => 'tx_thosuachua_domain_model_kategorienganh',
//							'pid' => '###CURRENT_PID###',
//							'setValue' => 'prepend'
//						),
//					),
//				),
//			),
//		),
//		'unterkategorienganh' => array(
//			'exclude' => 1,
//			'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_viectimtho.unterkategorienganh',
//			'config' => array(
//				'type' => 'select',
//				'foreign_table' => 'tx_thosuachua_domain_model_unterkategorienganh',
//				'MM' => 'tx_thosuachua_viectimtho_unterkategorienganh_mm',
//				'size' => 10,
//				'autoSizeMax' => 30,
//				'maxitems' => 9999,
//				'multiple' => 0,
//				'wizards' => array(
//					'_PADDING' => 1,
//					'_VERTICAL' => 1,
//					'edit' => array(
//						'module' => array(
//							'name' => 'wizard_edit',
//						),
//						'type' => 'popup',
//						'title' => 'Edit',
//						'icon' => 'edit2.gif',
//						'popup_onlyOpenIfSelected' => 1,
//						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
//						),
//					'add' => Array(
//						'module' => array(
//							'name' => 'wizard_add',
//						),
//						'type' => 'script',
//						'title' => 'Create new',
//						'icon' => 'add.gif',
//						'params' => array(
//							'table' => 'tx_thosuachua_domain_model_unterkategorienganh',
//							'pid' => '###CURRENT_PID###',
//							'setValue' => 'prepend'
//						),
//					),
//				),
//			),
//		),
//		'tinhthanhpho' => array(
//			'exclude' => 1,
//			'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_viectimtho.tinhthanhpho',
//			'config' => array(
//				'type' => 'select',
//				'foreign_table' => 'tx_thosuachua_domain_model_tinhthanhpho',
//				'MM' => 'tx_thosuachua_viectimtho_tinhthanhpho_mm',
//				'size' => 10,
//				'autoSizeMax' => 30,
//				'maxitems' => 9999,
//				'multiple' => 0,
//				'wizards' => array(
//					'_PADDING' => 1,
//					'_VERTICAL' => 1,
//					'edit' => array(
//						'module' => array(
//							'name' => 'wizard_edit',
//						),
//						'type' => 'popup',
//						'title' => 'Edit',
//						'icon' => 'edit2.gif',
//						'popup_onlyOpenIfSelected' => 1,
//						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
//						),
//					'add' => Array(
//						'module' => array(
//							'name' => 'wizard_add',
//						),
//						'type' => 'script',
//						'title' => 'Create new',
//						'icon' => 'add.gif',
//						'params' => array(
//							'table' => 'tx_thosuachua_domain_model_tinhthanhpho',
//							'pid' => '###CURRENT_PID###',
//							'setValue' => 'prepend'
//						),
//					),
//				),
//			),
//		),
//		'quanhuyen' => array(
//			'exclude' => 1,
//			'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_viectimtho.quanhuyen',
//			'config' => array(
//				'type' => 'select',
//				'foreign_table' => 'tx_thosuachua_domain_model_quanhuyen',
//				'MM' => 'tx_thosuachua_viectimtho_quanhuyen_mm',
//				'size' => 10,
//				'autoSizeMax' => 30,
//				'maxitems' => 9999,
//				'multiple' => 0,
//				'wizards' => array(
//					'_PADDING' => 1,
//					'_VERTICAL' => 1,
//					'edit' => array(
//						'module' => array(
//							'name' => 'wizard_edit',
//						),
//						'type' => 'popup',
//						'title' => 'Edit',
//						'icon' => 'edit2.gif',
//						'popup_onlyOpenIfSelected' => 1,
//						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
//						),
//					'add' => Array(
//						'module' => array(
//							'name' => 'wizard_add',
//						),
//						'type' => 'script',
//						'title' => 'Create new',
//						'icon' => 'add.gif',
//						'params' => array(
//							'table' => 'tx_thosuachua_domain_model_quanhuyen',
//							'pid' => '###CURRENT_PID###',
//							'setValue' => 'prepend'
//						),
//					),
//				),
//			),
//		),
               'kategorienganh' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_thotimviec.kategorienganh',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_thosuachua_domain_model_kategorienganh',
			),
		),
            	'unterkategorienganh' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_thotimviec.unterkategorienganh',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_thosuachua_domain_model_unterkategorienganh',
			),
		),
            'tinhthanhpho' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_thotimviec.tinhthanhpho',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_thosuachua_domain_model_tinhthanhpho',
			),
		),
		'quanhuyen' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_thotimviec.quanhuyen',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_thosuachua_domain_model_quanhuyen',
                    ),
		),
		
		'danhgia' => array(
			'exclude' => 1,
			'label' => 'danhgia',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_thosuachua_domain_model_danhgia',
				'foreign_field' => 'viectimtho',
				'foreign_sortby' => 'sorting',
				'maxitems' => 9999,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'useSortable' => 1,
					'showAllLocalizationLink' => 1
				),
			),

		),
        'admin' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_tintimviec.admin',
            'config' => array(
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            )
        ),
		'nhomtho' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);