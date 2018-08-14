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
 * Test case for class VOV\Thosuachua\Controller\DuongphoController.
 *
 */
class DuongphoControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \VOV\Thosuachua\Controller\DuongphoController
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = $this->getMock('VOV\\Thosuachua\\Controller\\DuongphoController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllDuongphosFromRepositoryAndAssignsThemToView() {

		$allDuongphos = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$duongphoRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\DuongphoRepository', array('findAll'), array(), '', FALSE);
		$duongphoRepository->expects($this->once())->method('findAll')->will($this->returnValue($allDuongphos));
		$this->inject($this->subject, 'duongphoRepository', $duongphoRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('duongphos', $allDuongphos);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenDuongphoToView() {
		$duongpho = new \VOV\Thosuachua\Domain\Model\Duongpho();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('duongpho', $duongpho);

		$this->subject->showAction($duongpho);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenDuongphoToView() {
		$duongpho = new \VOV\Thosuachua\Domain\Model\Duongpho();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newDuongpho', $duongpho);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($duongpho);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenDuongphoToDuongphoRepository() {
		$duongpho = new \VOV\Thosuachua\Domain\Model\Duongpho();

		$duongphoRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\DuongphoRepository', array('add'), array(), '', FALSE);
		$duongphoRepository->expects($this->once())->method('add')->with($duongpho);
		$this->inject($this->subject, 'duongphoRepository', $duongphoRepository);

		$this->subject->createAction($duongpho);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenDuongphoToView() {
		$duongpho = new \VOV\Thosuachua\Domain\Model\Duongpho();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('duongpho', $duongpho);

		$this->subject->editAction($duongpho);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenDuongphoInDuongphoRepository() {
		$duongpho = new \VOV\Thosuachua\Domain\Model\Duongpho();

		$duongphoRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\DuongphoRepository', array('update'), array(), '', FALSE);
		$duongphoRepository->expects($this->once())->method('update')->with($duongpho);
		$this->inject($this->subject, 'duongphoRepository', $duongphoRepository);

		$this->subject->updateAction($duongpho);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenDuongphoFromDuongphoRepository() {
		$duongpho = new \VOV\Thosuachua\Domain\Model\Duongpho();

		$duongphoRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\DuongphoRepository', array('remove'), array(), '', FALSE);
		$duongphoRepository->expects($this->once())->method('remove')->with($duongpho);
		$this->inject($this->subject, 'duongphoRepository', $duongphoRepository);

		$this->subject->deleteAction($duongpho);
	}
}
