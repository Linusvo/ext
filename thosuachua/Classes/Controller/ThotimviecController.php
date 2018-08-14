<?php

namespace VOV\Thosuachua\Controller;
use  \TYPO3\CMS\Extbase\Utility\DebuggerUtility;
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
 * ThotimviecController
 */
class ThotimviecController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

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
     * action list
     * 
     * @return void
     */
    public function listAction() {

        if ($_GET['searchparam']['tinhthanhpho'][0] == 'Tĩnh Thành Phố' or ! isset($_GET['searchparam'])) {
            $thotimviecs = $this->thotimviecRepository->findAll();
        } else {
            $thotimviecs = $this->thotimviecRepository->findBySearch($_GET['searchparam']);
        }
        $this->view->assign('thotimviecs', $thotimviecs);

        $_SESSION['listhomeurl'] = $this->uriBuilder->getRequest()->getRequestUri();
    }

    /**
     * action show
     * 
     * @param \VOV\Thosuachua\Domain\Model\Thotimviec $thotimviec
     * @return void
     */
    public function showAction(\VOV\Thosuachua\Domain\Model\Thotimviec $thotimviec) {
        $this->view->assign('thotimviec', $thotimviec);
        $this->view->assign('listhomeurl', $_SESSION['urlsthotimviec']);
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
        $this->quanhuyenRepository = $extbaseObjectManager->get('VOV\Thosuachua\Domain\Repository\QuanhuyenRepository');
        $argument = $this->request->getArguments();
        $nhomthoss = $useraaRepository->findByUid($argument['nhomtho']);
        $this->view->assign('nhomtho', $nhomthoss);
        $quanhuyens = $this->quanhuyenRepository->findAll();
        $tinhthanhs = $this->tinhthanhphoRepository->findAll();
        $kategorienganhs = $this->kategorienganhRepository->findAll()->toArray();
        $unterkategorienganhs = $this->unterkategorienganhRepository->findAll();
        $this->view->assign('tinhthanhs', $tinhthanhs);
        $this->view->assign('unterkategorienganhs', $unterkategorienganhs);
        $this->view->assign('kategorienganhs', $kategorienganhs);
        $this->view->assign('quanhuyens', $quanhuyens);
        $this->view->assign('newfunktion', 1);
        $nhomnghanh = array();
        foreach ($unterkategorienganhs as $unterkategorienganh1){
            $nhomnghanh[$unterkategorienganh1->getKategorie()->getTen()][$unterkategorienganh1->getUid()]= $unterkategorienganh1->getTen();
        }
        $t=0;
        if($nhomthoss->getUsername() == 'superadmin'){
            $select = "<select class=\"form-control\" multiple style=\"width: 100%\" name=\"tx_thosuachua_admin[unterkategorienganh][]\">";
        }else{
            $select = "<select class=\"form-control\" style=\"width: 100%\" name=\"tx_thosuachua_admin[newThotimviec][unterkategorienganh]\">";
        }

        foreach ($nhomnghanh as $key1 => $nhomnghanh1){
            $t=$t+1;
            if($t==1){
                $select .= '<option value="99990'.$t.'" style="font-weight:bold !important; font-size:17px; padding:16px 0!important; color: #000">Lựa Chọn Nghành Nghề</option>';
            }
            $select .= '<option value="99991'.$t.'" style="font-weight:bold; font-size:17px; padding:16px 0!important; color: #009900">'.'----------'.$key1."----------</option>";
            foreach ($nhomnghanh1 as $key => $nhomnghanh2){
                $select .= '<option style="color: #D41045!important" value="'.$key.'">'.$nhomnghanh2."</option>";
            }
        }
        $select .= "</select>";

        $this->view->assign('unterkategorienganh1s',$select);


        /** @var $extbaseObjectManager \TYPO3\CMS\Extbase\Object\ObjectManager */
        /*
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
        */
    }
    /**
     * initialize create action
     *
     * @return void
     */
    public function initializeCreateAction() {
        $this->arguments->getArgument('newThotimviec')->getPropertyMappingConfiguration()->allowAllProperties();
        $this->arguments->getArgument('newThotimviec')->getPropertyMappingConfiguration()->allowProperties('unterkategorienganh', 'ten', '*');


    }
    /**
     * action create
     * 
     * @param \VOV\Thosuachua\Domain\Model\Thotimviec $newThotimviec
     * @return void
     */
    public function createAction(\VOV\Thosuachua\Domain\Model\Thotimviec $newThotimviec) {
        //  $this->addFlashMessage('Tin nhắn đã được lưu thành công');
//	$this->thotimviecRepository->add($newThotimviec);
        /** @var $extbaseObjectManager \TYPO3\CMS\Extbase\Object\ObjectManager */
        /*
        $extbaseObjectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $useraaRepository = $extbaseObjectManager->get('VOV\Thosuachua\Domain\Repository\NhomthoRepository');
        $nhomtho = $newThotimviec->getAdminstrator();
      //  $newThotimviec->setHidden1(1);
        $newThotimviec->setHidden1(0);
        $nhomtho->addThotimviec($newThotimviec);
        $useraaRepository->update($nhomtho);
        session_start();
        $_SESSION['khoitaomautin'] = 'Mẩu tin của quí vị đã được khởi tạo thành công và được hiện thị tại mục Trang Chủ, tránh trường hợp tin đăng bị lỗi, quí vị nên kiểm tra lại mẩu tin một lần nữa.';
        $this->redirectToURI('/admin/');
        */
        $extbaseObjectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $useraaRepository = $extbaseObjectManager->get('VOV\Thosuachua\Domain\Repository\NhomthoRepository');
        $nhomtho = $useraaRepository->findByUid($_POST[tx_thosuachua_admin][adminstrator]);

//if($newThotimviec->getAdminstrator()->getUid() == 27){
if($_POST[tx_thosuachua_admin][adminstrator] == 27){
    $tinhThanhPhoArray = $_POST[tx_thosuachua_admin][newThotimviec][tinhthanhpho];
    $tinhThanhPhoString = '';
    $tinhTp1 = '';
    foreach ($tinhThanhPhoArray as $tinhThanhPhoArray1){
        $tinhThanhPhoString .= $tinhThanhPhoArray1.',';
        $tinhTp1 = $tinhThanhPhoArray1;
    }

    $params = $_POST[tx_thosuachua_admin][newThotimviec];
    // $nghe = $this->unterkategorienganhRepository->findByUid($params[unterkategorienganh]);
    $nghes = $_POST[tx_thosuachua_admin][unterkategorienganh];
    $nghe = $this->unterkategorienganhRepository->findByUid($nghes[0]);

    $nghes2 = '';
    foreach($nghes as $nghes1){
        if($nghes1 != ''){
            $nghes2 .= $nghes1.',';
        }
    }
    $newThotimviec->setUnterkategorie2($nghes2);
    $nganh = $nghe->getKategorie();

    //$nhomtho =  $newThotimviec->getAdminstrator();
    $newThotimviec->setTinhthanhpho1($tinhTp1);
    $newThotimviec->setTinhthanhpho2($tinhThanhPhoString);
    $newThotimviec->setKategorie($nganh->getUid());
    $newThotimviec->setUnterkategorie($nghe->getUid());
    $newThotimviec->setAdmin($nhomtho->getUid());
    $newThotimviec->setHidden1(0);
    $nhomtho->addThotimviec($newThotimviec);
    $useraaRepository->update($nhomtho);
    $persistenceManager = $this->objectManager->get("TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager");
    $persistenceManager->persistAll();
    foreach ($tinhThanhPhoArray as $tinhThanhPhoArray1){
        $tinhrepo = $this->tinhthanhphoRepository->findByUid($tinhThanhPhoArray1);
        if(count($tinhrepo) > 0){
            $quanhuyenrp = $tinhrepo->getQuanhuyen();
            $quanhuyenstring = '';
            foreach($quanhuyenrp as $quanhuyenrp1){
                $quanhuyenstring .= $quanhuyenrp1->getUid().',';
            }
            $newThotimviec->setQuanhuyen2($quanhuyenstring);
            $this->thotimviecRepository->update($newThotimviec);
            $persistenceManager = $this->objectManager->get("TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager");
            $persistenceManager->persistAll();
        }
    }

    session_start();
    $_SESSION['khoitaomautin'] = 'Mẩu tin của quí vị đã được khởi tạo thành công và được hiện thị tại mục Tuyển Dụng, tránh trường hợp tin đăng bị lỗi, quí vị nên kiểm tra lại mẩu tin một lần nữa.';
    if($nhomtho->getUid()!=72){
        $this->redirectToURI('/admin/');
    }else{
        $this->redirectToURI('');
    }

}else{

    $tinhTp1 = $_POST[tx_thosuachua_admin][newThotimviec][tinhthanhpho].',';
    $paramsquanhuyen = $_POST[tx_thosuachua_admin][newTintimviec][quanhuyen];
    $params = $_POST[tx_thosuachua_admin][newThotimviec];
    $nghe = $this->unterkategorienganhRepository->findByUid($params[unterkategorienganh]);
    $nganh = $nghe->getKategorie();

   // $nhomtho =  $newThotimviec->getAdminstrator();
    $newThotimviec->setTinhthanhpho1($tinhTp1);
    $newThotimviec->setTinhthanhpho2($tinhTp1);
    $newThotimviec->setKategorie($nganh->getUid());
    $newThotimviec->setUnterkategorie($nghe->getUid());
    $nghes2 = $nghe->getUid().',';
    $newThotimviec->setUnterkategorie2($nghes2);
    $newThotimviec->setAdmin($nhomtho->getUid());
    $newThotimviec->setHidden1(0);
    $nhomtho->addThotimviec($newThotimviec);
    $useraaRepository->update($nhomtho);
    $persistenceManager = $this->objectManager->get("TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager");
    $persistenceManager->persistAll();
    if($paramsquanhuyen == ''){
        $tinhrepo = $this->tinhthanhphoRepository->findByUid($tinhTp1);
        if(count($tinhrepo) > 0){
            $quanhuyenrp = $tinhrepo->getQuanhuyen();
            $quanhuyenstring = '';
            foreach($quanhuyenrp as $quanhuyenrp1){
                $quanhuyenstring .= $quanhuyenrp1->getUid().',';
            }
            $newThotimviec->setQuanhuyen1($quanhuyenrp1->getUid());
            $newThotimviec->setQuanhuyen2($quanhuyenstring);
            $this->thotimviecRepository->update($newThotimviec);
            $persistenceManager = $this->objectManager->get("TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager");
            $persistenceManager->persistAll();
        }
    }else{
        $quanhuyenstring = $paramsquanhuyen.',';
        $newThotimviec->setQuanhuyen1($paramsquanhuyen);
        $newThotimviec->setQuanhuyen2($quanhuyenstring);
        $this->thotimviecRepository->update($newThotimviec);
        $persistenceManager = $this->objectManager->get("TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager");
        $persistenceManager->persistAll();
    }


    session_start();
    $_SESSION['khoitaomautin'] = 'Mẩu tin của quí vị đã được khởi tạo thành công và được hiện thị tại mục Tuyển Dụng, tránh trường hợp tin đăng bị lỗi, quí vị nên kiểm tra lại mẩu tin một lần nữa.';
    if($nhomtho->getUid()!=72){
        $this->redirectToURI('/admin/');
    }else{
        $this->redirectToURI('');
    }
    }
    /*
    $params = $_POST[tx_thosuachua_admin][newThotimviec];
    $params[quanhuyen] = $_POST[tx_thosuachua_admin][newTintimviec][quanhuyen];

    //$newTintimviec->addUnterkategorienganh($this->unterkategorienganhRepository->findByUid($_POST[tx_thosuachua_admin][newTintimviec][unterkategorienganh]));
    $tinh = $this->tinhthanhphoRepository->findByUid($params[tinhthanhpho]);
    $huyen = $this->quanhuyenRepository->findByUid($params[quanhuyen]);
    $nghe = $this->unterkategorienganhRepository->findByUid($params[unterkategorienganh]);
    $nganh = $nghe->getKategorie();

    $extbaseObjectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
    $useraaRepository = $extbaseObjectManager->get('VOV\Thosuachua\Domain\Repository\NhomthoRepository');
    $nhomtho =  $newThotimviec->getAdminstrator();
    $newThotimviec->setTinhthanhpho1($tinh->getUid());
    $newThotimviec->setQuanhuyen1($huyen->getUid());
    $newThotimviec->setKategorie($nganh->getUid());
    $newThotimviec->setUnterkategorie($nghe->getUid());

    $newThotimviec->setAdmin($nhomtho->getUid());
    //  $newTintimviec->setHidden1((int)1);

    $newThotimviec->setHidden1(0);

//        $loginuser = $GLOBALS['TSFE']->fe_user->user;
//        $newTintimviec->setAdministrator((int)$loginuser[uid]);
    $nhomtho->addThotimviec($newThotimviec);
    $useraaRepository->update($nhomtho);
    session_start();
    $_SESSION['khoitaomautin'] = 'Mẩu tin của quí vị đã được khởi tạo thành công và được hiện thị tại mục Tuyển Dụng, tránh trường hợp tin đăng bị lỗi, quí vị nên kiểm tra lại mẩu tin một lần nữa.';
    // $this->redirectToURI('/admin/');
    if($nhomtho->getUid()!=72){
        $this->redirectToURI('/admin/');
    }else{
        $this->redirectToURI('');
    }
    */
}



    /**
     * action edit
     * 
     * @param \VOV\Thosuachua\Domain\Model\Thotimviec $thotimviec
     * @ignorevalidation $thotimviec
     * @return void
     */
    public function editAction(\VOV\Thosuachua\Domain\Model\Thotimviec $thotimviec) {
        $this->view->assign('thotimviec', $thotimviec);
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
        $nhomnghanh = array();
        foreach ($unterkategorienganhs as $unterkategorienganh1){
            $nhomnghanh[$unterkategorienganh1->getKategorie()->getTen()][$unterkategorienganh1->getUid()]= $unterkategorienganh1->getTen();
        }
        $t=0;
        $select = "<select class=\"form-control\" style=\"width: 100%\" name=\"tx_thosuachua_admin[newThotimviec][unterkategorienganh]\">";
        $select .= '<option value="">'.$this->unterkategorienganhRepository->findByUid($thotimviec->getUnterkategorie())->getTen()."</option>";
        foreach ($nhomnghanh as $key1 => $nhomnghanh1){
            $t=$t+1;
            $select .= '<option value="99991'.$t.'" style="font-weight:bold; font-size:17px; padding:16px 0!important; color: #009900">'.'----------'.$key1."----------</option>";
            foreach ($nhomnghanh1 as $key => $nhomnghanh2){
                $select .= '<option style="color: #D41045!important" value="'.$key.'">'.$nhomnghanh2."</option>";
            }
        }
        $select .= "</select>";
        $this->view->assign('unterkategorienganh1s',$select);
        $this->view->assign('tinhthanhselect',$this->tinhthanhphoRepository->findByUid($thotimviec->getTinhthanhpho1()));

    }

    /**
     * action update
     * 
     * @param \VOV\Thosuachua\Domain\Model\Thotimviec $thotimviec
     * @return void
     */
    public function updateAction(\VOV\Thosuachua\Domain\Model\Thotimviec $thotimviec) {
        if($_POST[tx_thosuachua_admin][newTintimviec][quanhuyen] != ''){
            $thotimviec->setQuanhuyen1($_POST[tx_thosuachua_admin][newTintimviec][quanhuyen]);
        }
        if($_POST[tx_thosuachua_admin][newThotimviec][unterkategorienganh] != ''){
            $thotimviec->setUnterkategorie($_POST[tx_thosuachua_admin][newThotimviec][unterkategorienganh]);
            $unterkategorienganhs = $this->unterkategorienganhRepository->findByUid($_POST[tx_thosuachua_admin][newThotimviec][unterkategorienganh]);
            $thotimviec->setKategorie($unterkategorienganhs->getKategorie()->getUid());
        }
        $this->thotimviecRepository->update($thotimviec);
        $this->redirectToURI('/admin/');

/*
        $quanhuyens = $this->quanhuyenRepository->findByUid($_POST[tx_thosuachua_admin][newThotimviec][quanhuyen][0]);
        $tinhthanhs = $this->tinhthanhphoRepository->findByUid($_POST[tx_thosuachua_admin][newThotimviec][tinhthanhpho][0]);
        $kategorienganhs = $this->kategorienganhRepository->findByUid($_POST[tx_thosuachua_admin][newThotimviec][kategorienghanh][0]);
        $unterkategorienganhs = $this->unterkategorienganhRepository->findByUid($_POST[tx_thosuachua_admin][newThotimviec][unterkategorienganh][0]);

        if (isset($_POST[tx_thosuachua_admin][newThotimviec][quanhuyen][0]) and $_POST[tx_thosuachua_admin][newThotimviec][quanhuyen][0] != 0) {
            $quanhuyenscu = $thotimviec->getQuanhuyen()->toArray();
          //  $thotimviec->removeQuanhuyen($quanhuyenscu[0]);
            if ($quanhuyenscu[0] != 0) {
               $thotimviec->removeQuanhuyen($quanhuyenscu[0]);
            }
            $thotimviec->addQuanhuyen($quanhuyens);
        }
        if (isset($_POST[tx_thosuachua_admin][newThotimviec][tinhthanhpho][0]) and $_POST[tx_thosuachua_admin][newThotimviec][tinhthanhpho][0] != 0) {
            $thanhphocu = $thotimviec->getTinhthanhpho()->toArray();
            $thotimviec->removeTinhthanhpho($thanhphocu[0]);
            $thotimviec->addTinhthanhpho($quanhuyens);
        }

        if (isset($_POST[tx_thosuachua_admin][newThotimviec][kategorienghanh][0]) and $_POST[tx_thosuachua_admin][newThotimviec][kategorienghanh][0] != 0) {
            $nganh = $thotimviec->getKategorienganh()->toArray();
            $thotimviec->removeKategorienganh($nganh[0]);
            $thotimviec->addKategorienganh($kategorienganhs);
        }

        if (isset($_POST[tx_thosuachua_admin][newThotimviec][unterkategorienganh][0]) and $_POST[tx_thosuachua_admin][newThotimviec][unterkategorienganh][0] != 0) {
            $nghe = $thotimviec->getUnterkategorienganh()->toArray();
            $thotimviec->removeUnterkategorienganh($nghe[0]);
             if ($nghe[0] != 0) {
                $thotimviec->removeUnterkategorienganh($nghe[0]);
            }
            $thotimviec->addUnterkategorienganh($unterkategorienganhs);
        }
        //$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        //  $this->addFlashMessage('Mẩu tin đã được lưu thành công');
        $this->thotimviecRepository->update($thotimviec);
        $this->redirectToURI('/admin/');
        // $this->redirect('list');
*/
    }

    /**
     * action update
     * 
     * @param \VOV\Thosuachua\Domain\Model\Thotimviec $thotimviec
     * @return void
     */
    public function xoatinAction(\VOV\Thosuachua\Domain\Model\Thotimviec $thotimviec) {
        $this->view->assign('thotimviec', $thotimviec);
        session_start();
        $this->view->assign('listhomeurl', $_SESSION['urlsviectimtho']);
    }

    /**
     * action delete
     * 
     * @param \VOV\Thosuachua\Domain\Model\Thotimviec $thotimviec
     * @return void
     */
    public function deleteAction(\VOV\Thosuachua\Domain\Model\Thotimviec $thotimviec) {
        // $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->thotimviecRepository->remove($thotimviec);
        $this->redirectToURI('/admin/');
        //  $this->redirect('list');
    }
    /**
     * action search
     *
     * @return void
     */
    public function searchAction() {

        $quanhuyens = $this->quanhuyenRepository->findAll();
        $tinhthanhs = $this->tinhthanhphoRepository->findAll();
        $unterkategorienganhs = $this->unterkategorienganhRepository->findAll();
        $this->view->assign('tinhthanhs', $tinhthanhs);
        $this->view->assign('quanhuyens', $quanhuyens);
        $nhomnghanh = array();
        foreach ($unterkategorienganhs as $unterkategorienganh1){
            $nhomnghanh[$unterkategorienganh1->getKategorie()->getTen()][$unterkategorienganh1->getUid()]= $unterkategorienganh1->getTen();
        }
        $t=0;
        $select = "<select class=\"form-control\" style=\"width: 100%\" name=\"tx_thosuachua_thotimviecsearch[searchparam][unterkategorienghanh]\">";

        foreach ($nhomnghanh as $key1 => $nhomnghanh1){
            $t=$t+1;
            if($t==1){
                $select .= '<option value="99990'.$t.'" style="font-weight:bold; font-size:17px; paddings:16px 0!important; color: #000">Lựa Chọn Nghành Nghề</option>';
            }
            $select .= '<option value="99991'.$t.'" style="font-weight:bold; font-size:17px; paddings:16px 0!important; color: #009900">'.'----------'.$key1."----------</option>";
            foreach ($nhomnghanh1 as $key => $nhomnghanh2){
                $select .= '<option style="color: #D41045!important" value="'.$key.'">'.$nhomnghanh2."</option>";
            }
        }
        $select .= "</select>";

        $this->view->assign('unterkategorienganh1s',$select);

    }

    /**
     * action list
     *
     * @return void
     */
    public function listsearchAction() {
        /*
       \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump( $this->thotimviecRepository->findAllTin());


$allnachricht = $this->thotimviecRepository->findAllTin();
foreach($allnachricht as $allnachricht1){

   $abc = $allnachricht1->getUnterkategorie();
   $abc = $abc.',';
       $allnachricht1->setUnterkategorie2($abc);
       $this->thotimviecRepository->update($allnachricht1);
              }
$persistenceManager = $this->objectManager->get("TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager");
$persistenceManager->persistAll();
*/

        /*
        $allnachricht = $this->thotimviecRepository->findAllTin();
        foreach($allnachricht as $allnachricht1){
            $nghe = $allnachricht1->getUnterkategorie();
            if(count($nghe) > 0){
                $allnachricht1->setUnterkategorie2($nghe.',');
               $this->thotimviecRepository->update($allnachricht1);
                $persistenceManager = $this->objectManager->get("TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager");
                $persistenceManager->persistAll();
            }

        }
        */
        /*
        $allnachricht = $this->thotimviecRepository->findAllTin();
        foreach($allnachricht as $allnachricht1){
            $tinhs =$allnachricht1->getTinhthanhpho2().',';
            $tinhs1 = explode(',',$tinhs);
            $tinhs1 =array_unique($tinhs1);
            $lerrti = '';
            foreach($tinhs1 as $tinhs12){
                if($tinhs12 != ''){
                    $lerrti .= $tinhs12.',';
                }
            }
            $allnachricht1->setTinhthanhpho2($lerrti);
            $this->thotimviecRepository->update($allnachricht1);
        }
        $persistenceManager = $this->objectManager->get("TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager");
        $persistenceManager->persistAll();
        */
        /*
        $allnachricht = $this->thotimviecRepository->findAllTin();
        foreach($allnachricht as $allnachricht1){
            $tinh = $allnachricht1->getTinhthanhpho1().',';
            $tinh = $tinh.$allnachricht1->getTinhthanhpho2().',';
            $allnachricht1->setTinhthanhpho2($tinh);
            $this->thotimviecRepository->update($allnachricht1);
        }
        $persistenceManager = $this->objectManager->get("TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager");
        $persistenceManager->persistAll();
        */
        /*
        $allnachricht = $this->thotimviecRepository->findAllTin();
        foreach($allnachricht as $allnachricht1){
            $tinh = $allnachricht1->getTitle();
            \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($tinh);
            \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($allnachricht1);
        }
        */
       //\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($allnachricht);
        /*
        $allnachricht = $this->thotimviecRepository->findAllTin();
        foreach($allnachricht as $allnachricht1){
            $tinh = $allnachricht1->getTinhthanhpho1();
            $tinhrepo = $this->tinhthanhphoRepository->findByUid($tinh);
            if(count($tinhrepo) > 0){
                $quanhuyenrp = $tinhrepo->getQuanhuyen();
                $quanhuyenstring = '';
                foreach($quanhuyenrp as $quanhuyenrp1){
                    $quanhuyenstring .= $quanhuyenrp1->getUid().',';
                }
                $allnachricht1->setQuanhuyen2($quanhuyenstring);
                $this->thotimviecRepository->update($allnachricht1);

            }

        }
        $persistenceManager = $this->objectManager->get("TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager");
        $persistenceManager->persistAll();
        \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($allnachricht);
        */

        if($_GET['tx_thosuachua_thotimvieclistsearch']['@widget_0']['tinhthanhpho'] != ''){
            $_POST[tx_thosuachua_thotimviecsearch][searchparam][tinhthanhpho]=$_GET['tx_thosuachua_thotimvieclistsearch']['@widget_0']['tinhthanhpho'];
        }
        if($_GET['tx_thosuachua_thotimvieclistsearch']['@widget_0']['unterkategorienghanh'] != ''){
            $_POST[tx_thosuachua_thotimviecsearch][searchparam][unterkategorienghanh]=$_GET['tx_thosuachua_thotimvieclistsearch']['@widget_0']['unterkategorienghanh'];
        }
        if($_GET['tx_thosuachua_thotimvieclistsearch']['@widget_0']['quanhuyen'] != ''){
            $_POST[tx_thosuachua_thotimviecsearch][searchparam][quanhuyen]=$_GET['tx_thosuachua_thotimvieclistsearch']['@widget_0']['quanhuyen'];
        }

        $param = array();
        if(isset($_POST[tx_thosuachua_thotimviecsearch])  ){
            $param['unterkategorienghanh'] = $_POST[tx_thosuachua_thotimviecsearch][searchparam][unterkategorienghanh];
            $param['thanhpho'] = $_POST[tx_thosuachua_thotimviecsearch][searchparam][tinhthanhpho];
            if($_POST[searchparam][quanhuyen] != ''){
                $param['quanhuyen'] = $_POST[searchparam][quanhuyen];
            }
            if(isset($_POST[tx_thosuachua_thotimviecsearch][searchparam][quanhuyen]) and $_POST[tx_thosuachua_thotimviecsearch][searchparam][quanhuyen] != ''){
                $param['quanhuyen'] = $_POST[tx_thosuachua_thotimviecsearch][searchparam][quanhuyen];
            }
            // $viectimtho = $this->thotimviecRepository->findByAllParam($param);
           $viectimtho = $this->thotimviecRepository->findByAllParam1($param);
        }else{
            $viectimtho = $this->thotimviecRepository->findAllTin();
        }
        $this->view->assign('thotimviecs', $viectimtho);
        session_start();
        $_SESSION['urlsthotimviec'] = $this->uriBuilder->getRequest()->getRequestUri() ;

        /*
        if ($_GET['searchparam']['tinhthanhpho'][0] == 'Tĩnh Thành Phố' or ! isset($_GET['searchparam'])) {
            $viectimthos = $this->viectimthoRepository->findAll();
        } else {
            $viectimthos = $this->viectimthoRepository->findBySearch($_GET['searchparam']);
        }

        $this->view->assign('viectimthos', $viectimthos);
        */
    }

}
