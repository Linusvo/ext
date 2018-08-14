<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'VOV.' . $_EXTKEY,
	'Search',
	array(
		'Nhomtho' => 'search, searchlist, hienthi, list, show, new, create, edit, update, delete',
		'Tinhthanhpho' => 'list, show, new, create, edit, update, delete',
		'Quanhuyen' => 'list, show, new, create, edit, update, delete',
		'Phuongxa' => 'list, show, new, create, edit, update, delete',
		'Duongpho' => 'list, show, new, create, edit, update, delete',
		'Kategorienganh' => 'list, show, new, create, edit, update, delete',
		'Unterkategorienganh' => 'list, show, new, create, edit, update, delete',
		'Danhgia' => 'list, show, new, create, edit, update, delete',
		'Mautin' => 'list, show, new, create, edit, update, delete',
		'Thotimviec' => 'list, show, new, create, edit, update, delete',
		'Viectimtho' => 'list, show, new, create, edit, update, delete',
		'Tintuyendung' => 'list, show, new, create, edit, update, delete',
		'Tintimviec' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'Nhomtho' => 'create, update, delete, ',
		'Tinhthanhpho' => 'create, update, delete',
		'Quanhuyen' => 'create, update, delete',
		'Phuongxa' => 'create, update, delete',
		'Duongpho' => 'create, update, delete',
		'Kategorienganh' => 'create, update, delete',
		'Unterkategorienganh' => 'create, update, delete',
		'Danhgia' => 'create, update, delete',
		'Mautin' => 'create, update, delete',
		'Thotimviec' => 'create, update, delete',
		'Viectimtho' => 'create, update, delete',
		'Tintuyendung' => 'create, update, delete',
		'Tintimviec' => 'create, update, delete',
		
	)
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Luachonquanhuyen',
    array(
        'Nhomtho' => 'quanhuyen',

    ),
    // non-cacheable actions
    array(
        'Nhomtho' => 'quanhuyen',

    )
);
// tuyen dung
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Luachonquanhuyentuyendung',
    array(
        'Nhomtho' => 'quanhuyentuyendung',

    ),
    // non-cacheable actions
    array(
        'Nhomtho' => 'quanhuyentuyendung',

    )
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Luachonchuyennganhtuyendung',
    array(
        'Nhomtho' => 'chonchuyennganhtuyendung',

    ),
    // non-cacheable actions
    array(
        'Nhomtho' => 'chonchuyennganhtuyendung',

    )
);
// ende tuyen dung

// tin tim viec
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Luachonquanhuyentintimviec',
    array(
        'Nhomtho' => 'chonquanhuyentintimviec',

    ),
    // non-cacheable actions
    array(
        'Nhomtho' => 'chonquanhuyentintimviec',

    )
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Luachonchuyennganhtintimviec',
    array(
        'Nhomtho' => 'chonchuyennganhtintimviec',

    ),
    // non-cacheable actions
    array(
        'Nhomtho' => 'chonchuyennganhtintimviec',

    )
);
// tin tim viec ende

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Luachonquanhuyen4',
    array(
        'Nhomtho' => 'quanhuyen4',

    ),
    // non-cacheable actions
    array(
        'Nhomtho' => 'quanhuyen4',

    )
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Luachonquanhuyen1',
    array(
        'Nhomtho' => 'quanhuyenmautin',

    ),
    // non-cacheable actions
    array(
        'Nhomtho' => 'quanhuyenmautin',

    )
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Luachonchuyennganh',
    array(
        'Nhomtho' => 'chonchuyennganh',

    ),
    // non-cacheable actions
    array(
        'Nhomtho' => 'chonchuyennganh',

    )
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Luachonchuyennganh1',
    array(
        'Nhomtho' => 'chonchuyennganh1',

    ),
    // non-cacheable actions
    array(
        'Nhomtho' => 'chonchuyennganh1',

    )
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Luachonquanhuyen2',
    array(
        'Nhomtho' => 'quanhuyen2',

    ),
    // non-cacheable actions
    array(
        'Nhomtho' => 'quanhuyen2',

    )
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Luachonchuyennganh2',
    array(
        'Nhomtho' => 'chonchuyennganh2',

    ),
    // non-cacheable actions
    array(
        'Nhomtho' => 'chonchuyennganh2',

    )
);

// viêc tim tho tin moi plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Viectimthotinmoi',
    array(
       'Viectimtho' => 'tinmoi, list, show, new, create, edit, update, delete',

    ),
    // non-cacheable actions
    array(
       'Viectimtho' => 'tinmoi, list, show, new, create, edit, update, delete',

    )
);
// viêc tim tho tin moi plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Thotimviecliste',
    array(
       'Thotimviec' => 'list, show, new, create, edit, update, delete',

    ),
    // non-cacheable actions
    array(
       'Thotimviec' => 'list, show, new, create, edit, update, delete',

    )
);
// viêc tim tho tin moi plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Viectimtholiste',
    array(
       'Viectimtho' => 'list, show, new, create, edit, update, delete',

    ),
    // non-cacheable actions
    array(
       'Viectimtho' => 'list, show, new, create, edit, update, delete',

    )
);
// viêc tim tho tin moi plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Tintuyendungliste',
    array(
       'Tintuyendung' => 'list, show, new, create, edit, update, delete',

    ),
    // non-cacheable actions
    array(
       'Tintuyendung' => 'list, show, new, create, edit, update, delete',

    )
);
// viêc tim tho tin moi plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Tintimviecliste',
    array(
       'Tintimviec' => 'list, show, new, create, edit, update, delete, search',

    ),
    // non-cacheable actions
    array(
       'Tintimviec' => 'list, show, new, create, edit, update, delete ,search',

    )
);

// viêc tim tho tin moi plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Tintimviecsearch',
    array(
        'Tintimviec' => 'search, list, show',

    ),
    // non-cacheable actions
    array(
        'Tintimviec' => 'search, list, show',

    )
);
// viêc tim tho tin moi plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Viectimthosearch',
    array(
        'Viectimtho' => 'search, list, show',

    ),
    // non-cacheable actions
    array(
        'Viectimtho' => 'search, list, show',

    )
);

// viêc tim tho tin moi plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Viectimtholistsearch',
    array(
        'Viectimtho' => 'listsearch, search, list, show',

    ),
    // non-cacheable actions
    array(
        'Viectimtho' => 'listsearch, search, list, show',

    )
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Linktoformular',
    array(
        'Nhomtho' => 'linktoformular',

    ),
    // non-cacheable actions
    array(
        'Nhomtho' => 'linktoformular',

    )
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Linktoexterne',
    array(
        'Nhomtho' => 'linktoexterne',

    ),
    // non-cacheable actions
    array(
        'Nhomtho' => 'linktoexterne',

    )
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'VOV.' . $_EXTKEY,
	'Admin',
	array(
		//'Nhomtho' => 'list, show, new, create, edit, update, delete, search',
            	'Nhomtho' => 'admin,list, show, new, create, edit, update, update1, delete, search, editmautin',
		'Tinhthanhpho' => 'list, show, new, create, edit, update, delete',
		'Quanhuyen' => 'list, show, new, create, edit, update, delete',
		'Phuongxa' => 'list, show, new, create, edit, update, delete',
		'Duongpho' => 'list, show, new, create, edit, update, delete',
		'Kategorienganh' => 'list, show, new, create, edit, update, delete',
		'Unterkategorienganh' => 'list, show, new, create, edit, update, delete',
		'Danhgia' => 'list, show, new, create, edit, update, delete',
		'Mautin' => 'list, show, new, create, edit, update, delete',
		'Thotimviec' => 'list, show, new, create, edit, update, delete, xoatin',
		'Viectimtho' => 'list, show, new, create, edit, update, delete, xoatin',
		'Tintuyendung' => 'list, show, new, create, edit, update, delete, xoatin',
		'Tintimviec' => 'list, show, new, create, edit, update, delete, xoatin',
		
	),
	// non-cacheable actions
	array(
		'Nhomtho' => 'admin,list, show,create, update, delete, update1, ',
		'Tinhthanhpho' => 'create, update, delete',
		'Quanhuyen' => 'create, update, delete',
		'Phuongxa' => 'create, update, delete',
		'Duongpho' => 'create, update, delete',
		'Kategorienganh' => 'create, update, delete',
		'Unterkategorienganh' => 'create, update, delete',
		'Danhgia' => 'create, update, delete',
		'Mautin' => 'create, update, delete',
		'Thotimviec' => 'create, update, delete',
		'Viectimtho' => 'create, update, delete',
		'Tintuyendung' => 'create, update, delete',
		'Tintimviec' => 'create, update, delete',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'VOV.' . $_EXTKEY,
	'Hienthi',
	array(
		'Nhomtho' => 'hienthi,list, show, new, create, edit, update, delete, search',
		'Tinhthanhpho' => 'list, show, new, create, edit, update, delete',
		'Quanhuyen' => 'list, show, new, create, edit, update, delete',
		'Phuongxa' => 'list, show, new, create, edit, update, delete',
		'Duongpho' => 'list, show, new, create, edit, update, delete',
		'Kategorienganh' => 'list, show, new, create, edit, update, delete',
		'Unterkategorienganh' => 'list, show, new, create, edit, update, delete',
		'Danhgia' => 'list, show, new, create, edit, update, delete',
		'Mautin' => 'list, show, new, create, edit, update, delete',
		'Thotimviec' => 'list, show, new, create, edit, update, delete',
		'Viectimtho' => 'list, show, new, create, edit, update, delete',
		'Tintuyendung' => 'list, show, new, create, edit, update, delete',
		'Tintimviec' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'Nhomtho' => 'hienthi, list, show, create, update, delete, search ',
		'Tinhthanhpho' => 'create, update, delete',
		'Quanhuyen' => 'create, update, delete',
		'Phuongxa' => 'create, update, delete',
		'Duongpho' => 'create, update, delete',
		'Kategorienganh' => 'create, update, delete',
		'Unterkategorienganh' => 'create, update, delete',
		'Danhgia' => 'create, update, delete',
		'Mautin' => 'create, update, delete',
		'Thotimviec' => 'create, update, delete',
		'Viectimtho' => 'create, update, delete',
		'Tintuyendung' => 'create, update, delete',
		'Tintimviec' => 'create, update, delete',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'VOV.' . $_EXTKEY,
	'Tuyendung',
	array(
		'Nhomtho' => 'tuyendung,list, show, new, create, edit, update, delete, search',
		'Tinhthanhpho' => 'list, show, new, create, edit, update, delete',
		'Quanhuyen' => 'list, show, new, create, edit, update, delete',
		'Phuongxa' => 'list, show, new, create, edit, update, delete',
		'Duongpho' => 'list, show, new, create, edit, update, delete',
		'Kategorienganh' => 'list, show, new, create, edit, update, delete',
		'Unterkategorienganh' => 'list, show, new, create, edit, update, delete',
		'Danhgia' => 'list, show, new, create, edit, update, delete',
		'Mautin' => 'list, show, new, create, edit, update, delete',
		'Thotimviec' => 'list, show, new, create, edit, update, delete',
		'Viectimtho' => 'list, show, new, create, edit, update, delete',
		'Tintuyendung' => 'list, show, new, create, edit, update, delete',
		'Tintimviec' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'Nhomtho' => 'tuyendung, list, show, create, update, delete, search ',
		'Tinhthanhpho' => 'create, update, delete',
		'Quanhuyen' => 'create, update, delete',
		'Phuongxa' => 'create, update, delete',
		'Duongpho' => 'create, update, delete',
		'Kategorienganh' => 'create, update, delete',
		'Unterkategorienganh' => 'create, update, delete',
		'Danhgia' => 'create, update, delete',
		'Mautin' => 'create, update, delete',
		'Thotimviec' => 'create, update, delete',
		'Viectimtho' => 'create, update, delete',
		'Tintuyendung' => 'create, update, delete',
		'Tintimviec' => 'create, update, delete',
		
	)
);

// viêc tim tho tin moi plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Thotimviecsearch',
    array(
        'Thotimviec' => 'search, list, show',

    ),
    // non-cacheable actions
    array(
        'Thotimviec' => 'search, list, show',

    )
);

// viêc tim tho tin moi plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'VOV.' . $_EXTKEY,
    'Thotimvieclistsearch',
    array(
        'Thotimviec' => 'listsearch, search, list, show',

    ),
    // non-cacheable actions
    array(
        'Thotimviec' => 'listsearch, search, list, show',

    )
);