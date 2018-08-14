<?php

namespace VOV\Thosuachua\Controller;

/* * *************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016
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

/**
 * NhomthoController
 */
class NhomthoController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

    /**
     * tintimviecRepository
     * 
     * @var \VOV\Thosuachua\Domain\Repository\TintimviecRepository
     * @inject
     */
    protected $tintimviecRepository = NULL;

    /**
     * viectimthoRepository
     * 
     * @var \VOV\Thosuachua\Domain\Repository\ViectimthoRepository
     * @inject
     */
    protected $viectimthoRepository = NULL;

    /**
     * tintuyendungRepository
     * 
     * @var \VOV\Thosuachua\Domain\Repository\TintuyendungRepository
     * @inject
     */
    protected $tintuyendungRepository = NULL;

    /**
     * thotimviecRepository
     * 
     * @var \VOV\Thosuachua\Domain\Repository\ThotimviecRepository
     * @inject
     */
    protected $thotimviecRepository = NULL;

    /**
     * unterkategorienganhRepository
     * 
     * @var \VOV\Thosuachua\Domain\Repository\UnterkategorienganhRepository
     * @inject
     */
    protected $unterkategorienganhRepository = NULL;

    /**
     * kategorienganhRepository
     * 
     * @var \VOV\Thosuachua\Domain\Repository\KategorienganhRepository
     * @inject
     */
    protected $kategorienganhRepository = NULL;

    /**
     * nhomthoRepository
     * 
     * @var \VOV\Thosuachua\Domain\Repository\NhomthoRepository
     * @inject
     */
    protected $nhomthoRepository = NULL;

    /**
     * tinhthanhphoRepository
     * 
     * @var \VOV\Thosuachua\Domain\Repository\TinhthanhphoRepository
     * @inject
     */
    protected $tinhthanhphoRepository = NULL;

    /**
     * quanhuyenRepository
     * 
     * @var \VOV\Thosuachua\Domain\Repository\QuanhuyenRepository
     * @inject
     */
    protected $quanhuyenRepository = NULL;

    /**
     * action admin
     * 
     * @return void
     */
    public function quanhuyenAction() {

        $tinhthanh = $this->tinhthanhphoRepository->findByUid($_GET['tinhthanh']);
        $this->view->assign('quanhuyens', $tinhthanh->getQuanhuyen());

//    \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($tinhthanh);
//    die();
//        \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump('Buc Minh');
//        die();
    }

    /**
     * action admin
     * 
     * @return void
     */
    public function quanhuyen2Action() {

        $tinhthanh = $this->tinhthanhphoRepository->findByUid($_GET['tinhthanh']);
        $this->view->assign('quanhuyens', $tinhthanh->getQuanhuyen());
    }

    /**
     * action admin
     * 
     * @return void
     */
    public function quanhuyen4Action() {
        $extbaseObjectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $this->tinhthanhphoRepository = $extbaseObjectManager->get('VOV\Thosuachua\Domain\Repository\TinhthanhphoRepository');
        $tinhthanh = $this->tinhthanhphoRepository->findByUid($_GET['tinhthanh']);
        $this->view->assign('quanhuyens', $tinhthanh->getQuanhuyen());
    }

    /**
     * action admin
     * 
     * @return void
     */
    public function quanhuyenmautinAction() {
        $tinhthanh = $this->tinhthanhphoRepository->findByUid($_GET['tinhthanh']);
        $this->view->assign('quanhuyens', $tinhthanh->getQuanhuyen());
    }

    /**
     * action admin
     * 
     * @return void
     */
    public function chonchuyennganhAction() {
        //\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($_GET);
        //   \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($this->kategorienganhRepository->findAll());
        $kategorienganhs = $this->kategorienganhRepository->findByUid($_GET['chuyennganh']);
        //   \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($kategorienganhs);
        $this->view->assign('unterkategorienganhs', $kategorienganhs->getUnterkategorie());
        if (isset($_GET['viectimtho'])) {
            $this->view->assign('viectimtho', 'ja');
        }

//    \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($tinhthanh);
//    die();
//        \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump('Buc Minh');
//        die();
    }

    /**
     * action admin
     * 
     * @return void
     */
    public function chonchuyennganh1Action() {
        $kategorienganhs = $this->kategorienganhRepository->findByUid($_GET['chuyennganh']);
        $this->view->assign('unterkategorienganhs', $kategorienganhs->getUnterkategorie());
    }

    /**
     * action admin
     * 
     * @return void
     */
    public function chonchuyennganh4Action() {
        $kategorienganhs = $this->kategorienganhRepository->findByUid($_GET['chuyennganh']);
        $this->view->assign('unterkategorienganhs', $kategorienganhs->getUnterkategorie());
    }

    /**
     * action admin
     * 
     * @return void
     */
    public function chonchuyennganhtuyendungAction() {
        $kategorienganhs = $this->kategorienganhRepository->findByUid($_GET['chuyennganh']);
        $this->view->assign('unterkategorienganhs', $kategorienganhs->getUnterkategorie());
    }

    /**
     * action admin
     * 
     * @return void
     */
    public function quanhuyentuyendungAction() {
        $tinhthanh = $this->tinhthanhphoRepository->findByUid($_GET['tinhthanh']);
        $this->view->assign('quanhuyens', $tinhthanh->getQuanhuyen());
    }
    // tin tim viec
    /**
     * action admin
     * 
     * @return void
     */
    public function chonchuyennganhtintimviecAction() {
        $kategorienganhs = $this->kategorienganhRepository->findByUid($_GET['chuyennganh']);
        $this->view->assign('unterkategorienganhs', $kategorienganhs->getUnterkategorie());
    }

    /**
     * action admin
     * 
     * @return void
     */
    public function chonquanhuyentintimviecAction() {
        $tinhthanh = $this->tinhthanhphoRepository->findByUid($_GET['tinhthanh']);
        $tuanhuyens = $tinhthanh->getQuanhuyen()->toArray();
        $quanhuyenthem	=	$this->objectManager->get('VOV\Thosuachua\Domain\Model\Quanhuyen');
        $quanhuyenthem->setTen('Tất Cả Quận Huyện');
       // $quanhuyenthem->setUid(99999);
       // $them = array(0=> $quanhuyenthem);
        array_unshift ($tuanhuyens, $quanhuyenthem);
        $this->view->assign('quanhuyens', $tuanhuyens);
    }
    // ende tin tim viec
    
    /**
     * action admin
     * 
     * @return void
     */
    public function chonchuyennganh2Action() {
        $kategorienganhs = $this->kategorienganhRepository->findByUid($_GET['chuyennganh']);
        $this->view->assign('unterkategorienganhs', $kategorienganhs->getUnterkategorie());
    }

    /**
     * action admin
     * 
     * @return void
     */
    public function kichhoatAction() {
        
    }

    /**
     * action admin
     *
     * @return void
     */
    public function linktoformularAction() {

    }
    /**
     * action admin
     * 
     * @return void
     */
    public function adminAction() {
        $this->view->assign('quantri', $_GET['quantri']);
        $loginuser = $GLOBALS['TSFE']->fe_user->user['uid'];
        if (isset($loginuser)) {
            $frontendUsers = $this->nhomthoRepository->findByUid($loginuser);
            $this->view->assign('nhomtho', $frontendUsers);
            $somautin = count($frontendUsers->getMautin());
            $this->view->assign('somautin', $somautin);
            $status = $frontendUsers->getStatus();
            $feright = $frontendUsers->getFeright();
//            if($feright == 3){
//               $this->view->assign('feright', '99'); 
//            }else{
            session_start();
            if(isset($_SESSION[khoitaomautin]) and $_SESSION[khoitaomautin] != ''){
                $this->view->assign('dakichhoatmautin', '1');
                $_SESSION[khoitaomautin] = '';
            }
            if ($status == 1 or $feright == 3) {
                $this->view->assign('feright1', 1);
            }
            if ($status == 2 or $feright == 3) {
                $this->view->assign('feright2', 2);
            }
            if ($status == 3 or $feright == 3) {
                $this->view->assign('feright3', 3);
            }
            if ($status == 4 or $feright == 3) {
                $this->view->assign('feright4', 4);
            }
            if ($feright == 3) {
                $extbaseObjectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
                $this->thotimviecRepository = $extbaseObjectManager->get('VOV\Thosuachua\Domain\Repository\ThotimviecRepository');
                $this->viectimthoRepository = $extbaseObjectManager->get('VOV\Thosuachua\Domain\Repository\ViectimthoRepository');
                $this->tintimviecRepository = $extbaseObjectManager->get('VOV\Thosuachua\Domain\Repository\TintimviecRepository');
                $this->tintuyendungRepository = $extbaseObjectManager->get('VOV\Thosuachua\Domain\Repository\TintuyendungRepository');
                $thotimviec = $this->thotimviecRepository->kichhoat();
                $this->view->assign('kichhoatthotimviec', $thotimviec);
                  $viectimtho = $this->viectimthoRepository->kichhoat();
                $this->view->assign('kichhoatviectimtho', $viectimtho);
                $tintimviec = $this->tintimviecRepository->kichhoat();
                $this->view->assign('kichhoattintimviec', $tintimviec);
                $tintuyendung = $this->tintuyendungRepository->kichhoat();
                $this->view->assign('kichhoattintuyendung', $tintuyendung);
            }

            //      }
        } else {
            $this->redirectToURI('/dang-nhap/');
        }
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction() {
        $nhomthos = $this->nhomthoRepository->findAll();
        $this->view->assign('nhomthos', $nhomthos);
    }

    /**
     * action list
     * 
     * @return void
     */
    public function hienthiAction() {
        $getparas = $this->request->getArguments();
        if (isset($getparas['searchparam'])) {
            $_GET['searchparam'] = $getparas['searchparam'];
        }
        $extbaseObjectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $this->thotimviecRepository = $extbaseObjectManager->get('VOV\Thosuachua\Domain\Repository\ThotimviecRepository');
        $this->viectimthoRepository = $extbaseObjectManager->get('VOV\Thosuachua\Domain\Repository\ViectimthoRepository');

        if (isset($_GET['searchparam']) & $_GET['searchparam']['tinhthanhpho'][0] != 'Tĩnh Thành Phố') {
//            $mitmautin = $this->nhomthoRepository->findMitMautinget($_GET['searchparam']);
//            $nomitmautin = $this->nhomthoRepository->findNoMautinget($_GET['searchparam']);
            $mitmautin = $this->thotimviecRepository->findBySearch10($_GET['searchparam']);
            //  $nomitmautin = $this->viectimthoRepository->findBySearch($_GET['searchparam']);
            $nomitmautin = $this->viectimthoRepository->findBySearch10($_GET['searchparam']);
            $this->view->assign('viectimthos', $nomitmautin);
            $this->view->assign('thotimviecs', $mitmautin);
        } else {
//            $mitmautin = $this->nhomthoRepository->findMitMautin();
//            $nomitmautin = $this->nhomthoRepository->findNoMautin();
//		$nhomthos = $this->nhomthoRepository->findAll();
            $mitmautin = $this->thotimviecRepository->findAll10();
            //  $nomitmautin = $this->viectimthoRepository->findAll();
            $nomitmautin = $this->viectimthoRepository->findAll10();
            $this->view->assign('thotimviecs', $mitmautin);
            $this->view->assign('viectimthos', $nomitmautin);
        }
    }

    /**
     * action list
     * 
     * @return void
     */
    public function tuyendungAction() {
        $getparas = $this->request->getArguments();
        if (isset($getparas['searchparam'])) {
            $_GET['searchparam'] = $getparas['searchparam'];
        }
        $extbaseObjectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $this->tintimviecRepository = $extbaseObjectManager->get('VOV\Thosuachua\Domain\Repository\TintimviecRepository');
        $this->tintuyendungRepository = $extbaseObjectManager->get('VOV\Thosuachua\Domain\Repository\TintuyendungRepository');

        if (isset($_GET['searchparam']) & $_GET['searchparam']['tinhthanhpho'][0] != 'Tĩnh Thành Phố') {
//            $mitmautin = $this->nhomthoRepository->findMitMautinget($_GET['searchparam']);
//            $nomitmautin = $this->nhomthoRepository->findNoMautinget($_GET['searchparam']);
            $mitmautin = $this->tintimviecRepository->findBySearch($_GET['searchparam']);
            $nomitmautin = $this->tintuyendungRepository->findBySearch($_GET['searchparam']);
            $this->view->assign('tintuyendungs', $nomitmautin);
            $this->view->assign('tintimviecs', $mitmautin);
        } else {
//            $mitmautin = $this->nhomthoRepository->findMitMautin();
//            $nomitmautin = $this->nhomthoRepository->findNoMautin();
//		$nhomthos = $this->nhomthoRepository->findAll();
            $mitmautin = $this->tintimviecRepository->findAll();
            $nomitmautin = $this->tintuyendungRepository->findAll();
            $this->view->assign('tintimviecs', $mitmautin);
            $this->view->assign('tintuyendungs', $nomitmautin);
        }
    }

    /**
     * action show
     * 
     * @param \VOV\Thosuachua\Domain\Model\Nhomtho $nhomtho
     * @return void
     */
    public function showAction(\VOV\Thosuachua\Domain\Model\Nhomtho $nhomtho) {
        $this->view->assign('nhomtho', $nhomtho);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction() {
        
    }

    /**
     * action create
     * 
     * @param \VOV\Thosuachua\Domain\Model\Nhomtho $newNhomtho
     * @return void
     */
    public function createAction(\VOV\Thosuachua\Domain\Model\Nhomtho $newNhomtho) {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->nhomthoRepository->add($newNhomtho);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \VOV\Thosuachua\Domain\Model\Nhomtho $nhomtho
     * @ignorevalidation $nhomtho
     * @return void
     */
    public function editAction(\VOV\Thosuachua\Domain\Model\Nhomtho $nhomtho) {
        $this->view->assign('nhomtho', $nhomtho);
        $quanhuyens = $this->quanhuyenRepository->findAll();
        $tinhthanhs = $this->tinhthanhphoRepository->findAll();
        $kategorienganhs = $this->kategorienganhRepository->findAll()->toArray();
        $unterkategorienganhs = $this->unterkategorienganhRepository->findAll();
        $this->view->assign('tinhthanhs', $tinhthanhs);
        $this->view->assign('unterkategorienganhs', $unterkategorienganhs);
        $this->view->assign('kategorienganhs', $kategorienganhs);
        $this->view->assign('quanhuyens', $quanhuyens);
    }

    /**
     * action edit
     * 
     * @param \VOV\Thosuachua\Domain\Model\Nhomtho $nhomtho
     * @ignorevalidation $nhomtho
     * @return void
     */
    public function editmautinAction(\VOV\Thosuachua\Domain\Model\Nhomtho $nhomtho) {
        $this->view->assign('nhomtho', $nhomtho);
        $quanhuyens = $this->quanhuyenRepository->findAll();
        $tinhthanhs = $this->tinhthanhphoRepository->findAll();
        $kategorienganhs = $this->kategorienganhRepository->findAll()->toArray();
        $unterkategorienganhs = $this->unterkategorienganhRepository->findAll();
        $this->view->assign('tinhthanhs', $tinhthanhs);
        $this->view->assign('unterkategorienganhs', $unterkategorienganhs);
        $this->view->assign('kategorienganhs', $kategorienganhs);
        $this->view->assign('quanhuyens', $quanhuyens);
    }

    /**
     * action update
     * 
     * @param \VOV\Thosuachua\Domain\Model\Nhomtho $nhomtho
     * @return void
     */
    public function updateAction(\VOV\Thosuachua\Domain\Model\Nhomtho $nhomtho) {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->nhomthoRepository->update($nhomtho);
        //$this->redirect('list');
        $this->redirectToURI('/admin/');
    }

    /**
     * action update
     * 
     * @param \VOV\Thosuachua\Domain\Model\Nhomtho $nhomtho
     * @return void
     */
    public function update1Action(\VOV\Thosuachua\Domain\Model\Nhomtho $nhomtho) {

        $argument = $this->request->getArguments();
        $mautins = $this->objectManager->get('VOV\Thosuachua\Domain\Model\Mautin');
        $mautins->setTitle($argument['titlemautin']);
        $mautins->setNoidung($argument['noidungmautin']);
        $mautins->setDiachi($argument['diachimautin']);
        $mautins->setDienthoai($argument['dienthoai']);
        $mautins->setEmaillienhe($argument['emaillienhemautin']);
//                        $mautins->setKategorienghanh($nhomtho->get)
//                                $mautins->setUnterkategorienghanh
//                                $mautins->setTinhthanhpho
//                                $mautins->setQuanhuyen( $quanhuyen)
//                        
        $nhomtho->addMautin($mautins);
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->nhomthoRepository->update($nhomtho);
        $persistenceManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance("TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager");
        $persistenceManager->persistAll();

        //$this->redirect('list');
        $this->redirectToURI('/admin/');
    }

    /**
     * action delete
     * 
     * @param \VOV\Thosuachua\Domain\Model\Nhomtho $nhomtho
     * @return void
     */
    public function deleteAction(\VOV\Thosuachua\Domain\Model\Nhomtho $nhomtho) {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->nhomthoRepository->remove($nhomtho);
        $this->redirect('list');
    }

    /**
     * action search
     * 
     * @return void
     */
    public function searchAction() {

        $quanhuyens = $this->quanhuyenRepository->findAll();
        $tinhthanhs = $this->tinhthanhphoRepository->findAll();
        $kategorienganhs = $this->kategorienganhRepository->findAll()->toArray();
        $unterkategorienganhs = $this->unterkategorienganhRepository->findAll();
        $this->view->assign('tinhthanhs', $tinhthanhs);
        $this->view->assign('unterkategorienganhs', $unterkategorienganhs);
        $this->view->assign('kategorienganhs', $kategorienganhs);

        // tìm kiếm mỗi trang môt chức năng.
        /*
         * Trang chính tim kiếm tho, và thơ tìm việc, tại trang tho tìm viêc list und
         * show chỉ tìm ở cho riềng thư mục này.
         * Tương tự đối với tuyển dụng cũng vậy
         */

        $this->view->assign('quanhuyens', $quanhuyens);
        if ($GLOBALS['TSFE']->id == 1 or $GLOBALS['TSFE']->id == 40 or $GLOBALS['TSFE']->id == 39 or $GLOBALS['TSFE']->id == 47 or $GLOBALS['TSFE']->id == 46) {
            // startseite
            $this->view->assign('pageuid', 1);
            $this->view->assign('controllername', 'Nhomtho');
            $this->view->assign('actioname', 'hienthi');
        } elseif ($GET['tx_thosuachua_hienthi[thotimviec]'] or $GLOBALS['TSFE']->id == 51 or $GLOBALS['TSFE']->id == 49) {
            $this->view->assign('controllername', 'Thotimviec');
            $this->view->assign('pageuid', 51);
            $this->view->assign('actioname', 'list');
        } elseif ($GET['tx_thosuachua_hienthi[thotimviec]'] or $GLOBALS['TSFE']->id == 52 or $GLOBALS['TSFE']->id == 54) {
            $this->view->assign('controllername', 'Viectimtho');
            $this->view->assign('pageuid', 52);
            $this->view->assign('actioname', 'list');
        } elseif ($GET['tx_thosuachua_hienthi[tuyendung]'] or $GLOBALS['TSFE']->id == 48) {
            $this->view->assign('controllername', 'Nhomtho');
            $this->view->assign('pageuid', 48);
            $this->view->assign('actioname', 'tuyendung');
        } elseif ($GET['tx_thosuachua_hienthi[tintuyendung]'] or $GLOBALS['TSFE']->id == 53 or $GLOBALS['TSFE']->id == 55) {
            $this->view->assign('controllername', 'Tintuyendung');
            $this->view->assign('pageuid', 53);
            $this->view->assign('actioname', 'list');
        } elseif ($GET['tx_thosuachua_hienthi[tintimviec]'] or $GLOBALS['TSFE']->id == 56 or $GLOBALS['TSFE']->id == 57) {
            $this->view->assign('controllername', 'Tintimviec');
            $this->view->assign('pageuid', 56);
            $this->view->assign('actioname', 'list');
        }
        // Todo  & $_GET['searchparam']['tinhthanhpho'][0] != 'Tĩnh Thành Phố'
        //  \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($_GET['searchparam']);
        //  if(!isset($_GET['searchparam']) ){
        if ($_GET['searchparam']['tinhthanhpho'][0] == 'Tĩnh Thành Phố') {
            $_GET['searchparam']['tinhthanhpho'][] = 'Tĩnh Thành Phố';
            $_GET['searchparam']['quanhuyen'][] = 'Quận Huyện';
            $_GET['searchparam']['kategorienghanh'][] = 'Nhóm Ngành';
           // $_GET['searchparam']['unterkategorienghanh'][] = 'Ngành/Chuyên Ngành';
             $_GET['searchparam']['unterkategorienghanh'][] = 'Nghề/Chuyên Ngành';
            $this->view->assign('params', $_GET['searchparam']);
        } else {
            if ($_GET['searchparam']['tinhthanhpho'] != 'ten' & $_GET['searchparam']['tinhthanhpho'] != '') {
                $paramse['searchparam'] ['tinhthanhpho'][] = $this->tinhthanhphoRepository->findByUid($_GET['searchparam']['tinhthanhpho'])->getTen();
                $paramse['searchparam'] ['tinhthanhpho'][] = $_GET['searchparam']['tinhthanhpho'];
                $this->view->assign('quanhuyens', $this->tinhthanhphoRepository->findByUid($_GET['searchparam']['tinhthanhpho'])->getQuanhuyen());
            } else {
                $paramse['searchparam'] ['tinhthanhpho'][] = 'Tĩnh/Thành Phố';
                $paramse['searchparam'] ['tinhthanhpho'][] = '';
            }
            if ($_GET['searchparam']['quanhuyen'] != 'ten' & $_GET['searchparam']['quanhuyen'] != '') {
                $paramse['searchparam'] ['quanhuyen'][] = $this->quanhuyenRepository->findByUid($_GET['searchparam']['quanhuyen'])->getTen();
                $paramse['searchparam'] ['quanhuyen'][] = $_GET['searchparam']['quanhuyen'];
            } else {
                $paramse['searchparam'] ['quanhuyen'][] = 'Quận/Huyện';
                $paramse['searchparam'] ['quanhuyen'][] = '';
            }
            if ($_GET['searchparam']['kategorienghanh'] != 'ten' & $_GET['searchparam']['kategorienghanh'] != '') {
                $paramse['searchparam'] ['kategorienghanh'][] = $this->kategorienganhRepository->findByUid($_GET['searchparam']['kategorienghanh'])->getTen();
                $paramse['searchparam'] ['kategorienghanh'][] = $_GET['searchparam']['kategorienghanh'];
                $this->view->assign('unterkategorienganhs', $this->kategorienganhRepository->findByUid($_GET['searchparam']['kategorienghanh'])->getUnterkategorie());
            } else {
                $paramse['searchparam'] ['kategorienghanh'][] = 'Nhóm Ngành';
                $paramse['searchparam'] ['kategorienghanh'][] = '';
            }
            if ($_GET['searchparam']['unterkategorienghanh'] != 'ten' & $_GET['searchparam']['unterkategorienghanh'] != '') {
                $paramse['searchparam'] ['unterkategorienghanh'][] = $this->unterkategorienganhRepository->findByUid($_GET['searchparam']['unterkategorienghanh'])->getTen();
                $paramse['searchparam'] ['unterkategorienghanh'][] = $_GET['searchparam']['unterkategorienghanh'];
            } else {
                $paramse['searchparam'] ['unterkategorienghanh'][] = 'Nghề/Chuyên Ngành';
                $paramse['searchparam'] ['unterkategorienghanhh'][] = '';
            }

            $this->view->assign('params', $paramse['searchparam']);


            // news 

            if ($GLOBALS['TSFE']->id == 50) {
                $this->view->assign('pageuid', 50);
            }
            if ($GLOBALS['TSFE']->id == 59) {
                $this->view->assign('pageuid', 59);
            }
            if ($GLOBALS['TSFE']->id == 64) {
                $this->view->assign('pageuid', 64);
            }
            if ($GLOBALS['TSFE']->id == 68 or $GLOBALS['TSFE']->id == 66 or $GLOBALS['TSFE']->id == 67 or $GLOBALS['TSFE']->id == 69) {
                $this->view->assign('pageuid', 9696);
            }
            //ende
        }
    }

    /**
     * action search
     *
     * @return void
     */
    public function linktoexterneAction() {

    }

    /**
     * action search
     * 
     * @return void
     */
    public function searchlistAction() {
        
    }

}
