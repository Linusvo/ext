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
 * DanhgiaController
 */
class DanhgiaController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * danhgiaRepository
	 * 
	 * @var \VOV\Thosuachua\Domain\Repository\DanhgiaRepository
	 * @inject
	 */
	protected $danhgiaRepository = NULL;

	/**
	 * action list
	 * 
	 * @return void
	 */
	public function listAction() {
		$danhgias = $this->danhgiaRepository->findAll();
		$this->view->assign('danhgias', $danhgias);
	}

	/**
	 * action show
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Danhgia $danhgia
	 * @return void
	 */
	public function showAction(\VOV\Thosuachua\Domain\Model\Danhgia $danhgia) {
		$this->view->assign('danhgia', $danhgia);
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
	 * @param \VOV\Thosuachua\Domain\Model\Danhgia $newDanhgia
	 * @return void
	 */
	public function createAction(\VOV\Thosuachua\Domain\Model\Danhgia $newDanhgia) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->danhgiaRepository->add($newDanhgia);
		$this->redirect('list');
	}

	/**
	 * action edit
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Danhgia $danhgia
	 * @ignorevalidation $danhgia
	 * @return void
	 */
	public function editAction(\VOV\Thosuachua\Domain\Model\Danhgia $danhgia) {
		$this->view->assign('danhgia', $danhgia);
	}

	/**
	 * action update
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Danhgia $danhgia
	 * @return void
	 */
	public function updateAction(\VOV\Thosuachua\Domain\Model\Danhgia $danhgia) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->danhgiaRepository->update($danhgia);
		$this->redirect('list');
	}

	/**
	 * action delete
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Danhgia $danhgia
	 * @return void
	 */
	public function deleteAction(\VOV\Thosuachua\Domain\Model\Danhgia $danhgia) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->danhgiaRepository->remove($danhgia);
		$this->redirect('list');
	}

}