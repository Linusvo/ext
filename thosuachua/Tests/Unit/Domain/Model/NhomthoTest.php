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
 * Test case for class \VOV\Thosuachua\Domain\Model\Nhomtho.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class NhomthoTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \VOV\Thosuachua\Domain\Model\Nhomtho
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = new \VOV\Thosuachua\Domain\Model\Nhomtho();
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
	public function getMieutaReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMieuta()
		);
	}

	/**
	 * @test
	 */
	public function setMieutaForStringSetsMieuta() {
		$this->subject->setMieuta('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'mieuta',
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
	public function getSonhaReturnsInitialValueForInt() {	}

	/**
	 * @test
	 */
	public function setSonhaForIntSetsSonha() {	}

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
	public function getDienthoaiReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDienthoai()
		);
	}

	/**
	 * @test
	 */
	public function setDienthoaiForStringSetsDienthoai() {
		$this->subject->setDienthoai('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'dienthoai',
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
	public function getEmaillienheReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getEmaillienhe()
		);
	}

	/**
	 * @test
	 */
	public function setEmaillienheForStringSetsEmaillienhe() {
		$this->subject->setEmaillienhe('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'emaillienhe',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTrangwebReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTrangweb()
		);
	}

	/**
	 * @test
	 */
	public function setTrangwebForStringSetsTrangweb() {
		$this->subject->setTrangweb('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'trangweb',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getKategorienghanhReturnsInitialValueForKategorienganh() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getKategorienghanh()
		);
	}

	/**
	 * @test
	 */
	public function setKategorienghanhForObjectStorageContainingKategorienganhSetsKategorienghanh() {
		$kategorienghanh = new \VOV\Thosuachua\Domain\Model\Kategorienganh();
		$objectStorageHoldingExactlyOneKategorienghanh = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneKategorienghanh->attach($kategorienghanh);
		$this->subject->setKategorienghanh($objectStorageHoldingExactlyOneKategorienghanh);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneKategorienghanh,
			'kategorienghanh',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addKategorienghanhToObjectStorageHoldingKategorienghanh() {
		$kategorienghanh = new \VOV\Thosuachua\Domain\Model\Kategorienganh();
		$kategorienghanhObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$kategorienghanhObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($kategorienghanh));
		$this->inject($this->subject, 'kategorienghanh', $kategorienghanhObjectStorageMock);

		$this->subject->addKategorienghanh($kategorienghanh);
	}

	/**
	 * @test
	 */
	public function removeKategorienghanhFromObjectStorageHoldingKategorienghanh() {
		$kategorienghanh = new \VOV\Thosuachua\Domain\Model\Kategorienganh();
		$kategorienghanhObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$kategorienghanhObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($kategorienghanh));
		$this->inject($this->subject, 'kategorienghanh', $kategorienghanhObjectStorageMock);

		$this->subject->removeKategorienghanh($kategorienghanh);

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
	public function getPhuongxaReturnsInitialValueForPhuongxa() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getPhuongxa()
		);
	}

	/**
	 * @test
	 */
	public function setPhuongxaForObjectStorageContainingPhuongxaSetsPhuongxa() {
		$phuongxa = new \VOV\Thosuachua\Domain\Model\Phuongxa();
		$objectStorageHoldingExactlyOnePhuongxa = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOnePhuongxa->attach($phuongxa);
		$this->subject->setPhuongxa($objectStorageHoldingExactlyOnePhuongxa);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOnePhuongxa,
			'phuongxa',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addPhuongxaToObjectStorageHoldingPhuongxa() {
		$phuongxa = new \VOV\Thosuachua\Domain\Model\Phuongxa();
		$phuongxaObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$phuongxaObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($phuongxa));
		$this->inject($this->subject, 'phuongxa', $phuongxaObjectStorageMock);

		$this->subject->addPhuongxa($phuongxa);
	}

	/**
	 * @test
	 */
	public function removePhuongxaFromObjectStorageHoldingPhuongxa() {
		$phuongxa = new \VOV\Thosuachua\Domain\Model\Phuongxa();
		$phuongxaObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$phuongxaObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($phuongxa));
		$this->inject($this->subject, 'phuongxa', $phuongxaObjectStorageMock);

		$this->subject->removePhuongxa($phuongxa);

	}

	/**
	 * @test
	 */
	public function getDuongphoReturnsInitialValueForDuongpho() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getDuongpho()
		);
	}

	/**
	 * @test
	 */
	public function setDuongphoForObjectStorageContainingDuongphoSetsDuongpho() {
		$duongpho = new \VOV\Thosuachua\Domain\Model\Duongpho();
		$objectStorageHoldingExactlyOneDuongpho = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneDuongpho->attach($duongpho);
		$this->subject->setDuongpho($objectStorageHoldingExactlyOneDuongpho);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneDuongpho,
			'duongpho',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addDuongphoToObjectStorageHoldingDuongpho() {
		$duongpho = new \VOV\Thosuachua\Domain\Model\Duongpho();
		$duongphoObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$duongphoObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($duongpho));
		$this->inject($this->subject, 'duongpho', $duongphoObjectStorageMock);

		$this->subject->addDuongpho($duongpho);
	}

	/**
	 * @test
	 */
	public function removeDuongphoFromObjectStorageHoldingDuongpho() {
		$duongpho = new \VOV\Thosuachua\Domain\Model\Duongpho();
		$duongphoObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$duongphoObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($duongpho));
		$this->inject($this->subject, 'duongpho', $duongphoObjectStorageMock);

		$this->subject->removeDuongpho($duongpho);

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

	/**
	 * @test
	 */
	public function getMautinReturnsInitialValueForMautin() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getMautin()
		);
	}

	/**
	 * @test
	 */
	public function setMautinForObjectStorageContainingMautinSetsMautin() {
		$mautin = new \VOV\Thosuachua\Domain\Model\Mautin();
		$objectStorageHoldingExactlyOneMautin = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneMautin->attach($mautin);
		$this->subject->setMautin($objectStorageHoldingExactlyOneMautin);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneMautin,
			'mautin',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addMautinToObjectStorageHoldingMautin() {
		$mautin = new \VOV\Thosuachua\Domain\Model\Mautin();
		$mautinObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$mautinObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($mautin));
		$this->inject($this->subject, 'mautin', $mautinObjectStorageMock);

		$this->subject->addMautin($mautin);
	}

	/**
	 * @test
	 */
	public function removeMautinFromObjectStorageHoldingMautin() {
		$mautin = new \VOV\Thosuachua\Domain\Model\Mautin();
		$mautinObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$mautinObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($mautin));
		$this->inject($this->subject, 'mautin', $mautinObjectStorageMock);

		$this->subject->removeMautin($mautin);

	}

	/**
	 * @test
	 */
	public function getThotimviecReturnsInitialValueForThotimviec() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getThotimviec()
		);
	}

	/**
	 * @test
	 */
	public function setThotimviecForObjectStorageContainingThotimviecSetsThotimviec() {
		$thotimviec = new \VOV\Thosuachua\Domain\Model\Thotimviec();
		$objectStorageHoldingExactlyOneThotimviec = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneThotimviec->attach($thotimviec);
		$this->subject->setThotimviec($objectStorageHoldingExactlyOneThotimviec);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneThotimviec,
			'thotimviec',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addThotimviecToObjectStorageHoldingThotimviec() {
		$thotimviec = new \VOV\Thosuachua\Domain\Model\Thotimviec();
		$thotimviecObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$thotimviecObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($thotimviec));
		$this->inject($this->subject, 'thotimviec', $thotimviecObjectStorageMock);

		$this->subject->addThotimviec($thotimviec);
	}

	/**
	 * @test
	 */
	public function removeThotimviecFromObjectStorageHoldingThotimviec() {
		$thotimviec = new \VOV\Thosuachua\Domain\Model\Thotimviec();
		$thotimviecObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$thotimviecObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($thotimviec));
		$this->inject($this->subject, 'thotimviec', $thotimviecObjectStorageMock);

		$this->subject->removeThotimviec($thotimviec);

	}

	/**
	 * @test
	 */
	public function getViectimthoReturnsInitialValueForViectimtho() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getViectimtho()
		);
	}

	/**
	 * @test
	 */
	public function setViectimthoForObjectStorageContainingViectimthoSetsViectimtho() {
		$viectimtho = new \VOV\Thosuachua\Domain\Model\Viectimtho();
		$objectStorageHoldingExactlyOneViectimtho = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneViectimtho->attach($viectimtho);
		$this->subject->setViectimtho($objectStorageHoldingExactlyOneViectimtho);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneViectimtho,
			'viectimtho',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addViectimthoToObjectStorageHoldingViectimtho() {
		$viectimtho = new \VOV\Thosuachua\Domain\Model\Viectimtho();
		$viectimthoObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$viectimthoObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($viectimtho));
		$this->inject($this->subject, 'viectimtho', $viectimthoObjectStorageMock);

		$this->subject->addViectimtho($viectimtho);
	}

	/**
	 * @test
	 */
	public function removeViectimthoFromObjectStorageHoldingViectimtho() {
		$viectimtho = new \VOV\Thosuachua\Domain\Model\Viectimtho();
		$viectimthoObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$viectimthoObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($viectimtho));
		$this->inject($this->subject, 'viectimtho', $viectimthoObjectStorageMock);

		$this->subject->removeViectimtho($viectimtho);

	}

	/**
	 * @test
	 */
	public function getTintuyendungReturnsInitialValueForTintuyendung() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getTintuyendung()
		);
	}

	/**
	 * @test
	 */
	public function setTintuyendungForObjectStorageContainingTintuyendungSetsTintuyendung() {
		$tintuyendung = new \VOV\Thosuachua\Domain\Model\Tintuyendung();
		$objectStorageHoldingExactlyOneTintuyendung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneTintuyendung->attach($tintuyendung);
		$this->subject->setTintuyendung($objectStorageHoldingExactlyOneTintuyendung);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneTintuyendung,
			'tintuyendung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addTintuyendungToObjectStorageHoldingTintuyendung() {
		$tintuyendung = new \VOV\Thosuachua\Domain\Model\Tintuyendung();
		$tintuyendungObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$tintuyendungObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($tintuyendung));
		$this->inject($this->subject, 'tintuyendung', $tintuyendungObjectStorageMock);

		$this->subject->addTintuyendung($tintuyendung);
	}

	/**
	 * @test
	 */
	public function removeTintuyendungFromObjectStorageHoldingTintuyendung() {
		$tintuyendung = new \VOV\Thosuachua\Domain\Model\Tintuyendung();
		$tintuyendungObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$tintuyendungObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($tintuyendung));
		$this->inject($this->subject, 'tintuyendung', $tintuyendungObjectStorageMock);

		$this->subject->removeTintuyendung($tintuyendung);

	}

	/**
	 * @test
	 */
	public function getTintimviecReturnsInitialValueForTintimviec() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getTintimviec()
		);
	}

	/**
	 * @test
	 */
	public function setTintimviecForObjectStorageContainingTintimviecSetsTintimviec() {
		$tintimviec = new \VOV\Thosuachua\Domain\Model\Tintimviec();
		$objectStorageHoldingExactlyOneTintimviec = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneTintimviec->attach($tintimviec);
		$this->subject->setTintimviec($objectStorageHoldingExactlyOneTintimviec);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneTintimviec,
			'tintimviec',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addTintimviecToObjectStorageHoldingTintimviec() {
		$tintimviec = new \VOV\Thosuachua\Domain\Model\Tintimviec();
		$tintimviecObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$tintimviecObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($tintimviec));
		$this->inject($this->subject, 'tintimviec', $tintimviecObjectStorageMock);

		$this->subject->addTintimviec($tintimviec);
	}

	/**
	 * @test
	 */
	public function removeTintimviecFromObjectStorageHoldingTintimviec() {
		$tintimviec = new \VOV\Thosuachua\Domain\Model\Tintimviec();
		$tintimviecObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$tintimviecObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($tintimviec));
		$this->inject($this->subject, 'tintimviec', $tintimviecObjectStorageMock);

		$this->subject->removeTintimviec($tintimviec);

	}
}
