<?php
namespace VOV\Thosuachua\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class VOV\Thosuachua\Controller\NhomthoController.
 *
 */
class NhomthoControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \VOV\Thosuachua\Controller\NhomthoController
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = $this->getMock('VOV\\Thosuachua\\Controller\\NhomthoController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllNhomthosFromRepositoryAndAssignsThemToView() {

		$allNhomthos = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$nhomthoRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\NhomthoRepository', array('findAll'), array(), '', FALSE);
		$nhomthoRepository->expects($this->once())->method('findAll')->will($this->returnValue($allNhomthos));
		$this->inject($this->subject, 'nhomthoRepository', $nhomthoRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('nhomthos', $allNhomthos);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenNhomthoToView() {
		$nhomtho = new \VOV\Thosuachua\Domain\Model\Nhomtho();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('nhomtho', $nhomtho);

		$this->subject->showAction($nhomtho);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenNhomthoToView() {
		$nhomtho = new \VOV\Thosuachua\Domain\Model\Nhomtho();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newNhomtho', $nhomtho);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($nhomtho);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenNhomthoToNhomthoRepository() {
		$nhomtho = new \VOV\Thosuachua\Domain\Model\Nhomtho();

		$nhomthoRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\NhomthoRepository', array('add'), array(), '', FALSE);
		$nhomthoRepository->expects($this->once())->method('add')->with($nhomtho);
		$this->inject($this->subject, 'nhomthoRepository', $nhomthoRepository);

		$this->subject->createAction($nhomtho);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenNhomthoToView() {
		$nhomtho = new \VOV\Thosuachua\Domain\Model\Nhomtho();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('nhomtho', $nhomtho);

		$this->subject->editAction($nhomtho);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenNhomthoInNhomthoRepository() {
		$nhomtho = new \VOV\Thosuachua\Domain\Model\Nhomtho();

		$nhomthoRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\NhomthoRepository', array('update'), array(), '', FALSE);
		$nhomthoRepository->expects($this->once())->method('update')->with($nhomtho);
		$this->inject($this->subject, 'nhomthoRepository', $nhomthoRepository);

		$this->subject->updateAction($nhomtho);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenNhomthoFromNhomthoRepository() {
		$nhomtho = new \VOV\Thosuachua\Domain\Model\Nhomtho();

		$nhomthoRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\NhomthoRepository', array('remove'), array(), '', FALSE);
		$nhomthoRepository->expects($this->once())->method('remove')->with($nhomtho);
		$this->inject($this->subject, 'nhomthoRepository', $nhomthoRepository);

		$this->subject->deleteAction($nhomtho);
	}
}
