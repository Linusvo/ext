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
 * ViectimthoController
 */
class ViectimthoController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

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
     * action list
     * 
     * @return void
     */
    public function listAction() {
        if ($_GET['searchparam']['tinhthanhpho'][0] == 'Tĩnh Thành Phố' or ! isset($_GET['searchparam'])) {
            $viectimthos = $this->viectimthoRepository->findAll();
        } else {
            $viectimthos = $this->viectimthoRepository->findBySearch($_GET['searchparam']);
        }

        $this->view->assign('viectimthos', $viectimthos);
    }

    /**
     * action list
     * 
     * @return void
     */
    public function tinmoiAction() {
        $viectimthos = $this->viectimthoRepository->findAll();
        $this->view->assign('viectimthos', $viectimthos);
    }

    /**
     * action show
     * 
     * @param \VOV\Thosuachua\Domain\Model\Viectimtho $viectimtho
     * @return void
     */
    public function showAction(\VOV\Thosuachua\Domain\Model\Viectimtho $viectimtho) {
         session_start();
        $this->view->assign('viectimtho', $viectimtho);
        $this->view->assign('listhomeurl', $_SESSION['urlsviectimtho']);
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
        $nhomnghanh = array();
        foreach ($unterkategorienganhs as $unterkategorienganh1){
            $nhomnghanh[$unterkategorienganh1->getKategorie()->getTen()][$unterkategorienganh1->getUid()]= $unterkategorienganh1->getTen();
        }
        $t=0;
        $select = "<select class=\"form-control selectNhomNganh\" style=\"width: 100%\" name=\"tx_thosuachua_admin[newViectimtho][unterkategorienganh]\">";

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
        $this->arguments->getArgument('newViectimtho')->getPropertyMappingConfiguration()->allowAllProperties();
        $this->arguments->getArgument('newViectimtho')->getPropertyMappingConfiguration()->allowProperties('unterkategorienganh', 'ten', '*');


    }
    /**
     * action create
     * 
     * @param \VOV\Thosuachua\Domain\Model\Viectimtho $newViectimtho
     * @return void
     */
    public function createAction(\VOV\Thosuachua\Domain\Model\Viectimtho $newViectimtho) {
//		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
//		$this->viectimthoRepository->add($newViectimtho);
//		$this->redirect('list');


        /*
        $extbaseObjectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $useraaRepository = $extbaseObjectManager->get('VOV\Thosuachua\Domain\Repository\NhomthoRepository');
        $nhomtho = $newViectimtho->getAdminstrator();
        $newViectimtho->setHidden1(0);
        //$newViectimtho->setHidden1((int) 1);
        if($nhomtho->getUid()!=72){
            $nhomtho->addViectimtho($newViectimtho);
            $useraaRepository->update($nhomtho);
            session_start();
            $_SESSION['khoitaomautin'] = 'Mẩu tin của quí vị đã được khởi tạo thành công và được hiện thị tại Trang Chủ, tránh trường hợp tin đăng bị lỗi, quí vị nên kiểm tra lại mẩu tin một lần nữa.';
            $this->redirectToURI('/admin/');
        }else{
        //    $this->viectimthoRepository->add($newViectimtho);
            $nhomtho->addViectimtho($newViectimtho);
            $useraaRepository->update($nhomtho);
            session_start();
            $_SESSION['khoitaomautin'] = 'Mẩu tin của quí vị đã được khởi tạo thành công và được hiện thị tại Trang Chủ, tránh trường hợp tin đăng bị lỗi, quí vị nên kiểm tra lại mẩu tin một lần nữa.';
            $this->redirectToURI('/trang-chu/');
        }

        */
        $extbaseObjectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $useraaRepository = $extbaseObjectManager->get('VOV\Thosuachua\Domain\Repository\NhomthoRepository');
        $nhomtho = $useraaRepository->findByUid($_POST[tx_thosuachua_admin][adminstrator]);
        $params = $_POST[tx_thosuachua_admin][newViectimtho];
        $params[quanhuyen] = $_POST[tx_thosuachua_admin][newTintimviec][quanhuyen];
        //$newTintimviec->addUnterkategorienganh($this->unterkategorienganhRepository->findByUid($_POST[tx_thosuachua_admin][newTintimviec][unterkategorienganh]));
        $tinh = $this->tinhthanhphoRepository->findByUid($params[tinhthanhpho]);
        $nghe = $this->unterkategorienganhRepository->findByUid($params[unterkategorienganh]);
        $nganh = $nghe->getKategorie();

        $newViectimtho->setTinhthanhpho1($params[tinhthanhpho]);
        if($params[quanhuyen] != ''){
            $huyen = $this->quanhuyenRepository->findByUid($params[quanhuyen]);
            $newViectimtho->setQuanhuyen1($huyen->getUid());
        }
        $newViectimtho->setKategorie($nganh->getUid());
        $newViectimtho->setUnterkategorie($nghe->getUid());
        $newViectimtho->setAdmin($nhomtho->getUid());
        //  $newTintimviec->setHidden1((int)1);
        $newViectimtho->setHidden1(0);

//        $loginuser = $GLOBALS['TSFE']->fe_user->user;
//        $newTintimviec->setAdministrator((int)$loginuser[uid]);
        $nhomtho->addViectimtho($newViectimtho);
        $useraaRepository->update($nhomtho);
        session_start();
        $_SESSION['khoitaomautin'] = 'Mẩu tin của quí vị đã được khởi tạo thành công và được hiện thị tại mục Tuyển Dụng, tránh trường hợp tin đăng bị lỗi, quí vị nên kiểm tra lại mẩu tin một lần nữa.';
       // $this->redirectToURI('/admin/');
        if($nhomtho->getUid()!=72){
            $this->redirectToURI('/admin/');
        }else{
            $this->redirectToURI('');
        }

    }

    /**
     * action edit
     * 
     * @param \VOV\Thosuachua\Domain\Model\Viectimtho $viectimtho
     * @ignorevalidation $viectimtho
     * @return void
     */
    public function editAction(\VOV\Thosuachua\Domain\Model\Viectimtho $viectimtho) {
        $this->view->assign('viectimtho', $viectimtho);
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
        $select = "<select class=\"form-control selectNhomNganh\" style=\"width: 100%\" name=\"tx_thosuachua_admin[newviectimtho][unterkategorienganh]\">";
        $select .= '<option value="">'.$this->unterkategorienganhRepository->findByUid($viectimtho->getUnterkategorie())->getTen()."</option>";
        foreach ($nhomnghanh as $key1 => $nhomnghanh1){
            $t=$t+1;
            $select .= '<option value="99991'.$t.'" style="font-weight:bold; font-size:17px; padding:16px 0!important; color: #009900">'.'----------'.$key1."----------</option>";
            foreach ($nhomnghanh1 as $key => $nhomnghanh2){
                $select .= '<option style="color: #D41045!important" value="'.$key.'">'.$nhomnghanh2."</option>";
            }
        }
        $select .= "</select>";
        $this->view->assign('unterkategorienganh1s',$select);
        $this->view->assign('tinhthanhselect',$this->tinhthanhphoRepository->findByUid($viectimtho->getTinhthanhpho1()));

    }

    /**
     * action update
     * 
     * @param \VOV\Thosuachua\Domain\Model\Viectimtho $viectimtho
     * @return void
     */
    public function updateAction(\VOV\Thosuachua\Domain\Model\Viectimtho $viectimtho) {
        if($_POST[tx_thosuachua_admin][newTintimviec][quanhuyen] != ''){
            $viectimtho->setQuanhuyen1($_POST[tx_thosuachua_admin][newTintimviec][quanhuyen]);
        }
        if($_POST[tx_thosuachua_admin][newviectimtho][unterkategorienganh] != ''){
            $viectimtho->setUnterkategorie($_POST[tx_thosuachua_admin][newviectimtho][unterkategorienganh]);
            $unterkategorienganhs = $this->unterkategorienganhRepository->findByUid($_POST[tx_thosuachua_admin][newviectimtho][unterkategorienganh]);
            $viectimtho->setKategorie($unterkategorienganhs->getKategorie()->getUid());
        }
        $this->viectimthoRepository->update($viectimtho);
        $this->redirectToURI('/admin/');
        /*
        $quanhuyens = $this->quanhuyenRepository->findByUid($_POST[tx_thosuachua_admin][newViectimtho][quanhuyen][0]);
        $tinhthanhs = $this->tinhthanhphoRepository->findByUid($_POST[tx_thosuachua_admin][newViectimtho][tinhthanhpho][0]);
        $kategorienganhs = $this->kategorienganhRepository->findByUid($_POST[tx_thosuachua_admin][newViectimtho][kategorienghanh][0]);
        $unterkategorienganhs = $this->unterkategorienganhRepository->findByUid($_POST[tx_thosuachua_admin][newViectimtho][unterkategorienganh][0]);

        if (isset($_POST[tx_thosuachua_admin][newViectimtho][quanhuyen][0]) and $_POST[tx_thosuachua_admin][newViectimtho][quanhuyen][0] != 0) {
            $quanhuyenscu = $viectimtho->getQuanhuyen()->toArray();
            if ($quanhuyenscu[0] != 0) {
                $viectimtho->removeQuanhuyen($quanhuyenscu[0]);
            }
            $viectimtho->addQuanhuyen($quanhuyens);
        }
        if (isset($_POST[tx_thosuachua_admin][newViectimtho][tinhthanhpho][0]) and $_POST[tx_thosuachua_admin][newViectimtho][tinhthanhpho][0] != 0) {
            $thanhphocu = $viectimtho->getTinhthanhpho()->toArray();
            $viectimtho->removeTinhthanhpho($thanhphocu[0]);
            $viectimtho->addTinhthanhpho($quanhuyens);
        }

        if (isset($_POST[tx_thosuachua_admin][newViectimtho][kategorienghanh][0]) and $_POST[tx_thosuachua_admin][newViectimtho][kategorienghanh][0] != 0) {
            $nganh = $viectimtho->getKategorienganh()->toArray();
            $viectimtho->removeKategorienganh($nganh[0]);
            $viectimtho->addKategorienganh($kategorienganhs);
        }

        if (isset($_POST[tx_thosuachua_admin][newViectimtho][unterkategorienganh][0]) and $_POST[tx_thosuachua_admin][newViectimtho][unterkategorienganh][0] != 0) {
            $nghe = $viectimtho->getUnterkategorienganh()->toArray();
            if ($nghe[0] != 0) {
                $viectimtho->removeUnterkategorienganh($nghe[0]);
            }
            $viectimtho->addUnterkategorienganh($unterkategorienganhs);
        }

        // $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->viectimthoRepository->update($viectimtho);
        $this->redirectToURI('/admin/');
        // $this->redirect('list');
        */
    }

    /**
     * action update
     * 
     * @param \VOV\Thosuachua\Domain\Model\Viectimtho $viectimtho
     * @return void
     */
    public function xoatinAction(\VOV\Thosuachua\Domain\Model\Viectimtho $viectimtho) {
        $this->view->assign('viectimtho', $viectimtho);
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
        $select = "<select class=\"form-control\" style=\"width: 100%\" name=\"tx_thosuachua_viectimthosearch[searchparam][unterkategorienghanh]\">";

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

        if($_GET['tx_thosuachua_viectimtholistsearch']['@widget_0']['tinhthanhpho'] != ''){
            $_POST[tx_thosuachua_viectimthosearch][searchparam][tinhthanhpho]=$_GET['tx_thosuachua_viectimtholistsearch']['@widget_0']['tinhthanhpho'];
        }
        if($_GET['tx_thosuachua_viectimtholistsearch']['@widget_0']['unterkategorienghanh'] != ''){
            $_POST[tx_thosuachua_viectimthosearch][searchparam][unterkategorienghanh]=$_GET['tx_thosuachua_viectimtholistsearch']['@widget_0']['unterkategorienghanh'];
        }
        if($_GET['tx_thosuachua_viectimtholistsearch']['@widget_0']['quanhuyen'] != ''){
            $_POST[tx_thosuachua_viectimthosearch][searchparam][quanhuyen]=$_GET['tx_thosuachua_viectimtholistsearch']['@widget_0']['quanhuyen'];
        }
        $param = array();
        if(isset($_POST[tx_thosuachua_viectimthosearch])){
            $param['unterkategorienghanh'] = $_POST[tx_thosuachua_viectimthosearch][searchparam][unterkategorienghanh];
            $param['thanhpho'] = $_POST[tx_thosuachua_viectimthosearch][searchparam][tinhthanhpho];
            if($_POST[searchparam][quanhuyen] != ''){
                $param['quanhuyen'] = $_POST[searchparam][quanhuyen];
            }
            if(isset($_POST[tx_thosuachua_viectimthosearch][searchparam][quanhuyen]) and $_POST[tx_thosuachua_viectimthosearch][searchparam][quanhuyen] != ''){
                $param['quanhuyen'] = $_POST[tx_thosuachua_viectimthosearch][searchparam][quanhuyen];
            }
            $viectimtho = $this->viectimthoRepository->findByAllParam($param);
        }else{
            $viectimtho = $this->viectimthoRepository->findAllTin();
        }
        $this->view->assign('viectimthos', $viectimtho);
        session_start();
        $_SESSION['urlsviectimtho'] = $this->uriBuilder->getRequest()->getRequestUri() ;
        /*
        if ($_GET['searchparam']['tinhthanhpho'][0] == 'Tĩnh Thành Phố' or ! isset($_GET['searchparam'])) {
            $viectimthos = $this->viectimthoRepository->findAll();
        } else {
            $viectimthos = $this->viectimthoRepository->findBySearch($_GET['searchparam']);
        }

        $this->view->assign('viectimthos', $viectimthos);
        */
    }

    /**
     * action delete
     * 
     * @param \VOV\Thosuachua\Domain\Model\Viectimtho $viectimtho
     * @return void
     */
    public function deleteAction(\VOV\Thosuachua\Domain\Model\Viectimtho $viectimtho) {
        // $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->viectimthoRepository->remove($viectimtho);
        $this->redirectToURI('/admin/');
        // $this->redirect('list');
    }

}
