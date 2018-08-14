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
 * Test case for class \VOV\Thosuachua\Domain\Model\Mautin.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class MautinTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \VOV\Thosuachua\Domain\Model\Mautin
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = new \VOV\Thosuachua\Domain\Model\Mautin();
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() {
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getNoidungReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getNoidung()
		);
	}

	/**
	 * @test
	 */
	public function setNoidungForStringSetsNoidung() {
		$this->subject->setNoidung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'noidung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getHinhanhReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getHinhanh()
		);
	}

	/**
	 * @test
	 */
	public function setHinhanhForFileReferenceSetsHinhanh() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setHinhanh($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'hinhanh',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLinkReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLink()
		);
	}

	/**
	 * @test
	 */
	public function setLinkForStringSetsLink() {
		$this->subject->setLink('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'link',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBatdauReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getBatdau()
		);
	}

	/**
	 * @test
	 */
	public function setBatdauForDateTimeSetsBatdau() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setBatdau($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'batdau',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getKetthucReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getKetthuc()
		);
	}

	/**
	 * @test
	 */
	public function setKetthucForDateTimeSetsKetthuc() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setKetthuc($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'ketthuc',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getWwwReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getWww()
		);
	}

	/**
	 * @test
	 */
	public function setWwwForStringSetsWww() {
		$this->subject->setWww('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'www',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getNhomthoReturnsInitialValueForNhomtho() {
		$this->assertEquals(
			NULL,
			$this->subject->getNhomtho()
		);
	}

	/**
	 * @test
	 */
	public function setNhomthoForNhomthoSetsNhomtho() {
		$nhomthoFixture = new \VOV\Thosuachua\Domain\Model\Nhomtho();
		$this->subject->setNhomtho($nhomthoFixture);

		$this->assertAttributeEquals(
			$nhomthoFixture,
			'nhomtho',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getUnterkategorienghanhReturnsInitialValueForUnterkategorienganh() {
		$this->assertEquals(
			NULL,
			$this->subject->getUnterkategorienghanh()
		);
	}

	/**
	 * @test
	 */
	public function setUnterkategorienghanhForUnterkategorienganhSetsUnterkategorienghanh() {
		$unterkategorienghanhFixture = new \VOV\Thosuachua\Domain\Model\Unterkategorienganh();
		$this->subject->setUnterkategorienghanh($unterkategorienghanhFixture);

		$this->assertAttributeEquals(
			$unterkategorienghanhFixture,
			'unterkategorienghanh',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getKategorienghanhReturnsInitialValueForKategorienganh() {
		$this->assertEquals(
			NULL,
			$this->subject->getKategorienghanh()
		);
	}

	/**
	 * @test
	 */
	public function setKategorienghanhForKategorienganhSetsKategorienghanh() {
		$kategorienghanhFixture = new \VOV\Thosuachua\Domain\Model\Kategorienganh();
		$this->subject->setKategorienghanh($kategorienghanhFixture);

		$this->assertAttributeEquals(
			$kategorienghanhFixture,
			'kategorienghanh',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTinhthanhphoReturnsInitialValueForTinhthanhpho() {
		$this->assertEquals(
			NULL,
			$this->subject->getTinhthanhpho()
		);
	}

	/**
	 * @test
	 */
	public function setTinhthanhphoForTinhthanhphoSetsTinhthanhpho() {
		$tinhthanhphoFixture = new \VOV\Thosuachua\Domain\Model\Tinhthanhpho();
		$this->subject->setTinhthanhpho($tinhthanhphoFixture);

		$this->assertAttributeEquals(
			$tinhthanhphoFixture,
			'tinhthanhpho',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getQuanhuyenReturnsInitialValueForQuanhuyen() {
		$this->assertEquals(
			NULL,
			$this->subject->getQuanhuyen()
		);
	}

	/**
	 * @test
	 */
	public function setQuanhuyenForQuanhuyenSetsQuanhuyen() {
		$quanhuyenFixture = new \VOV\Thosuachua\Domain\Model\Quanhuyen();
		$this->subject->setQuanhuyen($quanhuyenFixture);

		$this->assertAttributeEquals(
			$quanhuyenFixture,
			'quanhuyen',
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
}
