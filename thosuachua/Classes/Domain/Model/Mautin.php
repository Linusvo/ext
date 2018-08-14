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
 * Mautin
 */
class Mautin extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

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
	 * link
	 * 
	 * @var string
	 */
	protected $link = '';

	/**
	 * batdau
	 * 
	 * @var \DateTime
	 */
	protected $batdau = NULL;

	/**
	 * ketthuc
	 * 
	 * @var \DateTime
	 */
	protected $ketthuc = NULL;

	/**
	 * www
	 * 
	 * @var string
	 */
	protected $www = '';

	/**
	 * nhomtho
	 * 
	 * @var \VOV\Thosuachua\Domain\Model\Nhomtho
	 */
	protected $nhomtho = NULL;

	/**
	 * unterkategorienghanh
	 * 
	 * @var \VOV\Thosuachua\Domain\Model\Unterkategorienganh
	 */
	protected $unterkategorienghanh = NULL;

	/**
	 * kategorienghanh
	 * 
	 * @var \VOV\Thosuachua\Domain\Model\Kategorienganh
	 */
	protected $kategorienghanh = NULL;

	/**
	 * tinhthanhpho
	 * 
	 * @var \VOV\Thosuachua\Domain\Model\Tinhthanhpho
	 */
	protected $tinhthanhpho = NULL;

	/**
	 * quanhuyen
	 * 
	 * @var \VOV\Thosuachua\Domain\Model\Quanhuyen
	 */
	protected $quanhuyen = NULL;

	/**
	 * phuongxa
	 * 
	 * @var \VOV\Thosuachua\Domain\Model\Phuongxa
	 */
	protected $phuongxa = NULL;

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
	 * Returns the link
	 * 
	 * @return string $link
	 */
	public function getLink() {
		return $this->link;
	}

	/**
	 * Sets the link
	 * 
	 * @param string $link
	 * @return void
	 */
	public function setLink($link) {
		$this->link = $link;
	}

	/**
	 * Returns the batdau
	 * 
	 * @return \DateTime $batdau
	 */
	public function getBatdau() {
		return $this->batdau;
	}

	/**
	 * Sets the batdau
	 * 
	 * @param \DateTime $batdau
	 * @return void
	 */
	public function setBatdau(\DateTime $batdau) {
		$this->batdau = $batdau;
	}

	/**
	 * Returns the ketthuc
	 * 
	 * @return \DateTime $ketthuc
	 */
	public function getKetthuc() {
		return $this->ketthuc;
	}

	/**
	 * Sets the ketthuc
	 * 
	 * @param \DateTime $ketthuc
	 * @return void
	 */
	public function setKetthuc(\DateTime $ketthuc) {
		$this->ketthuc = $ketthuc;
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
	 * Returns the nhomtho
	 * 
	 * @return \VOV\Thosuachua\Domain\Model\Nhomtho $nhomtho
	 */
	public function getNhomtho() {
		return $this->nhomtho;
	}

	/**
	 * Sets the nhomtho
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Nhomtho $nhomtho
	 * @return void
	 */
	public function setNhomtho(\VOV\Thosuachua\Domain\Model\Nhomtho $nhomtho) {
		$this->nhomtho = $nhomtho;
	}

	/**
	 * Returns the unterkategorienghanh
	 * 
	 * @return \VOV\Thosuachua\Domain\Model\Unterkategorienganh $unterkategorienghanh
	 */
	public function getUnterkategorienghanh() {
		return $this->unterkategorienghanh;
	}

	/**
	 * Sets the unterkategorienghanh
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Unterkategorienganh $unterkategorienghanh
	 * @return void
	 */
	public function setUnterkategorienghanh(\VOV\Thosuachua\Domain\Model\Unterkategorienganh $unterkategorienghanh) {
		$this->unterkategorienghanh = $unterkategorienghanh;
	}

	/**
	 * Returns the kategorienghanh
	 * 
	 * @return \VOV\Thosuachua\Domain\Model\Kategorienganh $kategorienghanh
	 */
	public function getKategorienghanh() {
		return $this->kategorienghanh;
	}

	/**
	 * Sets the kategorienghanh
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Kategorienganh $kategorienghanh
	 * @return void
	 */
	public function setKategorienghanh(\VOV\Thosuachua\Domain\Model\Kategorienganh $kategorienghanh) {
		$this->kategorienghanh = $kategorienghanh;
	}

	/**
	 * Returns the tinhthanhpho
	 * 
	 * @return \VOV\Thosuachua\Domain\Model\Tinhthanhpho $tinhthanhpho
	 */
	public function getTinhthanhpho() {
		return $this->tinhthanhpho;
	}

	/**
	 * Sets the tinhthanhpho
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Tinhthanhpho $tinhthanhpho
	 * @return void
	 */
	public function setTinhthanhpho(\VOV\Thosuachua\Domain\Model\Tinhthanhpho $tinhthanhpho) {
		$this->tinhthanhpho = $tinhthanhpho;
	}

	/**
	 * Returns the quanhuyen
	 * 
	 * @return \VOV\Thosuachua\Domain\Model\Quanhuyen $quanhuyen
	 */
	public function getQuanhuyen() {
		return $this->quanhuyen;
	}

	/**
	 * Sets the quanhuyen
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Quanhuyen $quanhuyen
	 * @return void
	 */
	public function setQuanhuyen(\VOV\Thosuachua\Domain\Model\Quanhuyen $quanhuyen) {
		$this->quanhuyen = $quanhuyen;
	}

	/**
	 * Returns the phuongxa
	 * 
	 * @return \VOV\Thosuachua\Domain\Model\Phuongxa $phuongxa
	 */
	public function getPhuongxa() {
		return $this->phuongxa;
	}

	/**
	 * Sets the phuongxa
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Phuongxa $phuongxa
	 * @return void
	 */
	public function setPhuongxa(\VOV\Thosuachua\Domain\Model\Phuongxa $phuongxa) {
		$this->phuongxa = $phuongxa;
	}

}