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
 * Nhomtho
 */
class Nhomtho extends \TYPO3\CMS\Extbase\Domain\Model\FrontendUser {
        /**
         * crdate
         *
         * @var \DateTime
         */
        protected $crdate = NULL;
	/**
	 * ten
	 * 
	 * @var string
	 */
	protected $ten = '';

	/**
	 * mieuta
	 * 
	 * @var string
	 */
	protected $mieuta = '';

	/**
	 * tailieu
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $tailieu = NULL;

	/**
	 * diachi
	 * 
	 * @var string
	 */
	protected $diachi = '';

	/**
	 * sonha
	 * 
	 * @var int
	 */
	protected $sonha = 0;

	/**
	 * email
	 * 
	 * @var string
	 */
	protected $email = '';

	/**
	 * dienthoai
	 * 
	 * @var string
	 */
	protected $dienthoai = '';

	/**
	 * lienhe
	 * 
	 * @var string
	 */
	protected $lienhe = '';

	/**
	 * emaillienhe
	 * 
	 * @var string
	 */
	protected $emaillienhe = '';
        /**
	 * emaillienhe
	 * 
	 * @var string
	 */
	protected $status = '';

	/**
	 * trangweb
	 * 
	 * @var string
	 */
	protected $trangweb = '';

	/**
	 * kategorienghanh
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Kategorienganh>
     * @lazy
	 */
	protected $kategorienghanh = NULL;

	/**
	 * unterkategorienganh
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Unterkategorienganh>
     * @lazy
	 */
	protected $unterkategorienganh = NULL;

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
	 * phuongxa
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Phuongxa>
     * @lazy
	 */
	protected $phuongxa = NULL;

	/**
	 * duongpho
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Duongpho>
     * @lazy
	 */
	protected $duongpho = NULL;

	/**
	 * danhgia
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Danhgia>
     * @lazy
	 * @cascade remove
	 */
	protected $danhgia = NULL;

	/**
	 * mautin
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Mautin>
     * @lazy
	 * @cascade remove
	 */
	protected $mautin = NULL;

	/**
	 * thotimviec
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Thotimviec>
     * @lazy
	 * @cascade remove
	 */
	protected $thotimviec = NULL;

	/**
	 * viectimtho
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Viectimtho>
     * @lazy
	 * @cascade remove
	 */
	protected $viectimtho = NULL;

	/**
	 * tintuyendung
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Tintuyendung>
     * @lazy
	 * @cascade remove
	 */
	protected $tintuyendung = NULL;

	/**
	 * tintimviec
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Tintimviec>
     * @lazy
	 * @cascade remove
	 */
	protected $tintimviec = NULL;
        /**
	 * sonha
	 * 
	 * @var int
	 */
        protected $feright;
       

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
		$this->kategorienghanh = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->unterkategorienganh = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->tinhthanhpho = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->quanhuyen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->phuongxa = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->duongpho = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->danhgia = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->mautin = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->thotimviec = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->viectimtho = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->tintuyendung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->tintimviec = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}
        
        /**
	 * Returns the ten
	 * 
	 * @return string $feright
	 */
	public function getFeright() {
		return $this->feright;
	}

	/**
	 * Sets the ten
	 * 
	 * @param string $feright
	 * @return void
	 */
	public function setFeright($feright) {
		$this->feright = $feright;
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
	 * Returns the ten
	 * 
	 * @return string $ten
	 */
	public function getTen() {
		return $this->ten;
	}

	/**
	 * Sets the ten
	 * 
	 * @param string $ten
	 * @return void
	 */
	public function setTen($ten) {
		$this->ten = $ten;
	}

	/**
	 * Returns the mieuta
	 * 
	 * @return string $mieuta
	 */
	public function getMieuta() {
		return $this->mieuta;
	}

	/**
	 * Sets the mieuta
	 * 
	 * @param string $mieuta
	 * @return void
	 */
	public function setMieuta($mieuta) {
		$this->mieuta = $mieuta;
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
	 * Returns the sonha
	 * 
	 * @return int $sonha
	 */
	public function getSonha() {
		return $this->sonha;
	}

	/**
	 * Sets the sonha
	 * 
	 * @param int $sonha
	 * @return void
	 */
	public function setSonha($sonha) {
		$this->sonha = $sonha;
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
	 * Returns the dienthoai
	 * 
	 * @return string $dienthoai
	 */
	public function getDienthoai() {
		return $this->dienthoai;
	}

	/**
	 * Sets the dienthoai
	 * 
	 * @param string $dienthoai
	 * @return void
	 */
	public function setDienthoai($dienthoai) {
		$this->dienthoai = $dienthoai;
	}
/**
	 * Returns the lienhe
	 * 
	 * @return string $status
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * Sets the lienhe
	 * 
	 * @param string $status
	 * @return void
	 */
	public function setStatus($status) {
		$this->status = $status;
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
	 * Returns the emaillienhe
	 * 
	 * @return string $emaillienhe
	 */
	public function getEmaillienhe() {
		return $this->emaillienhe;
	}

	/**
	 * Sets the emaillienhe
	 * 
	 * @param string $emaillienhe
	 * @return void
	 */
	public function setEmaillienhe($emaillienhe) {
		$this->emaillienhe = $emaillienhe;
	}

	/**
	 * Returns the trangweb
	 * 
	 * @return string $trangweb
	 */
	public function getTrangweb() {
		return $this->trangweb;
	}

	/**
	 * Sets the trangweb
	 * 
	 * @param string $trangweb
	 * @return void
	 */
	public function setTrangweb($trangweb) {
		$this->trangweb = $trangweb;
	}

	/**
	 * Adds a Kategorienganh
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Kategorienganh $kategorienghanh
	 * @return void
	 */
	public function addKategorienghanh(\VOV\Thosuachua\Domain\Model\Kategorienganh $kategorienghanh) {
		$this->kategorienghanh->attach($kategorienghanh);
	}

	/**
	 * Removes a Kategorienganh
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Kategorienganh $kategorienghanhToRemove The Kategorienganh to be removed
	 * @return void
	 */
	public function removeKategorienghanh(\VOV\Thosuachua\Domain\Model\Kategorienganh $kategorienghanhToRemove) {
		$this->kategorienghanh->detach($kategorienghanhToRemove);
	}

	/**
	 * Returns the kategorienghanh
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Kategorienganh> $kategorienghanh
	 */
	public function getKategorienghanh() {
		return $this->kategorienghanh;
	}

	/**
	 * Sets the kategorienghanh
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Kategorienganh> $kategorienghanh
	 * @return void
	 */
	public function setKategorienghanh(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $kategorienghanh) {
		$this->kategorienghanh = $kategorienghanh;
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
	 * Adds a Phuongxa
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Phuongxa $phuongxa
	 * @return void
	 */
	public function addPhuongxa(\VOV\Thosuachua\Domain\Model\Phuongxa $phuongxa) {
		$this->phuongxa->attach($phuongxa);
	}

	/**
	 * Removes a Phuongxa
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Phuongxa $phuongxaToRemove The Phuongxa to be removed
	 * @return void
	 */
	public function removePhuongxa(\VOV\Thosuachua\Domain\Model\Phuongxa $phuongxaToRemove) {
		$this->phuongxa->detach($phuongxaToRemove);
	}

	/**
	 * Returns the phuongxa
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Phuongxa> $phuongxa
	 */
	public function getPhuongxa() {
		return $this->phuongxa;
	}

	/**
	 * Sets the phuongxa
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Phuongxa> $phuongxa
	 * @return void
	 */
	public function setPhuongxa(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $phuongxa) {
		$this->phuongxa = $phuongxa;
	}

	/**
	 * Adds a Duongpho
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Duongpho $duongpho
	 * @return void
	 */
	public function addDuongpho(\VOV\Thosuachua\Domain\Model\Duongpho $duongpho) {
		$this->duongpho->attach($duongpho);
	}

	/**
	 * Removes a Duongpho
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Duongpho $duongphoToRemove The Duongpho to be removed
	 * @return void
	 */
	public function removeDuongpho(\VOV\Thosuachua\Domain\Model\Duongpho $duongphoToRemove) {
		$this->duongpho->detach($duongphoToRemove);
	}

	/**
	 * Returns the duongpho
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Duongpho> $duongpho
	 */
	public function getDuongpho() {
		return $this->duongpho;
	}

	/**
	 * Sets the duongpho
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Duongpho> $duongpho
	 * @return void
	 */
	public function setDuongpho(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $duongpho) {
		$this->duongpho = $duongpho;
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

	/**
	 * Adds a Mautin
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Mautin $mautin
	 * @return void
	 */
	public function addMautin(\VOV\Thosuachua\Domain\Model\Mautin $mautin) {
		$this->mautin->attach($mautin);
	}

	/**
	 * Removes a Mautin
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Mautin $mautinToRemove The Mautin to be removed
	 * @return void
	 */
	public function removeMautin(\VOV\Thosuachua\Domain\Model\Mautin $mautinToRemove) {
		$this->mautin->detach($mautinToRemove);
	}

	/**
	 * Returns the mautin
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Mautin> $mautin
	 */
	public function getMautin() {
		return $this->mautin;
	}

	/**
	 * Sets the mautin
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Mautin> $mautin
	 * @return void
	 */
	public function setMautin(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $mautin) {
		$this->mautin = $mautin;
	}

	/**
	 * Adds a Thotimviec
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Thotimviec $thotimviec
	 * @return void
	 */
	public function addThotimviec(\VOV\Thosuachua\Domain\Model\Thotimviec $thotimviec) {
		$this->thotimviec->attach($thotimviec);
	}

	/**
	 * Removes a Thotimviec
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Thotimviec $thotimviecToRemove The Thotimviec to be removed
	 * @return void
	 */
	public function removeThotimviec(\VOV\Thosuachua\Domain\Model\Thotimviec $thotimviecToRemove) {
		$this->thotimviec->detach($thotimviecToRemove);
	}

	/**
	 * Returns the thotimviec
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Thotimviec> $thotimviec
	 */
	public function getThotimviec() {
		return $this->thotimviec;
	}

	/**
	 * Sets the thotimviec
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Thotimviec> $thotimviec
	 * @return void
	 */
	public function setThotimviec(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $thotimviec) {
		$this->thotimviec = $thotimviec;
	}

	/**
	 * Adds a Viectimtho
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Viectimtho $viectimtho
	 * @return void
	 */
	public function addViectimtho(\VOV\Thosuachua\Domain\Model\Viectimtho $viectimtho) {
		$this->viectimtho->attach($viectimtho);
	}

	/**
	 * Removes a Viectimtho
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Viectimtho $viectimthoToRemove The Viectimtho to be removed
	 * @return void
	 */
	public function removeViectimtho(\VOV\Thosuachua\Domain\Model\Viectimtho $viectimthoToRemove) {
		$this->viectimtho->detach($viectimthoToRemove);
	}

	/**
	 * Returns the viectimtho
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Viectimtho> $viectimtho
	 */
	public function getViectimtho() {
		return $this->viectimtho;
	}

	/**
	 * Sets the viectimtho
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Viectimtho> $viectimtho
	 * @return void
	 */
	public function setViectimtho(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $viectimtho) {
		$this->viectimtho = $viectimtho;
	}

	/**
	 * Adds a Tintuyendung
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Tintuyendung $tintuyendung
	 * @return void
	 */
	public function addTintuyendung(\VOV\Thosuachua\Domain\Model\Tintuyendung $tintuyendung) {
		$this->tintuyendung->attach($tintuyendung);
	}

	/**
	 * Removes a Tintuyendung
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Tintuyendung $tintuyendungToRemove The Tintuyendung to be removed
	 * @return void
	 */
	public function removeTintuyendung(\VOV\Thosuachua\Domain\Model\Tintuyendung $tintuyendungToRemove) {
		$this->tintuyendung->detach($tintuyendungToRemove);
	}

	/**
	 * Returns the tintuyendung
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Tintuyendung> $tintuyendung
	 */
	public function getTintuyendung() {
		return $this->tintuyendung;
	}

	/**
	 * Sets the tintuyendung
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Tintuyendung> $tintuyendung
	 * @return void
	 */
	public function setTintuyendung(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $tintuyendung) {
		$this->tintuyendung = $tintuyendung;
	}

	/**
	 * Adds a Tintimviec
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Tintimviec $tintimviec
	 * @return void
	 */
	public function addTintimviec(\VOV\Thosuachua\Domain\Model\Tintimviec $tintimviec) {
		$this->tintimviec->attach($tintimviec);
	}

	/**
	 * Removes a Tintimviec
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Tintimviec $tintimviecToRemove The Tintimviec to be removed
	 * @return void
	 */
	public function removeTintimviec(\VOV\Thosuachua\Domain\Model\Tintimviec $tintimviecToRemove) {
		$this->tintimviec->detach($tintimviecToRemove);
	}

	/**
	 * Returns the tintimviec
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Tintimviec> $tintimviec
	 */
	public function getTintimviec() {
		return $this->tintimviec;
	}

	/**
	 * Sets the tintimviec
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Tintimviec> $tintimviec
	 * @return void
	 */
	public function setTintimviec(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $tintimviec) {
		$this->tintimviec = $tintimviec;
	}

}