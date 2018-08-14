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
 * Test case for class VOV\Thosuachua\Controller\TinhthanhphoController.
 *
 */
class TinhthanhphoControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \VOV\Thosuachua\Controller\TinhthanhphoController
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = $this->getMock('VOV\\Thosuachua\\Controller\\TinhthanhphoController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllTinhthanhphosFromRepositoryAndAssignsThemToView() {

		$allTinhthanhphos = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$tinhthanhphoRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\TinhthanhphoRepository', array('findAll'), array(), '', FALSE);
		$tinhthanhphoRepository->expects($this->once())->method('findAll')->will($this->returnValue($allTinhthanhphos));
		$this->inject($this->subject, 'tinhthanhphoRepository', $tinhthanhphoRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('tinhthanhphos', $allTinhthanhphos);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenTinhthanhphoToView() {
		$tinhthanhpho = new \VOV\Thosuachua\Domain\Model\Tinhthanhpho();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('tinhthanhpho', $tinhthanhpho);

		$this->subject->showAction($tinhthanhpho);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenTinhthanhphoToView() {
		$tinhthanhpho = new \VOV\Thosuachua\Domain\Model\Tinhthanhpho();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newTinhthanhpho', $tinhthanhpho);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($tinhthanhpho);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenTinhthanhphoToTinhthanhphoRepository() {
		$tinhthanhpho = new \VOV\Thosuachua\Domain\Model\Tinhthanhpho();

		$tinhthanhphoRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\TinhthanhphoRepository', array('add'), array(), '', FALSE);
		$tinhthanhphoRepository->expects($this->once())->method('add')->with($tinhthanhpho);
		$this->inject($this->subject, 'tinhthanhphoRepository', $tinhthanhphoRepository);

		$this->subject->createAction($tinhthanhpho);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenTinhthanhphoToView() {
		$tinhthanhpho = new \VOV\Thosuachua\Domain\Model\Tinhthanhpho();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('tinhthanhpho', $tinhthanhpho);

		$this->subject->editAction($tinhthanhpho);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenTinhthanhphoInTinhthanhphoRepository() {
		$tinhthanhpho = new \VOV\Thosuachua\Domain\Model\Tinhthanhpho();

		$tinhthanhphoRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\TinhthanhphoRepository', array('update'), array(), '', FALSE);
		$tinhthanhphoRepository->expects($this->once())->method('update')->with($tinhthanhpho);
		$this->inject($this->subject, 'tinhthanhphoRepository', $tinhthanhphoRepository);

		$this->subject->updateAction($tinhthanhpho);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenTinhthanhphoFromTinhthanhphoRepository() {
		$tinhthanhpho = new \VOV\Thosuachua\Domain\Model\Tinhthanhpho();

		$tinhthanhphoRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\TinhthanhphoRepository', array('remove'), array(), '', FALSE);
		$tinhthanhphoRepository->expects($this->once())->method('remove')->with($tinhthanhpho);
		$this->inject($this->subject, 'tinhthanhphoRepository', $tinhthanhphoRepository);

		$this->subject->deleteAction($tinhthanhpho);
	}
}
