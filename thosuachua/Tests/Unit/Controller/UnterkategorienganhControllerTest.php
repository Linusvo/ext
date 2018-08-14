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
 * Test case for class VOV\Thosuachua\Controller\UnterkategorienganhController.
 *
 */
class UnterkategorienganhControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \VOV\Thosuachua\Controller\UnterkategorienganhController
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = $this->getMock('VOV\\Thosuachua\\Controller\\UnterkategorienganhController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllUnterkategorienganhsFromRepositoryAndAssignsThemToView() {

		$allUnterkategorienganhs = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$unterkategorienganhRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\UnterkategorienganhRepository', array('findAll'), array(), '', FALSE);
		$unterkategorienganhRepository->expects($this->once())->method('findAll')->will($this->returnValue($allUnterkategorienganhs));
		$this->inject($this->subject, 'unterkategorienganhRepository', $unterkategorienganhRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('unterkategorienganhs', $allUnterkategorienganhs);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenUnterkategorienganhToView() {
		$unterkategorienganh = new \VOV\Thosuachua\Domain\Model\Unterkategorienganh();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('unterkategorienganh', $unterkategorienganh);

		$this->subject->showAction($unterkategorienganh);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenUnterkategorienganhToView() {
		$unterkategorienganh = new \VOV\Thosuachua\Domain\Model\Unterkategorienganh();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newUnterkategorienganh', $unterkategorienganh);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($unterkategorienganh);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenUnterkategorienganhToUnterkategorienganhRepository() {
		$unterkategorienganh = new \VOV\Thosuachua\Domain\Model\Unterkategorienganh();

		$unterkategorienganhRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\UnterkategorienganhRepository', array('add'), array(), '', FALSE);
		$unterkategorienganhRepository->expects($this->once())->method('add')->with($unterkategorienganh);
		$this->inject($this->subject, 'unterkategorienganhRepository', $unterkategorienganhRepository);

		$this->subject->createAction($unterkategorienganh);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenUnterkategorienganhToView() {
		$unterkategorienganh = new \VOV\Thosuachua\Domain\Model\Unterkategorienganh();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('unterkategorienganh', $unterkategorienganh);

		$this->subject->editAction($unterkategorienganh);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenUnterkategorienganhInUnterkategorienganhRepository() {
		$unterkategorienganh = new \VOV\Thosuachua\Domain\Model\Unterkategorienganh();

		$unterkategorienganhRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\UnterkategorienganhRepository', array('update'), array(), '', FALSE);
		$unterkategorienganhRepository->expects($this->once())->method('update')->with($unterkategorienganh);
		$this->inject($this->subject, 'unterkategorienganhRepository', $unterkategorienganhRepository);

		$this->subject->updateAction($unterkategorienganh);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenUnterkategorienganhFromUnterkategorienganhRepository() {
		$unterkategorienganh = new \VOV\Thosuachua\Domain\Model\Unterkategorienganh();

		$unterkategorienganhRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\UnterkategorienganhRepository', array('remove'), array(), '', FALSE);
		$unterkategorienganhRepository->expects($this->once())->method('remove')->with($unterkategorienganh);
		$this->inject($this->subject, 'unterkategorienganhRepository', $unterkategorienganhRepository);

		$this->subject->deleteAction($unterkategorienganh);
	}
}
