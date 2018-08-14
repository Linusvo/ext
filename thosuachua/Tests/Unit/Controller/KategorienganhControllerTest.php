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
 * Test case for class VOV\Thosuachua\Controller\KategorienganhController.
 *
 */
class KategorienganhControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \VOV\Thosuachua\Controller\KategorienganhController
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = $this->getMock('VOV\\Thosuachua\\Controller\\KategorienganhController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllKategorienganhsFromRepositoryAndAssignsThemToView() {

		$allKategorienganhs = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$kategorienganhRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\KategorienganhRepository', array('findAll'), array(), '', FALSE);
		$kategorienganhRepository->expects($this->once())->method('findAll')->will($this->returnValue($allKategorienganhs));
		$this->inject($this->subject, 'kategorienganhRepository', $kategorienganhRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('kategorienganhs', $allKategorienganhs);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenKategorienganhToView() {
		$kategorienganh = new \VOV\Thosuachua\Domain\Model\Kategorienganh();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('kategorienganh', $kategorienganh);

		$this->subject->showAction($kategorienganh);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenKategorienganhToView() {
		$kategorienganh = new \VOV\Thosuachua\Domain\Model\Kategorienganh();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newKategorienganh', $kategorienganh);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($kategorienganh);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenKategorienganhToKategorienganhRepository() {
		$kategorienganh = new \VOV\Thosuachua\Domain\Model\Kategorienganh();

		$kategorienganhRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\KategorienganhRepository', array('add'), array(), '', FALSE);
		$kategorienganhRepository->expects($this->once())->method('add')->with($kategorienganh);
		$this->inject($this->subject, 'kategorienganhRepository', $kategorienganhRepository);

		$this->subject->createAction($kategorienganh);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenKategorienganhToView() {
		$kategorienganh = new \VOV\Thosuachua\Domain\Model\Kategorienganh();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('kategorienganh', $kategorienganh);

		$this->subject->editAction($kategorienganh);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenKategorienganhInKategorienganhRepository() {
		$kategorienganh = new \VOV\Thosuachua\Domain\Model\Kategorienganh();

		$kategorienganhRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\KategorienganhRepository', array('update'), array(), '', FALSE);
		$kategorienganhRepository->expects($this->once())->method('update')->with($kategorienganh);
		$this->inject($this->subject, 'kategorienganhRepository', $kategorienganhRepository);

		$this->subject->updateAction($kategorienganh);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenKategorienganhFromKategorienganhRepository() {
		$kategorienganh = new \VOV\Thosuachua\Domain\Model\Kategorienganh();

		$kategorienganhRepository = $this->getMock('VOV\\Thosuachua\\Domain\\Repository\\KategorienganhRepository', array('remove'), array(), '', FALSE);
		$kategorienganhRepository->expects($this->once())->method('remove')->with($kategorienganh);
		$this->inject($this->subject, 'kategorienganhRepository', $kategorienganhRepository);

		$this->subject->deleteAction($kategorienganh);
	}
}
