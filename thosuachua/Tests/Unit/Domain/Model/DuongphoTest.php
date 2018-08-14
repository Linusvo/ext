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
 * Test case for class \VOV\Thosuachua\Domain\Model\Duongpho.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class DuongphoTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \VOV\Thosuachua\Domain\Model\Duongpho
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = new \VOV\Thosuachua\Domain\Model\Duongpho();
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
	public function getSonhaReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSonha()
		);
	}

	/**
	 * @test
	 */
	public function setSonhaForStringSetsSonha() {
		$this->subject->setSonha('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'sonha',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPhuongxaReturnsInitialValueForPhuongxa() {
		$this->assertEquals(
			NULL,
			$this->subject->getPhuongxa()
		);
	}

	/**
	 * @test
	 */
	public function setPhuongxaForPhuongxaSetsPhuongxa() {
		$phuongxaFixture = new \VOV\Thosuachua\Domain\Model\Phuongxa();
		$this->subject->setPhuongxa($phuongxaFixture);

		$this->assertAttributeEquals(
			$phuongxaFixture,
			'phuongxa',
			$this->subject
		);
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
