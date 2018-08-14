<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'VOV.' . $_EXTKEY,
    'Linktoformular',
    'Linktoformular'
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'VOV.' . $_EXTKEY,
	'Search',
	'Tim Kiem'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'VOV.' . $_EXTKEY,
	'Admin',
	'Quan Tri'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'VOV.' . $_EXTKEY,
	'Hienthi',
	'Hien Thi'
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'VOV.' . $_EXTKEY,
	'Tuyendung',
	'Tuyen Dung'
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'VOV.' . $_EXTKEY,
	'Luachonchuyennganhw',
	'Luachonchuyennganhw'
);

// plugin viec tim tho

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'VOV.' . $_EXTKEY,
	'Viectimthotinmoi',
	'Viec tim tho tin moi'
);
// plugin viec tim tho

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'VOV.' . $_EXTKEY,
	'Thotimviecliste',
	'List Tho Tim Viec'
);
// plugin viec tim tho

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'VOV.' . $_EXTKEY,
	'Viectimtholiste',
	'List Viec Tim Tho'
);
// plugin viec tim tho

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'VOV.' . $_EXTKEY,
	'Tintuyendungliste',
	'Thong Bo Tuyen Dung'
);
// plugin viec tim tho

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'VOV.' . $_EXTKEY,
	'Tintimviecliste',
	'Tin Tìm Viêc'
);


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'VOV.' . $_EXTKEY,
    'Tintimviecsearch',
    'Tin Tìm Viêc search'
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'VOV.' . $_EXTKEY,
    'Viectimthosearch',
    'Viec Tim Tho search'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'VOV.' . $_EXTKEY,
    'Viectimtholistsearch',
    'Viec Tim Tho List search'
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'VOV.' . $_EXTKEY,
    'Thotimviecsearch',
    'Tho Tim Viec search'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'VOV.' . $_EXTKEY,
    'Thotimvieclistsearch',
    'Tho Tim Viec List search'
);
if (TYPO3_MODE === 'BE') {

	/**
	 * Registers a Backend Module
	 */
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'VOV.' . $_EXTKEY,
		'tools',	 // Make module a submodule of 'tools'
		'thongke',	// Submodule key
		'',						// Position
		array(
			'Nhomtho' => 'list, show, new, create, edit, update, delete, search','Tinhthanhpho' => 'list, show, new, create, edit, update, delete','Quanhuyen' => 'list, show, new, create, edit, update, delete','Phuongxa' => 'list, show, new, create, edit, update, delete','Duongpho' => 'list, show, new, create, edit, update, delete','Kategorienganh' => 'list, show, new, create, edit, update, delete','Unterkategorienganh' => 'list, show, new, create, edit, update, delete','Danhgia' => 'list, show, new, create, edit, update, delete','Mautin' => 'list, show, new, create, edit, update, delete','Thotimviec' => 'list, show, new, create, edit, update, delete','Viectimtho' => 'list, show, new, create, edit, update, delete','Tintuyendung' => 'list, show, new, create, edit, update, delete','Tintimviec' => 'list, show, new, create, edit, update, delete',
		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_thongke.xlf',
		)
	);

}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Tim Tho Sua Chua');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_thosuachua_domain_model_tinhthanhpho', 'EXT:thosuachua/Resources/Private/Language/locallang_csh_tx_thosuachua_domain_model_tinhthanhpho.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_thosuachua_domain_model_tinhthanhpho');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_thosuachua_domain_model_quanhuyen', 'EXT:thosuachua/Resources/Private/Language/locallang_csh_tx_thosuachua_domain_model_quanhuyen.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_thosuachua_domain_model_quanhuyen');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_thosuachua_domain_model_phuongxa', 'EXT:thosuachua/Resources/Private/Language/locallang_csh_tx_thosuachua_domain_model_phuongxa.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_thosuachua_domain_model_phuongxa');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_thosuachua_domain_model_duongpho', 'EXT:thosuachua/Resources/Private/Language/locallang_csh_tx_thosuachua_domain_model_duongpho.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_thosuachua_domain_model_duongpho');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_thosuachua_domain_model_kategorienganh', 'EXT:thosuachua/Resources/Private/Language/locallang_csh_tx_thosuachua_domain_model_kategorienganh.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_thosuachua_domain_model_kategorienganh');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_thosuachua_domain_model_unterkategorienganh', 'EXT:thosuachua/Resources/Private/Language/locallang_csh_tx_thosuachua_domain_model_unterkategorienganh.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_thosuachua_domain_model_unterkategorienganh');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_thosuachua_domain_model_danhgia', 'EXT:thosuachua/Resources/Private/Language/locallang_csh_tx_thosuachua_domain_model_danhgia.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_thosuachua_domain_model_danhgia');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_thosuachua_domain_model_mautin', 'EXT:thosuachua/Resources/Private/Language/locallang_csh_tx_thosuachua_domain_model_mautin.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_thosuachua_domain_model_mautin');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_thosuachua_domain_model_thotimviec', 'EXT:thosuachua/Resources/Private/Language/locallang_csh_tx_thosuachua_domain_model_thotimviec.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_thosuachua_domain_model_thotimviec');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_thosuachua_domain_model_viectimtho', 'EXT:thosuachua/Resources/Private/Language/locallang_csh_tx_thosuachua_domain_model_viectimtho.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_thosuachua_domain_model_viectimtho');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_thosuachua_domain_model_tintuyendung', 'EXT:thosuachua/Resources/Private/Language/locallang_csh_tx_thosuachua_domain_model_tintuyendung.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_thosuachua_domain_model_tintuyendung');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_thosuachua_domain_model_tintimviec', 'EXT:thosuachua/Resources/Private/Language/locallang_csh_tx_thosuachua_domain_model_tintimviec.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_thosuachua_domain_model_tintimviec');
