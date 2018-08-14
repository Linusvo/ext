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
 * Test case for class VOV\Thosuachua\Controller\MautinController.
 *
 */
class MautinControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \VOV\Thosuachua\Controller\MautinController
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = $this->getMock('VOV\\Thosuachua\\Controller\\MautinController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllMautinsFromRepositoryAndAssignsThemToView() {

		$allMautins = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$mautinRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$mautinRepository->expects($this->once())->method('findAll')->will($this->returnValue($allMautins));
		$this->inject($this->subject, 'mautinRepository', $mautinRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('mautins', $allMautins);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenMautinToView() {
		$mautin = new \VOV\Thosuachua\Domain\Model\Mautin();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('mautin', $mautin);

		$this->subject->showAction($mautin);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenMautinToView() {
		$mautin = new \VOV\Thosuachua\Domain\Model\Mautin();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newMautin', $mautin);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($mautin);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenMautinToMautinRepository() {
		$mautin = new \VOV\Thosuachua\Domain\Model\Mautin();

		$mautinRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$mautinRepository->expects($this->once())->method('add')->with($mautin);
		$this->inject($this->subject, 'mautinRepository', $mautinRepository);

		$this->subject->createAction($mautin);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenMautinToView() {
		$mautin = new \VOV\Thosuachua\Domain\Model\Mautin();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('mautin', $mautin);

		$this->subject->editAction($mautin);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenMautinInMautinRepository() {
		$mautin = new \VOV\Thosuachua\Domain\Model\Mautin();

		$mautinRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$mautinRepository->expects($this->once())->method('update')->with($mautin);
		$this->inject($this->subject, 'mautinRepository', $mautinRepository);

		$this->subject->updateAction($mautin);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenMautinFromMautinRepository() {
		$mautin = new \VOV\Thosuachua\Domain\Model\Mautin();

		$mautinRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$mautinRepository->expects($this->once())->method('remove')->with($mautin);
		$this->inject($this->subject, 'mautinRepository', $mautinRepository);

		$this->subject->deleteAction($mautin);
	}
}
