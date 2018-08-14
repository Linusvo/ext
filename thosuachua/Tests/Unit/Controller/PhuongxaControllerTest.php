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
 * Test case for class VOV\Thosuachua\Controller\PhuongxaController.
 *
 */
class PhuongxaControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \VOV\Thosuachua\Controller\PhuongxaController
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = $this->getMock('VOV\\Thosuachua\\Controller\\PhuongxaController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllPhuongxasFromRepositoryAndAssignsThemToView() {

		$allPhuongxas = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$phuongxaRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\PhuongxaRepository', array('findAll'), array(), '', FALSE);
		$phuongxaRepository->expects($this->once())->method('findAll')->will($this->returnValue($allPhuongxas));
		$this->inject($this->subject, 'phuongxaRepository', $phuongxaRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('phuongxas', $allPhuongxas);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenPhuongxaToView() {
		$phuongxa = new \VOV\Thosuachua\Domain\Model\Phuongxa();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('phuongxa', $phuongxa);

		$this->subject->showAction($phuongxa);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenPhuongxaToView() {
		$phuongxa = new \VOV\Thosuachua\Domain\Model\Phuongxa();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newPhuongxa', $phuongxa);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($phuongxa);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenPhuongxaToPhuongxaRepository() {
		$phuongxa = new \VOV\Thosuachua\Domain\Model\Phuongxa();

		$phuongxaRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\PhuongxaRepository', array('add'), array(), '', FALSE);
		$phuongxaRepository->expects($this->once())->method('add')->with($phuongxa);
		$this->inject($this->subject, 'phuongxaRepository', $phuongxaRepository);

		$this->subject->createAction($phuongxa);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenPhuongxaToView() {
		$phuongxa = new \VOV\Thosuachua\Domain\Model\Phuongxa();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('phuongxa', $phuongxa);

		$this->subject->editAction($phuongxa);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenPhuongxaInPhuongxaRepository() {
		$phuongxa = new \VOV\Thosuachua\Domain\Model\Phuongxa();

		$phuongxaRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\PhuongxaRepository', array('update'), array(), '', FALSE);
		$phuongxaRepository->expects($this->once())->method('update')->with($phuongxa);
		$this->inject($this->subject, 'phuongxaRepository', $phuongxaRepository);

		$this->subject->updateAction($phuongxa);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenPhuongxaFromPhuongxaRepository() {
		$phuongxa = new \VOV\Thosuachua\Domain\Model\Phuongxa();

		$phuongxaRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\PhuongxaRepository', array('remove'), array(), '', FALSE);
		$phuongxaRepository->expects($this->once())->method('remove')->with($phuongxa);
		$this->inject($this->subject, 'phuongxaRepository', $phuongxaRepository);

		$this->subject->deleteAction($phuongxa);
	}
}
