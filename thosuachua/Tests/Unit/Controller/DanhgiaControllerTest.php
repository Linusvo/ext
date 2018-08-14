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
 * Test case for class VOV\Thosuachua\Controller\DanhgiaController.
 *
 */
class DanhgiaControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \VOV\Thosuachua\Controller\DanhgiaController
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = $this->getMock('VOV\\Thosuachua\\Controller\\DanhgiaController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllDanhgiasFromRepositoryAndAssignsThemToView() {

		$allDanhgias = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$danhgiaRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\DanhgiaRepository', array('findAll'), array(), '', FALSE);
		$danhgiaRepository->expects($this->once())->method('findAll')->will($this->returnValue($allDanhgias));
		$this->inject($this->subject, 'danhgiaRepository', $danhgiaRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('danhgias', $allDanhgias);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenDanhgiaToView() {
		$danhgia = new \VOV\Thosuachua\Domain\Model\Danhgia();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('danhgia', $danhgia);

		$this->subject->showAction($danhgia);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenDanhgiaToView() {
		$danhgia = new \VOV\Thosuachua\Domain\Model\Danhgia();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newDanhgia', $danhgia);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($danhgia);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenDanhgiaToDanhgiaRepository() {
		$danhgia = new \VOV\Thosuachua\Domain\Model\Danhgia();

		$danhgiaRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\DanhgiaRepository', array('add'), array(), '', FALSE);
		$danhgiaRepository->expects($this->once())->method('add')->with($danhgia);
		$this->inject($this->subject, 'danhgiaRepository', $danhgiaRepository);

		$this->subject->createAction($danhgia);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenDanhgiaToView() {
		$danhgia = new \VOV\Thosuachua\Domain\Model\Danhgia();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('danhgia', $danhgia);

		$this->subject->editAction($danhgia);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenDanhgiaInDanhgiaRepository() {
		$danhgia = new \VOV\Thosuachua\Domain\Model\Danhgia();

		$danhgiaRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\DanhgiaRepository', array('update'), array(), '', FALSE);
		$danhgiaRepository->expects($this->once())->method('update')->with($danhgia);
		$this->inject($this->subject, 'danhgiaRepository', $danhgiaRepository);

		$this->subject->updateAction($danhgia);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenDanhgiaFromDanhgiaRepository() {
		$danhgia = new \VOV\Thosuachua\Domain\Model\Danhgia();

		$danhgiaRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\DanhgiaRepository', array('remove'), array(), '', FALSE);
		$danhgiaRepository->expects($this->once())->method('remove')->with($danhgia);
		$this->inject($this->subject, 'danhgiaRepository', $danhgiaRepository);

		$this->subject->deleteAction($danhgia);
	}
}
