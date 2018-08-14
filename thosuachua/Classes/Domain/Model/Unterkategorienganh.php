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
 * Unterkategorienganh
 */
class Unterkategorienganh extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

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
     * tintimviec
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Tintimviec>
     * @lazy
     * @cascade remove
     */
    protected $tintimviec = NULL;
	/**
	 * kategorie
	 * 
	 * @var \VOV\Thosuachua\Domain\Model\Kategorienganh
	 */
	protected $kategorie = NULL;

    /**
     * tenkhongdau
     *
     * @var string
     */
    protected $tenkhongdau = '';
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
	 * Returns the kategorie
	 * 
	 * @return \VOV\Thosuachua\Domain\Model\Kategorienganh $kategorie
	 */
	public function getKategorie() {
		return $this->kategorie;
	}

	/**
	 * Sets the kategorie
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Kategorienganh $kategorie
	 * @return void
	 */
	public function setKategorie(\VOV\Thosuachua\Domain\Model\Kategorienganh $kategorie) {
		$this->kategorie = $kategorie;
	}

    /**
     * Returns the tenkhongdau
     *
     * @return string $tenkhongdau
     */
    public function getTenkhongdau() {
        return $this->tenkhongdau;
    }

    /**
     * Sets the tenkhongdau
     *
     * @param string $tenkhongdau
     * @return void
     */
    public function setTenkhongdau($tenkhongdau) {
        $this->tenkhongdau = $tenkhongdau;
    }
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
        $this->tintimviec = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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