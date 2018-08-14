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
 * Test case for class \VOV\Thosuachua\Domain\Model\Viectimtho.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class ViectimthoTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \VOV\Thosuachua\Domain\Model\Viectimtho
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = new \VOV\Thosuachua\Domain\Model\Viectimtho();
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
	public function getTailieuReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getTailieu()
		);
	}

	/**
	 * @test
	 */
	public function setTailieuForFileReferenceSetsTailieu() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setTailieu($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'tailieu',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTennguoitimReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTennguoitim()
		);
	}

	/**
	 * @test
	 */
	public function setTennguoitimForStringSetsTennguoitim() {
		$this->subject->setTennguoitim('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'tennguoitim',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMieutacongviecReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMieutacongviec()
		);
	}

	/**
	 * @test
	 */
	public function setMieutacongviecForStringSetsMieutacongviec() {
		$this->subject->setMieutacongviec('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'mieutacongviec',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDiachiReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDiachi()
		);
	}

	/**
	 * @test
	 */
	public function setDiachiForStringSetsDiachi() {
		$this->subject->setDiachi('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'diachi',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEmailReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getEmail()
		);
	}

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail() {
		$this->subject->setEmail('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'email',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPhoneReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPhone()
		);
	}

	/**
	 * @test
	 */
	public function setPhoneForStringSetsPhone() {
		$this->subject->setPhone('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'phone',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFaxReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getFax()
		);
	}

	/**
	 * @test
	 */
	public function setFaxForStringSetsFax() {
		$this->subject->setFax('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'fax',
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
	public function getLienheReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLienhe()
		);
	}

	/**
	 * @test
	 */
	public function setLienheForStringSetsLienhe() {
		$this->subject->setLienhe('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'lienhe',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBatdauReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getBatdau()
		);
	}

	/**
	 * @test
	 */
	public function setBatdauForStringSetsBatdau() {
		$this->subject->setBatdau('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'batdau',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getKetthucReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getKetthuc()
		);
	}

	/**
	 * @test
	 */
	public function setKetthucForStringSetsKetthuc() {
		$this->subject->setKetthuc('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'ketthuc',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAdminstratorReturnsInitialValueForNhomtho() {
		$this->assertEquals(
			NULL,
			$this->subject->getAdminstrator()
		);
	}

	/**
	 * @test
	 */
	public function setAdminstratorForNhomthoSetsAdminstrator() {
		$adminstratorFixture = new \VOV\Thosuachua\Domain\Model\Nhomtho();
		$this->subject->setAdminstrator($adminstratorFixture);

		$this->assertAttributeEquals(
			$adminstratorFixture,
			'adminstrator',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getKategorienganhReturnsInitialValueForKategorienganh() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getKategorienganh()
		);
	}

	/**
	 * @test
	 */
	public function setKategorienganhForObjectStorageContainingKategorienganhSetsKategorienganh() {
		$kategorienganh = new \VOV\Thosuachua\Domain\Model\Kategorienganh();
		$objectStorageHoldingExactlyOneKategorienganh = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneKategorienganh->attach($kategorienganh);
		$this->subject->setKategorienganh($objectStorageHoldingExactlyOneKategorienganh);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneKategorienganh,
			'kategorienganh',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addKategorienganhToObjectStorageHoldingKategorienganh() {
		$kategorienganh = new \VOV\Thosuachua\Domain\Model\Kategorienganh();
		$kategorienganhObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$kategorienganhObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($kategorienganh));
		$this->inject($this->subject, 'kategorienganh', $kategorienganhObjectStorageMock);

		$this->subject->addKategorienganh($kategorienganh);
	}

	/**
	 * @test
	 */
	public function removeKategorienganhFromObjectStorageHoldingKategorienganh() {
		$kategorienganh = new \VOV\Thosuachua\Domain\Model\Kategorienganh();
		$kategorienganhObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$kategorienganhObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($kategorienganh));
		$this->inject($this->subject, 'kategorienganh', $kategorienganhObjectStorageMock);

		$this->subject->removeKategorienganh($kategorienganh);

	}

	/**
	 * @test
	 */
	public function getUnterkategorienganhReturnsInitialValueForUnterkategorienganh() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getUnterkategorienganh()
		);
	}

	/**
	 * @test
	 */
	public function setUnterkategorienganhForObjectStorageContainingUnterkategorienganhSetsUnterkategorienganh() {
		$unterkategorienganh = new \VOV\Thosuachua\Domain\Model\Unterkategorienganh();
		$objectStorageHoldingExactlyOneUnterkategorienganh = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneUnterkategorienganh->attach($unterkategorienganh);
		$this->subject->setUnterkategorienganh($objectStorageHoldingExactlyOneUnterkategorienganh);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneUnterkategorienganh,
			'unterkategorienganh',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addUnterkategorienganhToObjectStorageHoldingUnterkategorienganh() {
		$unterkategorienganh = new \VOV\Thosuachua\Domain\Model\Unterkategorienganh();
		$unterkategorienganhObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$unterkategorienganhObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($unterkategorienganh));
		$this->inject($this->subject, 'unterkategorienganh', $unterkategorienganhObjectStorageMock);

		$this->subject->addUnterkategorienganh($unterkategorienganh);
	}

	/**
	 * @test
	 */
	public function removeUnterkategorienganhFromObjectStorageHoldingUnterkategorienganh() {
		$unterkategorienganh = new \VOV\Thosuachua\Domain\Model\Unterkategorienganh();
		$unterkategorienganhObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$unterkategorienganhObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($unterkategorienganh));
		$this->inject($this->subject, 'unterkategorienganh', $unterkategorienganhObjectStorageMock);

		$this->subject->removeUnterkategorienganh($unterkategorienganh);

	}

	/**
	 * @test
	 */
	public function getTinhthanhphoReturnsInitialValueForTinhthanhpho() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getTinhthanhpho()
		);
	}

	/**
	 * @test
	 */
	public function setTinhthanhphoForObjectStorageContainingTinhthanhphoSetsTinhthanhpho() {
		$tinhthanhpho = new \VOV\Thosuachua\Domain\Model\Tinhthanhpho();
		$objectStorageHoldingExactlyOneTinhthanhpho = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneTinhthanhpho->attach($tinhthanhpho);
		$this->subject->setTinhthanhpho($objectStorageHoldingExactlyOneTinhthanhpho);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneTinhthanhpho,
			'tinhthanhpho',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addTinhthanhphoToObjectStorageHoldingTinhthanhpho() {
		$tinhthanhpho = new \VOV\Thosuachua\Domain\Model\Tinhthanhpho();
		$tinhthanhphoObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$tinhthanhphoObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($tinhthanhpho));
		$this->inject($this->subject, 'tinhthanhpho', $tinhthanhphoObjectStorageMock);

		$this->subject->addTinhthanhpho($tinhthanhpho);
	}

	/**
	 * @test
	 */
	public function removeTinhthanhphoFromObjectStorageHoldingTinhthanhpho() {
		$tinhthanhpho = new \VOV\Thosuachua\Domain\Model\Tinhthanhpho();
		$tinhthanhphoObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$tinhthanhphoObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($tinhthanhpho));
		$this->inject($this->subject, 'tinhthanhpho', $tinhthanhphoObjectStorageMock);

		$this->subject->removeTinhthanhpho($tinhthanhpho);

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
	public function getDanhgiaReturnsInitialValueForDanhgia() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getDanhgia()
		);
	}

	/**
	 * @test
	 */
	public function setDanhgiaForObjectStorageContainingDanhgiaSetsDanhgia() {
		$danhgium = new \VOV\Thosuachua\Domain\Model\Danhgia();
		$objectStorageHoldingExactlyOneDanhgia = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneDanhgia->attach($danhgium);
		$this->subject->setDanhgia($objectStorageHoldingExactlyOneDanhgia);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneDanhgia,
			'danhgia',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addDanhgiumToObjectStorageHoldingDanhgia() {
		$danhgium = new \VOV\Thosuachua\Domain\Model\Danhgia();
		$danhgiaObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$danhgiaObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($danhgium));
		$this->inject($this->subject, 'danhgia', $danhgiaObjectStorageMock);

		$this->subject->addDanhgium($danhgium);
	}

	/**
	 * @test
	 */
	public function removeDanhgiumFromObjectStorageHoldingDanhgia() {
		$danhgium = new \VOV\Thosuachua\Domain\Model\Danhgia();
		$danhgiaObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$danhgiaObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($danhgium));
		$this->inject($this->subject, 'danhgia', $danhgiaObjectStorageMock);

		$this->subject->removeDanhgium($danhgium);

	}
}
