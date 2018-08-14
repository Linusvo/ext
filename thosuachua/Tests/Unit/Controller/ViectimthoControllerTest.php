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
 * Test case for class VOV\Thosuachua\Controller\ViectimthoController.
 *
 */
class ViectimthoControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \VOV\Thosuachua\Controller\ViectimthoController
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = $this->getMock('VOV\\Thosuachua\\Controller\\ViectimthoController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllViectimthosFromRepositoryAndAssignsThemToView() {

		$allViectimthos = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$viectimthoRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\ViectimthoRepository', array('findAll'), array(), '', FALSE);
		$viectimthoRepository->expects($this->once())->method('findAll')->will($this->returnValue($allViectimthos));
		$this->inject($this->subject, 'viectimthoRepository', $viectimthoRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('viectimthos', $allViectimthos);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenViectimthoToView() {
		$viectimtho = new \VOV\Thosuachua\Domain\Model\Viectimtho();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('viectimtho', $viectimtho);

		$this->subject->showAction($viectimtho);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenViectimthoToView() {
		$viectimtho = new \VOV\Thosuachua\Domain\Model\Viectimtho();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newViectimtho', $viectimtho);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($viectimtho);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenViectimthoToViectimthoRepository() {
		$viectimtho = new \VOV\Thosuachua\Domain\Model\Viectimtho();

		$viectimthoRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\ViectimthoRepository', array('add'), array(), '', FALSE);
		$viectimthoRepository->expects($this->once())->method('add')->with($viectimtho);
		$this->inject($this->subject, 'viectimthoRepository', $viectimthoRepository);

		$this->subject->createAction($viectimtho);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenViectimthoToView() {
		$viectimtho = new \VOV\Thosuachua\Domain\Model\Viectimtho();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('viectimtho', $viectimtho);

		$this->subject->editAction($viectimtho);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenViectimthoInViectimthoRepository() {
		$viectimtho = new \VOV\Thosuachua\Domain\Model\Viectimtho();

		$viectimthoRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\ViectimthoRepository', array('update'), array(), '', FALSE);
		$viectimthoRepository->expects($this->once())->method('update')->with($viectimtho);
		$this->inject($this->subject, 'viectimthoRepository', $viectimthoRepository);

		$this->subject->updateAction($viectimtho);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenViectimthoFromViectimthoRepository() {
		$viectimtho = new \VOV\Thosuachua\Domain\Model\Viectimtho();

		$viectimthoRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\ViectimthoRepository', array('remove'), array(), '', FALSE);
		$viectimthoRepository->expects($this->once())->method('remove')->with($viectimtho);
		$this->inject($this->subject, 'viectimthoRepository', $viectimthoRepository);

		$this->subject->deleteAction($viectimtho);
	}
}
