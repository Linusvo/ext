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
 * TintuyendungController
 */
class TintuyendungController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

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
     * action list
     * 
     * @return void
     */
    public function listAction() {
        /** @var $extbaseObjectManager \TYPO3\CMS\Extbase\Object\ObjectManager */
        $extbaseObjectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $this->tintuyendungRepository = $extbaseObjectManager->get('VOV\Thosuachua\Domain\Repository\TintuyendungRepository');

        if ($_GET['searchparam']['tinhthanhpho'][0] == 'Tĩnh Thành Phố' or ! isset($_GET['searchparam'])) {
            $tintuyendungs = $this->tintuyendungRepository->findAll();
        } else {
            $tintuyendungs = $this->tintuyendungRepository->findBySearch($_GET['searchparam']);
        }
        $this->view->assign('tintuyendungs', $tintuyendungs);
    }

    /**
     * action show
     * 
     * @param \VOV\Thosuachua\Domain\Model\Tintuyendung $tintuyendung
     * @return void
     */
    public function showAction(\VOV\Thosuachua\Domain\Model\Tintuyendung $tintuyendung) {
        $this->view->assign('tintuyendung', $tintuyendung);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction() {

        /** @var $extbaseObjectManager \TYPO3\CMS\Extbase\Object\ObjectManager */
        $extbaseObjectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $useraaRepository = $extbaseObjectManager->get('VOV\Thosuachua\Domain\Repository\NhomthoRepository');
        $argument = $this->request->getArguments();
        $this->view->assign('nhomtho', $useraaRepository->findByUid($argument['nhomtho']));
        $quanhuyens = $this->quanhuyenRepository->findAll();
        $tinhthanhs = $this->tinhthanhphoRepository->findAll();
        $kategorienganhs = $this->kategorienganhRepository->findAll()->toArray();
        $unterkategorienganhs = $this->unterkategorienganhRepository->findAll();
        $this->view->assign('tinhthanhs', $tinhthanhs);
        $this->view->assign('unterkategorienganhs', $unterkategorienganhs);
        $this->view->assign('kategorienganhs', $kategorienganhs);
        $this->view->assign('quanhuyens', $quanhuyens);
        $this->view->assign('newfunktion', 1);
    }

    /**
     * action create
     * 
     * @param \VOV\Thosuachua\Domain\Model\Tintuyendung $newTintuyendung
     * @return void
     */
    public function createAction(\VOV\Thosuachua\Domain\Model\Tintuyendung $newTintuyendung) {
//		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
//		$this->tintuyendungRepository->add($newTintuyendung);
//		$this->redirect('list');
        $extbaseObjectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $useraaRepository = $extbaseObjectManager->get('VOV\Thosuachua\Domain\Repository\NhomthoRepository');
        $nhomtho = $newTintuyendung->getAdminstrator();
        $newTintuyendung->setHidden1(0);
        //$newTintuyendung->setHidden1((int) 1);
        $nhomtho->addTintuyendung($newTintuyendung);
        $useraaRepository->update($nhomtho);
        session_start();
        $_SESSION['khoitaomautin'] = 'Mẩu tin của quí vị đã được khởi tạo thành công và được hiện thị tại mục Tuyển Dụng, tránh trường hợp tin đăng bị lỗi, quí vị nên kiểm tra lại mẩu tin một lần nữa.';
        $this->redirectToURI('/admin/');
    }

    /**
     * action edit
     * 
     * @param \VOV\Thosuachua\Domain\Model\Tintuyendung $tintuyendung
     * @ignorevalidation $tintuyendung
     * @return void
     */
    public function editAction(\VOV\Thosuachua\Domain\Model\Tintuyendung $tintuyendung) {
        $this->view->assign('tintuyendung', $tintuyendung);
        $quanhuyens = $this->quanhuyenRepository->findAll();
        $tinhthanhs = $this->tinhthanhphoRepository->findAll();
        $kategorienganhs = $this->kategorienganhRepository->findAll()->toArray();
        $unterkategorienganhs = $this->unterkategorienganhRepository->findAll();
        $this->view->assign('tinhthanhs', $tinhthanhs);
        $this->view->assign('unterkategorienganhs', $unterkategorienganhs);
        $this->view->assign('kategorienganhs', $kategorienganhs);
        $this->view->assign('quanhuyens', $quanhuyens);
        $loginuser = $GLOBALS['TSFE']->fe_user->user;
        if ($loginuser[feright] == 3) {
            $this->view->assign('feright', 3);
        }
    }

    /**
     * action update
     * 
     * @param \VOV\Thosuachua\Domain\Model\Tintuyendung $tintuyendung
     * @return void
     */
    public function updateAction(\VOV\Thosuachua\Domain\Model\Tintuyendung $tintuyendung) {

        $quanhuyens = $this->quanhuyenRepository->findByUid($_POST[tx_thosuachua_admin][newTintuyendung][quanhuyen][0]);
        $tinhthanhs = $this->tinhthanhphoRepository->findByUid($_POST[tx_thosuachua_admin][newTintuyendung][tinhthanhpho][0]);
        $kategorienganhs = $this->kategorienganhRepository->findByUid($_POST[tx_thosuachua_admin][newTintuyendung][kategorienghanh][0]);
        $unterkategorienganhs = $this->unterkategorienganhRepository->findByUid($_POST[tx_thosuachua_admin][newTintuyendung][unterkategorienganh][0]);

        if (isset($_POST[tx_thosuachua_admin][newTintuyendung][quanhuyen][0]) and $_POST[tx_thosuachua_admin][newTintuyendung][quanhuyen][0] != 0) {
            $quanhuyenscu = $tintuyendung->getQuanhuyen()->toArray();
          //  $tintuyendung->removeQuanhuyen($quanhuyenscu[0]);
             if ($quanhuyenscu[0] != 0) {
                $tintuyendung->removeQuanhuyen($quanhuyenscu[0]);
            }
            $tintuyendung->addQuanhuyen($quanhuyens);
        }
        if (isset($_POST[tx_thosuachua_admin][newTintuyendung][tinhthanhpho][0]) and $_POST[tx_thosuachua_admin][newTintuyendung][tinhthanhpho][0] != 0) {
            $thanhphocu = $tintuyendung->getTinhthanhpho()->toArray();
            $tintuyendung->removeTinhthanhpho($thanhphocu[0]);
            $tintuyendung->addTinhthanhpho($quanhuyens);
        }

        if (isset($_POST[tx_thosuachua_admin][newTintuyendung][kategorienghanh][0]) and $_POST[tx_thosuachua_admin][newTintuyendung][kategorienghanh][0] != 0) {
            $nganh = $tintuyendung->getKategorienganh()->toArray();
            $tintuyendung->removeKategorienganh($nganh[0]);
            $tintuyendung->addKategorienganh($kategorienganhs);
        }

        if (isset($_POST[tx_thosuachua_admin][newTintuyendung][unterkategorienganh][0]) and $_POST[tx_thosuachua_admin][newTintuyendung][unterkategorienganh][0] != 0) {
            $nghe = $tintuyendung->getUnterkategorienganh()->toArray();
          //  $tintuyendung->removeUnterkategorienganh($nghe[0]);
              if ($nghe[0] != 0) {
                $tintuyendung->removeUnterkategorienganh($nghe[0]);
            }
            $tintuyendung->addUnterkategorienganh($unterkategorienganhs);
        }

        //$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->tintuyendungRepository->update($tintuyendung);
        $this->redirectToURI('/admin/');
        //  $this->redirect('list');
    }

    /**
     * action update
     * 
     * \VOV\Thosuachua\Domain\Model\Tintuyendung $tintuyendung
     * @return void
     */
    public function xoatinAction(\VOV\Thosuachua\Domain\Model\Tintuyendung $tintuyendung) {
        $this->view->assign('tintuyendung', $tintuyendung);
    }

    /**
     * action delete
     * 
     * @param \VOV\Thosuachua\Domain\Model\Tintuyendung $tintuyendung
     * @return void
     */
    public function deleteAction(\VOV\Thosuachua\Domain\Model\Tintuyendung $tintuyendung) {
        //$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->tintuyendungRepository->remove($tintuyendung);
        $this->redirectToURI('/admin/');
        // $this->redirect('list');
    }

}
