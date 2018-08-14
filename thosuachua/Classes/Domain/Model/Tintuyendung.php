<?php
namespace VOV\Thosuachua\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * Tintuyendung
 */
class Tintuyendung extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {
        /**
         * crdate
         *
         * @var \DateTime
         */
        protected $crdate = NULL;
        /**
         * crdate
         *
         * @var int
         */
        protected $hidden1;
	/**
	 * title
	 * 
	 * @var string
	 */
	protected $title = '';

	/**
	 * noidung
	 * 
	 * @var string
	 */
	protected $noidung = '';

	/**
	 * hinhanh
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $hinhanh = NULL;

	/**
	 * tailieu
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $tailieu = NULL;

	/**
	 * tennhatuyendung
	 * 
	 * @var string
	 */
	protected $tennhatuyendung = '';

	/**
	 * mieutacty
	 * 
	 * @var string
	 */
	protected $mieutacty = '';

	/**
	 * diachi
	 * 
	 * @var string
	 */
	protected $diachi = '';

	/**
	 * email
	 * 
	 * @var string
	 */
	protected $email = '';

	/**
	 * phone
	 * 
	 * @var string
	 */
	protected $phone = '';

	/**
	 * fax
	 * 
	 * @var string
	 */
	protected $fax = '';

	/**
	 * www
	 * 
	 * @var string
	 */
	protected $www = '';

	/**
	 * lienhe
	 * 
	 * @var string
	 */
	protected $lienhe = '';

	/**
	 * batdau
	 * 
	 * @var string
	 */
	protected $batdau = '';

	/**
	 * ketthuc
	 * 
	 * @var string
	 */
	protected $ketthuc = '';

	/**
	 * adminstrator
	 * 
	 * @var \VOV\Thosuachua\Domain\Model\Nhomtho
	 */
	protected $adminstrator = NULL;

	/**
	 * tinhthanhpho
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Tinhthanhpho>
     * @lazy
	 */
	protected $tinhthanhpho = NULL;

	/**
	 * quanhuyen
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Quanhuyen>
     * @lazy
	 */
	protected $quanhuyen = NULL;

	/**
	 * kategorienganh
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Kategorienganh>
     * @lazy
	 */
	protected $kategorienganh = NULL;

	/**
	 * unterkategorienganh
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Unterkategorienganh>
     * @lazy
	 */
	protected $unterkategorienganh = NULL;

	/**
	 * danhgia
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Danhgia>
     * @lazy
	 * @cascade remove
	 */
	protected $danhgia = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 * 
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->tinhthanhpho = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->quanhuyen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->kategorienganh = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->unterkategorienganh = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->danhgia = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}
         /**
     * Get creation date
     *
     * @return integer
     */
    public function getHidden1() {
        return $this->hidden1;
    }

    /**
     *
     * @param integer $hidden1
     * @return void
     */
    public function setHidden1($hidden1) {
        $this->hidden1 = $hidden1;
    }
 /**
     * Get creation date
     *
     * @return integer
     */
    public function getCrdate() {
        return $this->crdate;
    }

    /**
     * Set creation date
     *
     * @param integer $crdate
     * @return void
     */
    public function setCrdate($crdate) {
        $this->crdate = $crdate;
    }
	/**
	 * Returns the title
	 * 
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 * 
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the noidung
	 * 
	 * @return string $noidung
	 */
	public function getNoidung() {
		return $this->noidung;
	}

	/**
	 * Sets the noidung
	 * 
	 * @param string $noidung
	 * @return void
	 */
	public function setNoidung($noidung) {
		$this->noidung = $noidung;
	}

	/**
	 * Returns the hinhanh
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $hinhanh
	 */
	public function getHinhanh() {
		return $this->hinhanh;
	}

	/**
	 * Sets the hinhanh
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $hinhanh
	 * @return void
	 */
	public function setHinhanh(\TYPO3\CMS\Extbase\Domain\Model\FileReference $hinhanh) {
		$this->hinhanh = $hinhanh;
	}

	/**
	 * Returns the tailieu
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $tailieu
	 */
	public function getTailieu() {
		return $this->tailieu;
	}

	/**
	 * Sets the tailieu
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $tailieu
	 * @return void
	 */
	public function setTailieu(\TYPO3\CMS\Extbase\Domain\Model\FileReference $tailieu) {
		$this->tailieu = $tailieu;
	}

	/**
	 * Returns the tennhatuyendung
	 * 
	 * @return string $tennhatuyendung
	 */
	public function getTennhatuyendung() {
		return $this->tennhatuyendung;
	}

	/**
	 * Sets the tennhatuyendung
	 * 
	 * @param string $tennhatuyendung
	 * @return void
	 */
	public function setTennhatuyendung($tennhatuyendung) {
		$this->tennhatuyendung = $tennhatuyendung;
	}

	/**
	 * Returns the mieutacty
	 * 
	 * @return string $mieutacty
	 */
	public function getMieutacty() {
		return $this->mieutacty;
	}

	/**
	 * Sets the mieutacty
	 * 
	 * @param string $mieutacty
	 * @return void
	 */
	public function setMieutacty($mieutacty) {
		$this->mieutacty = $mieutacty;
	}

	/**
	 * Returns the diachi
	 * 
	 * @return string $diachi
	 */
	public function getDiachi() {
		return $this->diachi;
	}

	/**
	 * Sets the diachi
	 * 
	 * @param string $diachi
	 * @return void
	 */
	public function setDiachi($diachi) {
		$this->diachi = $diachi;
	}

	/**
	 * Returns the email
	 * 
	 * @return string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the email
	 * 
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Returns the phone
	 * 
	 * @return string $phone
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * Sets the phone
	 * 
	 * @param string $phone
	 * @return void
	 */
	public function setPhone($phone) {
		$this->phone = $phone;
	}

	/**
	 * Returns the fax
	 * 
	 * @return string $fax
	 */
	public function getFax() {
		return $this->fax;
	}

	/**
	 * Sets the fax
	 * 
	 * @param string $fax
	 * @return void
	 */
	public function setFax($fax) {
		$this->fax = $fax;
	}

	/**
	 * Returns the www
	 * 
	 * @return string $www
	 */
	public function getWww() {
		return $this->www;
	}

	/**
	 * Sets the www
	 * 
	 * @param string $www
	 * @return void
	 */
	public function setWww($www) {
		$this->www = $www;
	}

	/**
	 * Returns the lienhe
	 * 
	 * @return string $lienhe
	 */
	public function getLienhe() {
		return $this->lienhe;
	}

	/**
	 * Sets the lienhe
	 * 
	 * @param string $lienhe
	 * @return void
	 */
	public function setLienhe($lienhe) {
		$this->lienhe = $lienhe;
	}

	/**
	 * Returns the batdau
	 * 
	 * @return string $batdau
	 */
	public function getBatdau() {
		return $this->batdau;
	}

	/**
	 * Sets the batdau
	 * 
	 * @param string $batdau
	 * @return void
	 */
	public function setBatdau($batdau) {
		$this->batdau = $batdau;
	}

	/**
	 * Returns the ketthuc
	 * 
	 * @return string $ketthuc
	 */
	public function getKetthuc() {
		return $this->ketthuc;
	}

	/**
	 * Sets the ketthuc
	 * 
	 * @param string $ketthuc
	 * @return void
	 */
	public function setKetthuc($ketthuc) {
		$this->ketthuc = $ketthuc;
	}

	/**
	 * Returns the adminstrator
	 * 
	 * @return \VOV\Thosuachua\Domain\Model\Nhomtho $adminstrator
	 */
	public function getAdminstrator() {
		return $this->adminstrator;
	}

	/**
	 * Sets the adminstrator
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Nhomtho $adminstrator
	 * @return void
	 */
	public function setAdminstrator(\VOV\Thosuachua\Domain\Model\Nhomtho $adminstrator) {
		$this->adminstrator = $adminstrator;
	}

	/**
	 * Adds a Tinhthanhpho
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Tinhthanhpho $tinhthanhpho
	 * @return void
	 */
	public function addTinhthanhpho(\VOV\Thosuachua\Domain\Model\Tinhthanhpho $tinhthanhpho) {
		$this->tinhthanhpho->attach($tinhthanhpho);
	}

	/**
	 * Removes a Tinhthanhpho
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Tinhthanhpho $tinhthanhphoToRemove The Tinhthanhpho to be removed
	 * @return void
	 */
	public function removeTinhthanhpho(\VOV\Thosuachua\Domain\Model\Tinhthanhpho $tinhthanhphoToRemove) {
		$this->tinhthanhpho->detach($tinhthanhphoToRemove);
	}

	/**
	 * Returns the tinhthanhpho
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Tinhthanhpho> $tinhthanhpho
	 */
	public function getTinhthanhpho() {
		return $this->tinhthanhpho;
	}

	/**
	 * Sets the tinhthanhpho
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Tinhthanhpho> $tinhthanhpho
	 * @return void
	 */
	public function setTinhthanhpho(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $tinhthanhpho) {
		$this->tinhthanhpho = $tinhthanhpho;
	}

	/**
	 * Adds a Quanhuyen
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Quanhuyen $quanhuyen
	 * @return void
	 */
	public function addQuanhuyen(\VOV\Thosuachua\Domain\Model\Quanhuyen $quanhuyen) {
		$this->quanhuyen->attach($quanhuyen);
	}

	/**
	 * Removes a Quanhuyen
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Quanhuyen $quanhuyenToRemove The Quanhuyen to be removed
	 * @return void
	 */
	public function removeQuanhuyen(\VOV\Thosuachua\Domain\Model\Quanhuyen $quanhuyenToRemove) {
		$this->quanhuyen->detach($quanhuyenToRemove);
	}

	/**
	 * Returns the quanhuyen
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Quanhuyen> $quanhuyen
	 */
	public function getQuanhuyen() {
		return $this->quanhuyen;
	}

	/**
	 * Sets the quanhuyen
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Quanhuyen> $quanhuyen
	 * @return void
	 */
	public function setQuanhuyen(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $quanhuyen) {
		$this->quanhuyen = $quanhuyen;
	}

	/**
	 * Adds a Kategorienganh
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Kategorienganh $kategorienganh
	 * @return void
	 */
	public function addKategorienganh(\VOV\Thosuachua\Domain\Model\Kategorienganh $kategorienganh) {
		$this->kategorienganh->attach($kategorienganh);
	}

	/**
	 * Removes a Kategorienganh
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Kategorienganh $kategorienganhToRemove The Kategorienganh to be removed
	 * @return void
	 */
	public function removeKategorienganh(\VOV\Thosuachua\Domain\Model\Kategorienganh $kategorienganhToRemove) {
		$this->kategorienganh->detach($kategorienganhToRemove);
	}

	/**
	 * Returns the kategorienganh
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Kategorienganh> $kategorienganh
	 */
	public function getKategorienganh() {
		return $this->kategorienganh;
	}

	/**
	 * Sets the kategorienganh
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Kategorienganh> $kategorienganh
	 * @return void
	 */
	public function setKategorienganh(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $kategorienganh) {
		$this->kategorienganh = $kategorienganh;
	}

	/**
	 * Adds a Unterkategorienganh
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Unterkategorienganh $unterkategorienganh
	 * @return void
	 */
	public function addUnterkategorienganh(\VOV\Thosuachua\Domain\Model\Unterkategorienganh $unterkategorienganh) {
		$this->unterkategorienganh->attach($unterkategorienganh);
	}

	/**
	 * Removes a Unterkategorienganh
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Unterkategorienganh $unterkategorienganhToRemove The Unterkategorienganh to be removed
	 * @return void
	 */
	public function removeUnterkategorienganh(\VOV\Thosuachua\Domain\Model\Unterkategorienganh $unterkategorienganhToRemove) {
		$this->unterkategorienganh->detach($unterkategorienganhToRemove);
	}

	/**
	 * Returns the unterkategorienganh
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Unterkategorienganh> $unterkategorienganh
	 */
	public function getUnterkategorienganh() {
		return $this->unterkategorienganh;
	}

	/**
	 * Sets the unterkategorienganh
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Unterkategorienganh> $unterkategorienganh
	 * @return void
	 */
	public function setUnterkategorienganh(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $unterkategorienganh) {
		$this->unterkategorienganh = $unterkategorienganh;
	}

	/**
	 * Adds a Danhgia
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Danhgia $danhgium
	 * @return void
	 */
	public function addDanhgium(\VOV\Thosuachua\Domain\Model\Danhgia $danhgium) {
		$this->danhgia->attach($danhgium);
	}

	/**
	 * Removes a Danhgia
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Danhgia $danhgiumToRemove The Danhgia to be removed
	 * @return void
	 */
	public function removeDanhgium(\VOV\Thosuachua\Domain\Model\Danhgia $danhgiumToRemove) {
		$this->danhgia->detach($danhgiumToRemove);
	}

	/**
	 * Returns the danhgia
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Danhgia> $danhgia
	 */
	public function getDanhgia() {
		return $this->danhgia;
	}

	/**
	 * Sets the danhgia
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Danhgia> $danhgia
	 * @return void
	 */
	public function setDanhgia(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $danhgia) {
		$this->danhgia = $danhgia;
	}

}