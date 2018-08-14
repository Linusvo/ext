<?php

namespace VOV\Thosuachua\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 
 *
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
 * Test case for class \VOV\Thosuachua\Domain\Model\Tinhthanhpho.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class TinhthanhphoTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \VOV\Thosuachua\Domain\Model\Tinhthanhpho
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = new \VOV\Thosuachua\Domain\Model\Tinhthanhpho();
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTenReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTen()
		);
	}

	/**
	 * @test
	 */
	public function setTenForStringSetsTen() {
		$this->subject->setTen('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'ten',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMasoReturnsInitialValueForInt() {	}

	/**
	 * @test
	 */
	public function setMasoForIntSetsMaso() {	}

	/**
	 * @test
	 */
	public function getMapReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMap()
		);
	}

	/**
	 * @test
	 */
	public function setMapForStringSetsMap() {
		$this->subject->setMap('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'map',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getQuanhuyenReturnsInitialValueForQuanhuyen() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getQuanhuyen()
		);
	}

	/**
	 * @test
	 */
	public function setQuanhuyenForObjectStorageContainingQuanhuyenSetsQuanhuyen() {
		$quanhuyen = new \VOV\Thosuachua\Domain\Model\Quanhuyen();
		$objectStorageHoldingExactlyOneQuanhuyen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneQuanhuyen->attach($quanhuyen);
		$this->subject->setQuanhuyen($objectStorageHoldingExactlyOneQuanhuyen);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneQuanhuyen,
			'quanhuyen',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addQuanhuyenToObjectStorageHoldingQuanhuyen() {
		$quanhuyen = new \VOV\Thosuachua\Domain\Model\Quanhuyen();
		$quanhuyenObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$quanhuyenObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($quanhuyen));
		$this->inject($this->subject, 'quanhuyen', $quanhuyenObjectStorageMock);

		$this->subject->addQuanhuyen($quanhuyen);
	}

	/**
	 * @test
	 */
	public function removeQuanhuyenFromObjectStorageHoldingQuanhuyen() {
		$quanhuyen = new \VOV\Thosuachua\Domain\Model\Quanhuyen();
		$quanhuyenObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$quanhuyenObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($quanhuyen));
		$this->inject($this->subject, 'quanhuyen', $quanhuyenObjectStorageMock);

		$this->subject->removeQuanhuyen($quanhuyen);

	}

	/**
	 * @test
	 */
	public function getNhomthoReturnsInitialValueForNhomtho() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getNhomtho()
		);
	}

	/**
	 * @test
	 */
	public function setNhomthoForObjectStorageContainingNhomthoSetsNhomtho() {
		$nhomtho = new \VOV\Thosuachua\Domain\Model\Nhomtho();
		$objectStorageHoldingExactlyOneNhomtho = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneNhomtho->attach($nhomtho);
		$this->subject->setNhomtho($objectStorageHoldingExactlyOneNhomtho);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneNhomtho,
			'nhomtho',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addNhomthoToObjectStorageHoldingNhomtho() {
		$nhomtho = new \VOV\Thosuachua\Domain\Model\Nhomtho();
		$nhomthoObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$nhomthoObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($nhomtho));
		$this->inject($this->subject, 'nhomtho', $nhomthoObjectStorageMock);

		$this->subject->addNhomtho($nhomtho);
	}

	/**
	 * @test
	 */
	public function removeNhomthoFromObjectStorageHoldingNhomtho() {
		$nhomtho = new \VOV\Thosuachua\Domain\Model\Nhomtho();
		$nhomthoObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$nhomthoObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($nhomtho));
		$this->inject($this->subject, 'nhomtho', $nhomthoObjectStorageMock);

		$this->subject->removeNhomtho($nhomtho);

	}
}
