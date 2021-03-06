<?php
namespace VOV\Thosuachua\Controller;

/***************************************************************
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
 ***************************************************************/

/**
 * MautinController
 */
class MautinController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {
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
	 * nhomthoRepository
	 * 
	 * @var \VOV\Thosuachua\Domain\Repository\MautinRepository
	 * @inject
	 */
	protected $mautinRepository = NULL;
	/**
	 * action list
	 * 
	 * @return void
	 */
	public function listAction() {
		$mautins = $this->mautinRepository->findAll();
		$this->view->assign('mautins', $mautins);
	}

	/**
	 * action show
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Mautin $mautin
	 * @return void
	 */
	public function showAction(\VOV\Thosuachua\Domain\Model\Mautin $mautin) {
		$this->view->assign('mautin', $mautin);
	}

	/**
	 * action new
	 * 
	 * @return void
	 */
	public function newAction() {
		                $quanhuyens = $this->quanhuyenRepository->findAll();
                 $tinhthanhs = $this->tinhthanhphoRepository->findAll();
                 $kategorienganhs = $this->kategorienganhRepository->findAll()->toArray();
                 $unterkategorienganhs = $this->unterkategorienganhRepository->findAll();
                 $this->view->assign('tinhthanhs', $tinhthanhs);
                          $this->view->assign('unterkategorienganhs', $unterkategorienganhs);
                      $this->view->assign('kategorienganhs', $kategorienganhs);
           // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($kategorienganhs);
//                \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($this->quanhuyenRepository);
                $this->view->assign('quanhuyens', $quanhuyens);
	}

	/**
	 * action create
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Mautin $newMautin
	 * @return void
	 */
	public function createAction(\VOV\Thosuachua\Domain\Model\Mautin $newMautin) {
            
         \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($newMautin);
           die();
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->mautinRepository->add($newMautin);
		$this->redirect('list');
	}

	/**
	 * action edit
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Mautin $mautin
	 * @ignorevalidation $mautin
	 * @return void
	 */
	public function editAction(\VOV\Thosuachua\Domain\Model\Mautin $mautin) {
		$this->view->assign('mautin', $mautin);
	}

	/**
	 * action update
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Mautin $mautin
	 * @return void
	 */
	public function updateAction(\VOV\Thosuachua\Domain\Model\Mautin $mautin) {
//                  \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($mautin->getUid());
//                $mautin1 =  $this->mautinRepository->findAll();
//                      \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($mautin1);
//         die();
		//$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->mautinRepository->update($mautin);
		//$this->redirect('list');
                $this->redirectToURI('/admin/');
	}

	/**
	 * action delete
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Mautin $mautin
	 * @return void
	 */
	public function deleteAction(\VOV\Thosuachua\Domain\Model\Mautin $mautin) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->mautinRepository->remove($mautin);
		$this->redirect('list');
	}

}