<?php

if (!isset($GLOBALS['TCA']['fe_users']['ctrl']['type'])) {
	if (file_exists($GLOBALS['TCA']['fe_users']['ctrl']['dynamicConfigFile'])) {
		require_once($GLOBALS['TCA']['fe_users']['ctrl']['dynamicConfigFile']);
	}
	// no type field defined, so we define it here. This will only happen the first time the extension is installed!!
	$GLOBALS['TCA']['fe_users']['ctrl']['type'] = 'tx_extbase_type';
	$tempColumnstx_thosuachua_fe_users = array();
	$tempColumnstx_thosuachua_fe_users[$GLOBALS['TCA']['fe_users']['ctrl']['type']] = array(
		'exclude' => 1,
		'label'   => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua.tx_extbase_type',
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('Nhomtho','Tx_Thosuachua_Nhomtho')
			),
			'default' => 'Tx_Thosuachua_Nhomtho',
			'size' => 1,
			'maxitems' => 1,
		)
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $tempColumnstx_thosuachua_fe_users, 1);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
	'fe_users',
	$GLOBALS['TCA']['fe_users']['ctrl']['type'],
	'',
	'after:' . $GLOBALS['TCA']['fe_users']['ctrl']['label']
);

$tmp_thosuachua_columns = array(

	'ten' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho.ten',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
        'crdate' => array(
            'label' => 'crdate',
            'config' => array(
                'type' => 'passthrough',
            )
        ),
	'mieuta' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho.mieuta',
		'config' => array(
			'type' => 'text',
			'cols' => 40,
			'rows' => 15,
			'eval' => 'trim'
		)
	),
	'tailieu' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho.tailieu',
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
	'diachi' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho.diachi',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
         'feright' => array(
		'exclude' => 1,
		'label' => 'Quyền hạn (1:mien phí 2 tin, 2: giới han , them sau,3: superadmin)',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'sonha' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho.sonha',
		'config' => array(
			'type' => 'input',
			'size' => 4,
			'eval' => 'int'
		)
	),
	'email' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho.email',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'dienthoai' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho.dienthoai',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'lienhe' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho.lienhe',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'emaillienhe' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho.emaillienhe',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'trangweb' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho.trangweb',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'kategorienghanh' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho.kategorienghanh',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'tx_thosuachua_domain_model_kategorienganh',
			'MM' => 'tx_thosuachua_nhomtho_kategorienganh_mm',
//			'size' => 10,
//			'autoSizeMax' => 30,
//			'maxitems' => 9999,
//			'multiple' => 0,
//			'wizards' => array(
//				'_PADDING' => 1,
//				'_VERTICAL' => 1,
//				'edit' => array(
//					'module' => array(
//						'name' => 'wizard_edit',
//					),
//					'type' => 'popup',
//					'title' => 'Edit',
//					'icon' => 'edit2.gif',
//					'popup_onlyOpenIfSelected' => 1,
//					'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
//					),
//				'add' => Array(
//					'module' => array(
//						'name' => 'wizard_add',
//					),
//					'type' => 'script',
//					'title' => 'Create new',
//					'icon' => 'add.gif',
//					'params' => array(
//						'table' => 'tx_thosuachua_domain_model_kategorienganh',
//						'pid' => '###CURRENT_PID###',
//						'setValue' => 'prepend'
//					),
//				),
//			),
		),
	),
	'unterkategorienganh' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho.unterkategorienganh',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'tx_thosuachua_domain_model_unterkategorienganh',
			'MM' => 'tx_thosuachua_nhomtho_unterkategorienganh_mm',
//			'size' => 10,
//			'autoSizeMax' => 30,
//			'maxitems' => 9999,
//			'multiple' => 0,
//			'wizards' => array(
//				'_PADDING' => 1,
//				'_VERTICAL' => 1,
//				'edit' => array(
//					'module' => array(
//						'name' => 'wizard_edit',
//					),
//					'type' => 'popup',
//					'title' => 'Edit',
//					'icon' => 'edit2.gif',
//					'popup_onlyOpenIfSelected' => 1,
//					'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
//					),
//				'add' => Array(
//					'module' => array(
//						'name' => 'wizard_add',
//					),
//					'type' => 'script',
//					'title' => 'Create new',
//					'icon' => 'add.gif',
//					'params' => array(
//						'table' => 'tx_thosuachua_domain_model_unterkategorienganh',
//						'pid' => '###CURRENT_PID###',
//						'setValue' => 'prepend'
//					),
//				),
//			),
		),
	),
	'tinhthanhpho' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho.tinhthanhpho',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'tx_thosuachua_domain_model_tinhthanhpho',
			'MM' => 'tx_thosuachua_nhomtho_tinhthanhpho_mm',
//			'size' => 10,
//			'autoSizeMax' => 30,
//			'maxitems' => 9999,
//			'multiple' => 0,
//			'wizards' => array(
//				'_PADDING' => 1,
//				'_VERTICAL' => 1,
//				'edit' => array(
//					'module' => array(
//						'name' => 'wizard_edit',
//					),
//					'type' => 'popup',
//					'title' => 'Edit',
//					'icon' => 'edit2.gif',
//					'popup_onlyOpenIfSelected' => 1,
//					'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
//					),
//				'add' => Array(
//					'module' => array(
//						'name' => 'wizard_add',
//					),
//					'type' => 'script',
//					'title' => 'Create new',
//					'icon' => 'add.gif',
//					'params' => array(
//						'table' => 'tx_thosuachua_domain_model_tinhthanhpho',
//						'pid' => '###CURRENT_PID###',
//						'setValue' => 'prepend'
//					),
//				),
//			),
		),
	),
	'quanhuyen' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho.quanhuyen',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'tx_thosuachua_domain_model_quanhuyen',
			'MM' => 'tx_thosuachua_nhomtho_quanhuyen_mm',
//			'size' => 10,
//			'autoSizeMax' => 30,
//			'maxitems' => 9999,
//			'multiple' => 0,
//			'wizards' => array(
//				'_PADDING' => 1,
//				'_VERTICAL' => 1,
//				'edit' => array(
//					'module' => array(
//						'name' => 'wizard_edit',
//					),
//					'type' => 'popup',
//					'title' => 'Edit',
//					'icon' => 'edit2.gif',
//					'popup_onlyOpenIfSelected' => 1,
//					'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
//					),
//				'add' => Array(
//					'module' => array(
//						'name' => 'wizard_add',
//					),
//					'type' => 'script',
//					'title' => 'Create new',
//					'icon' => 'add.gif',
//					'params' => array(
//						'table' => 'tx_thosuachua_domain_model_quanhuyen',
//						'pid' => '###CURRENT_PID###',
//						'setValue' => 'prepend'
//					),
//				),
//			),
		),
	),
	'phuongxa' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho.phuongxa',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'tx_thosuachua_domain_model_phuongxa',
			'MM' => 'tx_thosuachua_nhomtho_phuongxa_mm',
//			'size' => 10,
//			'autoSizeMax' => 30,
//			'maxitems' => 9999,
//			'multiple' => 0,
//			'wizards' => array(
//				'_PADDING' => 1,
//				'_VERTICAL' => 1,
//				'edit' => array(
//					'module' => array(
//						'name' => 'wizard_edit',
//					),
//					'type' => 'popup',
//					'title' => 'Edit',
//					'icon' => 'edit2.gif',
//					'popup_onlyOpenIfSelected' => 1,
//					'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
//					),
//				'add' => Array(
//					'module' => array(
//						'name' => 'wizard_add',
//					),
//					'type' => 'script',
//					'title' => 'Create new',
//					'icon' => 'add.gif',
//					'params' => array(
//						'table' => 'tx_thosuachua_domain_model_phuongxa',
//						'pid' => '###CURRENT_PID###',
//						'setValue' => 'prepend'
//					),
//				),
//			),
		),
	),
	'duongpho' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho.duongpho',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'tx_thosuachua_domain_model_duongpho',
			'MM' => 'tx_thosuachua_nhomtho_duongpho_mm',
//			'size' => 10,
//			'autoSizeMax' => 30,
//			'maxitems' => 9999,
//			'multiple' => 0,
//			'wizards' => array(
//				'_PADDING' => 1,
//				'_VERTICAL' => 1,
//				'edit' => array(
//					'module' => array(
//						'name' => 'wizard_edit',
//					),
//					'type' => 'popup',
//					'title' => 'Edit',
//					'icon' => 'edit2.gif',
//					'popup_onlyOpenIfSelected' => 1,
//					'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
//					),
//				'add' => Array(
//					'module' => array(
//						'name' => 'wizard_add',
//					),
//					'type' => 'script',
//					'title' => 'Create new',
//					'icon' => 'add.gif',
//					'params' => array(
//						'table' => 'tx_thosuachua_domain_model_duongpho',
//						'pid' => '###CURRENT_PID###',
//						'setValue' => 'prepend'
//					),
//				),
//			),
		),
	),
	'danhgia' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho.danhgia',
		'config' => array(
			'type' => 'inline',
			'foreign_table' => 'tx_thosuachua_domain_model_danhgia',
			'foreign_field' => 'nhomtho',
//			'foreign_sortby' => 'sorting',
//			'maxitems' => 9999,
//			'appearance' => array(
//				'collapseAll' => 0,
//				'levelLinksPosition' => 'top',
//				'showSynchronizationLink' => 1,
//				'showPossibleLocalizationRecords' => 1,
//				'useSortable' => 1,
//				'showAllLocalizationLink' => 1
//			),
		),

	),
      'mautin' => array(
			'config' => array(
			'foreign_table' => 'tx_thosuachua_domain_model_mautin',
			'foreign_field' => 'nhomtho',
			),
	),
//	'mautin' => array(
//		'exclude' => 1,
//		'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho.mautin',
//		'config' => array(
//			'type' => 'inline',
//			'foreign_table' => 'tx_thosuachua_domain_model_mautin',
//			'foreign_field' => 'nhomtho',
//			'maxitems' => 9999,
//			'appearance' => array(
//				'collapseAll' => 0,
//				'levelLinksPosition' => 'top',
//				'showSynchronizationLink' => 1,
//				'showPossibleLocalizationRecords' => 1,
//				'showAllLocalizationLink' => 1
//			),
//		),
//
//	),
      'thotimviec' => array(
			'config' => array(
			'foreign_table' => 'tx_thosuachua_domain_model_thotimviec',
			'foreign_field' => 'nhomtho',
			),
	),
//	'thotimviec' => array(
//		'exclude' => 1,
//		'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho.thotimviec',
//		'config' => array(
//			'type' => 'inline',
//			'foreign_table' => 'tx_thosuachua_domain_model_thotimviec',
//			'foreign_field' => 'nhomtho',
//			'maxitems' => 9999,
//			'appearance' => array(
//				'collapseAll' => 0,
//				'levelLinksPosition' => 'top',
//				'showSynchronizationLink' => 1,
//				'showPossibleLocalizationRecords' => 1,
//				'showAllLocalizationLink' => 1
//			),
//		),
//
//	),
      'viectimtho' => array(
			'config' => array(
			'foreign_table' => 'tx_thosuachua_domain_model_viectimtho',
			'foreign_field' => 'nhomtho',

			),
	),
//	'viectimtho' => array(
//		'exclude' => 1,
//		'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho.viectimtho',
//		'config' => array(
//			'type' => 'inline',
//			'foreign_table' => 'tx_thosuachua_domain_model_viectimtho',
//			'foreign_field' => 'nhomtho',
//			'maxitems' => 9999,
//			'appearance' => array(
//				'collapseAll' => 0,
//				'levelLinksPosition' => 'top',
//				'showSynchronizationLink' => 1,
//				'showPossibleLocalizationRecords' => 1,
//				'showAllLocalizationLink' => 1
//			),
//		),
//
//	),
      'tintuyendung' => array(
			'config' => array(
			'foreign_table' => 'tx_thosuachua_domain_model_tintuyendung',
			'foreign_field' => 'nhomtho',
			),
	),
//	'tintuyendung' => array(
//		'exclude' => 1,
//		'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho.tintuyendung',
//		'config' => array(
//			'type' => 'inline',
//			'foreign_table' => 'tx_thosuachua_domain_model_tintuyendung',
//			'foreign_field' => 'nhomtho',
//			'maxitems' => 9999,
//			'appearance' => array(
//				'collapseAll' => 0,
//				'levelLinksPosition' => 'top',
//				'showSynchronizationLink' => 1,
//				'showPossibleLocalizationRecords' => 1,
//				'showAllLocalizationLink' => 1
//			),
//		),
//
//	),
        'tintimviec' => array(
			'config' => array(
                        'foreign_table' => 'tx_thosuachua_domain_model_tintimviec',
			'foreign_field' => 'nhomtho',
			),
	),
//	'tintimviec' => array(
//		'exclude' => 1,
//		'label' => 'LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho.tintimviec',
//		'config' => array(
//			'type' => 'inline',
//			'foreign_table' => 'tx_thosuachua_domain_model_tintimviec',
//			'foreign_field' => 'nhomtho',
//			'maxitems' => 9999,
//			'appearance' => array(
//				'collapseAll' => 0,
//				'levelLinksPosition' => 'top',
//				'showSynchronizationLink' => 1,
//				'showPossibleLocalizationRecords' => 1,
//				'showAllLocalizationLink' => 1
//			),
//		),
//
//	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users',$tmp_thosuachua_columns);

/* inherit and extend the show items from the parent class */

if(isset($GLOBALS['TCA']['fe_users']['types']['0']['showitem'])) {
	$GLOBALS['TCA']['fe_users']['types']['Tx_Thosuachua_Nhomtho']['showitem'] = $GLOBALS['TCA']['fe_users']['types']['0']['showitem'];
} elseif(is_array($GLOBALS['TCA']['fe_users']['types'])) {
	// use first entry in types array
	$fe_users_type_definition = reset($GLOBALS['TCA']['fe_users']['types']);
	$GLOBALS['TCA']['fe_users']['types']['Tx_Thosuachua_Nhomtho']['showitem'] = $fe_users_type_definition['showitem'];
} else {
	$GLOBALS['TCA']['fe_users']['types']['Tx_Thosuachua_Nhomtho']['showitem'] = '';
}
$GLOBALS['TCA']['fe_users']['types']['Tx_Thosuachua_Nhomtho']['showitem'] .= ',--div--;LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:tx_thosuachua_domain_model_nhomtho,';
//$GLOBALS['TCA']['fe_users']['types']['Tx_Thosuachua_Nhomtho']['showitem'] .= 'ten, mieuta, tailieu, diachi, sonha, email, dienthoai, lienhe, emaillienhe, trangweb, kategorienghanh, unterkategorienganh, tinhthanhpho, quanhuyen, phuongxa, duongpho, danhgia, mautin, thotimviec, viectimtho, tintuyendung, tintimviec';
$GLOBALS['TCA']['fe_users']['types']['Tx_Thosuachua_Nhomtho']['showitem'] .= 'ten,status,feright, mieuta, tailieu, diachi, sonha, email, dienthoai, lienhe, emaillienhe, trangweb, tintuyendung, tintimviec';

$GLOBALS['TCA']['fe_users']['columns'][$GLOBALS['TCA']['fe_users']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:thosuachua/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.Tx_Thosuachua_Nhomtho','Tx_Thosuachua_Nhomtho');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
	'',
	'EXT:/Resources/Private/Language/locallang_csh_.xlf'
);