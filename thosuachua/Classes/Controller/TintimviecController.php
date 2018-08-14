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
 * TintimviecController
 */
class TintimviecController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

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
     * tintimviecRepository
     * 
     * @var \VOV\Thosuachua\Domain\Repository\TintimviecRepository
     * @inject
     */
    protected $tintimviecRepository = NULL;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction() {
        $param = array();
        /*
        if ($_GET['searchparam']['tinhthanhpho'][0] == 'Tĩnh Thành Phố' or ! isset($_GET['searchparam'])) {
            $tintimviecs = $this->tintimviecRepository->findAll();
        } else {
            $tintimviecs = $this->tintimviecRepository->findBySearch($_GET['searchparam']);
        }
        */

        if(isset($_POST[tx_thosuachua_tintimviecsearch])){
            $param['unterkategorienghanh'] = $_POST[tx_thosuachua_tintimviecsearch][searchparam][unterkategorienghanh];
            $param['thanhpho'] = $_POST[tx_thosuachua_tintimviecsearch][searchparam][tinhthanhpho];
            if($_POST[searchparam][quanhuyen] != ''){
                $param['quanhuyen'] = $_POST[searchparam][quanhuyen];
            }
            if(isset($_POST[tx_thosuachua_tintimviecsearch][searchparam][quanhuyen]) and $_POST[tx_thosuachua_tintimviecsearch][searchparam][quanhuyen] != ''){
                $param['quanhuyen'] = $_POST[tx_thosuachua_tintimviecsearch][searchparam][quanhuyen];
            }
            $tintimviecs = $this->tintimviecRepository->findByAllParam($param);
           /*
            //    $tintimviecs = $this->tintimviecRepository->findAllTin();
            if($_POST[searchparam][quanhuyen] < 999){
                if((int)$param['unterkategorienghanh'] > 999){
                    if($_POST[searchparam][searchtext] != '' ){
                        $param['unterkategorienghanh'] = $_POST[searchparam][searchtext];
                        $tintimviecs =  $this->tintimviecRepository->findBySearchQuanhuyen($param);
                    }else{
                   //     $quanhuyenn = $this->quanhuyenRepository->findByUid($_POST[searchparam][quanhuyen]);
                    //    $tintimviecs =  $quanhuyenn->getTintimviec();
                    //    $tintimviecs =  $quanhuyenn->getTintimviec();
                        $tintimviecs =  $this->tintimviecRepository->findBySearchQuanhuyen1($param);
                        //$tintimviecs =  $this->tintimviecRepository->findBySearchQuanhuyen($param);
                    }
                }else{
                    $tintimviecs =  $this->tintimviecRepository->findBySearchQuanhuyen($param);
                }

            }else{
                if($_POST[tx_thosuachua_tintimviecsearch][searchparam][tinhthanhpho] < 999){
                    $param['thanhpho'] = $_POST[tx_thosuachua_tintimviecsearch][searchparam][tinhthanhpho];
                    if((int)$param['unterkategorienghanh'] > 999){
                        if($_POST[searchparam][searchtext] != '' ){
                            $param['unterkategorienghanh'] = $_POST[searchparam][searchtext];
                            $tintimviecs =  $this->tintimviecRepository->findBySearchThanhpho($param);
                        }else{
                            $tintimviecs =  $this->tintimviecRepository->findBySearchThanhpho2($param);
                        }
                    }else{
                        $tintimviecs =  $this->tintimviecRepository->findBySearchThanhpho($param);
                    }

                }else{
                    if((int)$param['unterkategorienghanh'] > 999){
                        if($_POST[searchparam][searchtext] != '' ){
                            $param['unterkategorienghanh'] = $_POST[searchparam][searchtext];
                            $tintimviecs =  $this->tintimviecRepository->findBySearchThanhpho1($param);
                        }else{
                            $tintimviecs = $this->tintimviecRepository->findAllTin();
                        }
                    }else{
                        $tintimviecs =  $this->tintimviecRepository->findBySearchThanhpho1($param);

                    }
                }
              }

           */

        }else{
            $tintimviecs = $this->tintimviecRepository->findAllTin();
        }
        $this->view->assign('tintimviecs', $tintimviecs);
        session_start();
        $_SESSION['urlstintimviec'] = $this->uriBuilder->getRequest()->getRequestUri() ;
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
        $select = "<select class=\"form-control\" style=\"width: 100%\" name=\"tx_thosuachua_tintimviecsearch[searchparam][unterkategorienghanh]\">";

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
     * action show
     * 
     * @param \VOV\Thosuachua\Domain\Model\Tintimviec $tintimviec
     * @return void
     */
    public function showAction(\VOV\Thosuachua\Domain\Model\Tintimviec $tintimviec) {
        session_start();
        $this->view->assign('tintimviec', $tintimviec);
        $this->view->assign('urlstintimviec', $_SESSION['urlstintimviec']);
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
        $select = "<select class=\"form-control\" style=\"width: 100%\" name=\"tx_thosuachua_admin[newTintimviec][unterkategorienganh]\">";

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
    }
    /**
     * initialize create action
     *
     * @return void
     */
    public function initializeCreateAction() {
        $this->arguments->getArgument('newTintimviec')->getPropertyMappingConfiguration()->allowAllProperties();
        $this->arguments->getArgument('newTintimviec')->getPropertyMappingConfiguration()->allowProperties('unterkategorienganh', 'ten', '*');


    }
    /**
     * action create
     * 
     * @param \VOV\Thosuachua\Domain\Model\Tintimviec $newTintimviec
     * @return void
     */
    public function createAction(\VOV\Thosuachua\Domain\Model\Tintimviec $newTintimviec) {
    $params = $_POST[tx_thosuachua_admin][newTintimviec];

        //$newTintimviec->addUnterkategorienganh($this->unterkategorienganhRepository->findByUid($_POST[tx_thosuachua_admin][newTintimviec][unterkategorienganh]));
        $tinh = $this->tinhthanhphoRepository->findByUid($params[tinhthanhpho]);
        $huyen = $this->quanhuyenRepository->findByUid($params[quanhuyen]);
        $nghe = $this->unterkategorienganhRepository->findByUid($params[unterkategorienganh]);
        $nganh = $nghe->getKategorie();
        /*
        $tinh->addTintimviec($newTintimviec);
        $huyen->addTintimviec($newTintimviec);
        $nghe->addTintimviec($newTintimviec);
        $nganh->addTintimviec($newTintimviec);
        $this->quanhuyenRepository->update($huyen);
        $persistenceManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance("TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager");
        $persistenceManager->persistAll();
        */
//		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
//		$this->tintimviecRepository->add($newTintimviec);
//		$this->redirect('list');
        $extbaseObjectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $useraaRepository = $extbaseObjectManager->get('VOV\Thosuachua\Domain\Repository\NhomthoRepository');
        $nhomtho = $newTintimviec->getAdministrator();
        $newTintimviec->setThanhpho($tinh->getUid());
        $newTintimviec->setQuanhuyen1($huyen->getUid());
        $newTintimviec->setKategorie($nganh->getUid());
        $newTintimviec->setUnterkategorie($nghe->getUid());
        $newTintimviec->setAdmin($nhomtho->getUid());
       //  $newTintimviec->setHidden1((int)1);
         $newTintimviec->setHidden1(0);
//        $loginuser = $GLOBALS['TSFE']->fe_user->user;
//        $newTintimviec->setAdministrator((int)$loginuser[uid]);
        $nhomtho->addTintimviec($newTintimviec);
        $useraaRepository->update($nhomtho);
        session_start();
        $_SESSION['khoitaomautin'] = 'Mẩu tin của quí vị đã được khởi tạo thành công và được hiện thị tại mục Tuyển Dụng, tránh trường hợp tin đăng bị lỗi, quí vị nên kiểm tra lại mẩu tin một lần nữa.';
        //$this->redirectToURI('/admin/');
        if($nhomtho->getUid()!=72){
            $this->redirectToURI('/admin/');
        }else{
            $this->redirectToURI('');
        }
    }

    /**
     * action edit
     * 
     * @param \VOV\Thosuachua\Domain\Model\Tintimviec $tintimviec
     * @ignorevalidation $tintimviec
     * @return void
     */
    public function editAction(\VOV\Thosuachua\Domain\Model\Tintimviec $tintimviec) {
        $this->view->assign('tintimviec', $tintimviec);
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
     * @param \VOV\Thosuachua\Domain\Model\Tintimviec $tintimviec
     * @return void
     */
    public function updateAction(\VOV\Thosuachua\Domain\Model\Tintimviec $tintimviec) {
        $quanhuyens = $this->quanhuyenRepository->findByUid($_POST[tx_thosuachua_admin][newTintimviec][quanhuyen][0]);
        $tinhthanhs = $this->tinhthanhphoRepository->findByUid($_POST[tx_thosuachua_admin][newTintimviec][tinhthanhpho][0]);
        $kategorienganhs = $this->kategorienganhRepository->findByUid($_POST[tx_thosuachua_admin][newTintimviec][kategorienghanh][0]);
        $unterkategorienganhs = $this->unterkategorienganhRepository->findByUid($_POST[tx_thosuachua_admin][newTintimviec][unterkategorienganh][0]);

        if (isset($_POST[tx_thosuachua_admin][newTintimviec][quanhuyen][0]) and $_POST[tx_thosuachua_admin][newTintimviec][quanhuyen][0] != 0) {
            $quanhuyenscu = $tintimviec->getQuanhuyen()->toArray();
            if(isset($quanhuyenscu) and count($quanhuyenscu)>0){
                 $tintimviec->removeQuanhuyen($quanhuyenscu[0]);
            }
            $tintimviec->addQuanhuyen($quanhuyens);
        }
        if (isset($_POST[tx_thosuachua_admin][newTintimviec][tinhthanhpho][0]) and $_POST[tx_thosuachua_admin][newTintimviec][tinhthanhpho][0] != 0) {
            $thanhphocu = $tintimviec->getTinhthanhpho()->toArray();
            $tintimviec->removeTinhthanhpho($thanhphocu[0]);
            $tintimviec->addTinhthanhpho($quanhuyens);
        }

        if (isset($_POST[tx_thosuachua_admin][newTintimviec][kategorienghanh][0]) and $_POST[tx_thosuachua_admin][newTintimviec][kategorienghanh][0] != 0) {
            $nganh = $tintimviec->getKategorienganh()->toArray();
            $tintimviec->removeKategorienganh($nganh[0]);
            $tintimviec->addKategorienganh($kategorienganhs);
        }

        if (isset($_POST[tx_thosuachua_admin][newTintimviec][unterkategorienganh][0]) and $_POST[tx_thosuachua_admin][newTintimviec][unterkategorienganh][0] != 0) {
            $nghe = $tintimviec->getUnterkategorienganh()->toArray();
             if(isset($nghe) and count($nghe)>0){
            $tintimviec->removeUnterkategorienganh($nghe[0]);
             }
            $tintimviec->addUnterkategorienganh($unterkategorienganhs);
        }

        // $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->tintimviecRepository->update($tintimviec);
        // $this->redirect('list');
        $this->redirectToURI('/admin/');
    }

    /**
     * action update
     * 
     * @param \VOV\Thosuachua\Domain\Model\Tintimviec $tintimviec
     * @return void
     */
    public function xoatinAction(\VOV\Thosuachua\Domain\Model\Tintimviec $tintimviec) {
        $this->view->assign('tintimviec', $tintimviec);
    }

    /**
     * action delete
     * 
     * @param \VOV\Thosuachua\Domain\Model\Tintimviec $tintimviec
     * @return void
     */
    public function deleteAction(\VOV\Thosuachua\Domain\Model\Tintimviec $tintimviec) {
        // $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->tintimviecRepository->remove($tintimviec);
        $this->redirectToURI('/admin/');

        // $this->redirect('list');
    }

}
