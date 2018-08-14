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
 * Test case for class VOV\Thosuachua\Controller\TintimviecController.
 *
 */
class TintimviecControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \VOV\Thosuachua\Controller\TintimviecController
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = $this->getMock('VOV\\Thosuachua\\Controller\\TintimviecController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllTintimviecsFromRepositoryAndAssignsThemToView() {

		$allTintimviecs = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$tintimviecRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\TintimviecRepository', array('findAll'), array(), '', FALSE);
		$tintimviecRepository->expects($this->once())->method('findAll')->will($this->returnValue($allTintimviecs));
		$this->inject($this->subject, 'tintimviecRepository', $tintimviecRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('tintimviecs', $allTintimviecs);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenTintimviecToView() {
		$tintimviec = new \VOV\Thosuachua\Domain\Model\Tintimviec();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('tintimviec', $tintimviec);

		$this->subject->showAction($tintimviec);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenTintimviecToView() {
		$tintimviec = new \VOV\Thosuachua\Domain\Model\Tintimviec();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newTintimviec', $tintimviec);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($tintimviec);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenTintimviecToTintimviecRepository() {
		$tintimviec = new \VOV\Thosuachua\Domain\Model\Tintimviec();

		$tintimviecRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\TintimviecRepository', array('add'), array(), '', FALSE);
		$tintimviecRepository->expects($this->once())->method('add')->with($tintimviec);
		$this->inject($this->subject, 'tintimviecRepository', $tintimviecRepository);

		$this->subject->createAction($tintimviec);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenTintimviecToView() {
		$tintimviec = new \VOV\Thosuachua\Domain\Model\Tintimviec();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('tintimviec', $tintimviec);

		$this->subject->editAction($tintimviec);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenTintimviecInTintimviecRepository() {
		$tintimviec = new \VOV\Thosuachua\Domain\Model\Tintimviec();

		$tintimviecRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\TintimviecRepository', array('update'), array(), '', FALSE);
		$tintimviecRepository->expects($this->once())->method('update')->with($tintimviec);
		$this->inject($this->subject, 'tintimviecRepository', $tintimviecRepository);

		$this->subject->updateAction($tintimviec);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenTintimviecFromTintimviecRepository() {
		$tintimviec = new \VOV\Thosuachua\Domain\Model\Tintimviec();

		$tintimviecRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\TintimviecRepository', array('remove'), array(), '', FALSE);
		$tintimviecRepository->expects($this->once())->method('remove')->with($tintimviec);
		$this->inject($this->subject, 'tintimviecRepository', $tintimviecRepository);

		$this->subject->deleteAction($tintimviec);
	}
}
