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
 * Test case for class VOV\Thosuachua\Controller\QuanhuyenController.
 *
 */
class QuanhuyenControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \VOV\Thosuachua\Controller\QuanhuyenController
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = $this->getMock('VOV\\Thosuachua\\Controller\\QuanhuyenController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllQuanhuyensFromRepositoryAndAssignsThemToView() {

		$allQuanhuyens = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$quanhuyenRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\QuanhuyenRepository', array('findAll'), array(), '', FALSE);
		$quanhuyenRepository->expects($this->once())->method('findAll')->will($this->returnValue($allQuanhuyens));
		$this->inject($this->subject, 'quanhuyenRepository', $quanhuyenRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('quanhuyens', $allQuanhuyens);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenQuanhuyenToView() {
		$quanhuyen = new \VOV\Thosuachua\Domain\Model\Quanhuyen();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('quanhuyen', $quanhuyen);

		$this->subject->showAction($quanhuyen);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenQuanhuyenToView() {
		$quanhuyen = new \VOV\Thosuachua\Domain\Model\Quanhuyen();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newQuanhuyen', $quanhuyen);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($quanhuyen);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenQuanhuyenToQuanhuyenRepository() {
		$quanhuyen = new \VOV\Thosuachua\Domain\Model\Quanhuyen();

		$quanhuyenRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\QuanhuyenRepository', array('add'), array(), '', FALSE);
		$quanhuyenRepository->expects($this->once())->method('add')->with($quanhuyen);
		$this->inject($this->subject, 'quanhuyenRepository', $quanhuyenRepository);

		$this->subject->createAction($quanhuyen);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenQuanhuyenToView() {
		$quanhuyen = new \VOV\Thosuachua\Domain\Model\Quanhuyen();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('quanhuyen', $quanhuyen);

		$this->subject->editAction($quanhuyen);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenQuanhuyenInQuanhuyenRepository() {
		$quanhuyen = new \VOV\Thosuachua\Domain\Model\Quanhuyen();

		$quanhuyenRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\QuanhuyenRepository', array('update'), array(), '', FALSE);
		$quanhuyenRepository->expects($this->once())->method('update')->with($quanhuyen);
		$this->inject($this->subject, 'quanhuyenRepository', $quanhuyenRepository);

		$this->subject->updateAction($quanhuyen);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenQuanhuyenFromQuanhuyenRepository() {
		$quanhuyen = new \VOV\Thosuachua\Domain\Model\Quanhuyen();

		$quanhuyenRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\QuanhuyenRepository', array('remove'), array(), '', FALSE);
		$quanhuyenRepository->expects($this->once())->method('remove')->with($quanhuyen);
		$this->inject($this->subject, 'quanhuyenRepository', $quanhuyenRepository);

		$this->subject->deleteAction($quanhuyen);
	}
}
