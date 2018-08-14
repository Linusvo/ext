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
 * Test case for class VOV\Thosuachua\Controller\ThotimviecController.
 *
 */
class ThotimviecControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \VOV\Thosuachua\Controller\ThotimviecController
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = $this->getMock('VOV\\Thosuachua\\Controller\\ThotimviecController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllThotimviecsFromRepositoryAndAssignsThemToView() {

		$allThotimviecs = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$thotimviecRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\ThotimviecRepository', array('findAll'), array(), '', FALSE);
		$thotimviecRepository->expects($this->once())->method('findAll')->will($this->returnValue($allThotimviecs));
		$this->inject($this->subject, 'thotimviecRepository', $thotimviecRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('thotimviecs', $allThotimviecs);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenThotimviecToView() {
		$thotimviec = new \VOV\Thosuachua\Domain\Model\Thotimviec();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('thotimviec', $thotimviec);

		$this->subject->showAction($thotimviec);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenThotimviecToView() {
		$thotimviec = new \VOV\Thosuachua\Domain\Model\Thotimviec();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newThotimviec', $thotimviec);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($thotimviec);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenThotimviecToThotimviecRepository() {
		$thotimviec = new \VOV\Thosuachua\Domain\Model\Thotimviec();

		$thotimviecRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\ThotimviecRepository', array('add'), array(), '', FALSE);
		$thotimviecRepository->expects($this->once())->method('add')->with($thotimviec);
		$this->inject($this->subject, 'thotimviecRepository', $thotimviecRepository);

		$this->subject->createAction($thotimviec);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenThotimviecToView() {
		$thotimviec = new \VOV\Thosuachua\Domain\Model\Thotimviec();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('thotimviec', $thotimviec);

		$this->subject->editAction($thotimviec);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenThotimviecInThotimviecRepository() {
		$thotimviec = new \VOV\Thosuachua\Domain\Model\Thotimviec();

		$thotimviecRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\ThotimviecRepository', array('update'), array(), '', FALSE);
		$thotimviecRepository->expects($this->once())->method('update')->with($thotimviec);
		$this->inject($this->subject, 'thotimviecRepository', $thotimviecRepository);

		$this->subject->updateAction($thotimviec);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenThotimviecFromThotimviecRepository() {
		$thotimviec = new \VOV\Thosuachua\Domain\Model\Thotimviec();

		$thotimviecRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\ThotimviecRepository', array('remove'), array(), '', FALSE);
		$thotimviecRepository->expects($this->once())->method('remove')->with($thotimviec);
		$this->inject($this->subject, 'thotimviecRepository', $thotimviecRepository);

		$this->subject->deleteAction($thotimviec);
	}
}
