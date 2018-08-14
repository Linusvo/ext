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
 * Test case for class VOV\Thosuachua\Controller\TintuyendungController.
 *
 */
class TintuyendungControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \VOV\Thosuachua\Controller\TintuyendungController
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = $this->getMock('VOV\\Thosuachua\\Controller\\TintuyendungController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllTintuyendungsFromRepositoryAndAssignsThemToView() {

		$allTintuyendungs = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$tintuyendungRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\TintuyendungRepository', array('findAll'), array(), '', FALSE);
		$tintuyendungRepository->expects($this->once())->method('findAll')->will($this->returnValue($allTintuyendungs));
		$this->inject($this->subject, 'tintuyendungRepository', $tintuyendungRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('tintuyendungs', $allTintuyendungs);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenTintuyendungToView() {
		$tintuyendung = new \VOV\Thosuachua\Domain\Model\Tintuyendung();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('tintuyendung', $tintuyendung);

		$this->subject->showAction($tintuyendung);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenTintuyendungToView() {
		$tintuyendung = new \VOV\Thosuachua\Domain\Model\Tintuyendung();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newTintuyendung', $tintuyendung);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($tintuyendung);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenTintuyendungToTintuyendungRepository() {
		$tintuyendung = new \VOV\Thosuachua\Domain\Model\Tintuyendung();

		$tintuyendungRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\TintuyendungRepository', array('add'), array(), '', FALSE);
		$tintuyendungRepository->expects($this->once())->method('add')->with($tintuyendung);
		$this->inject($this->subject, 'tintuyendungRepository', $tintuyendungRepository);

		$this->subject->createAction($tintuyendung);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenTintuyendungToView() {
		$tintuyendung = new \VOV\Thosuachua\Domain\Model\Tintuyendung();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('tintuyendung', $tintuyendung);

		$this->subject->editAction($tintuyendung);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenTintuyendungInTintuyendungRepository() {
		$tintuyendung = new \VOV\Thosuachua\Domain\Model\Tintuyendung();

		$tintuyendungRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\TintuyendungRepository', array('update'), array(), '', FALSE);
		$tintuyendungRepository->expects($this->once())->method('update')->with($tintuyendung);
		$this->inject($this->subject, 'tintuyendungRepository', $tintuyendungRepository);

		$this->subject->updateAction($tintuyendung);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenTintuyendungFromTintuyendungRepository() {
		$tintuyendung = new \VOV\Thosuachua\Domain\Model\Tintuyendung();

		$tintuyendungRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\TintuyendungRepository', array('remove'), array(), '', FALSE);
		$tintuyendungRepository->expects($this->once())->method('remove')->with($tintuyendung);
		$this->inject($this->subject, 'tintuyendungRepository', $tintuyendungRepository);

		$this->subject->deleteAction($tintuyendung);
	}
}
