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
 * Kategorienganh
 */
class Kategorienganh extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

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
	 * unterkategorie
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Unterkategorienganh>
     * @lazy
	 * @cascade remove
	 */
	protected $unterkategorie = NULL;
    /**
     * tintimviec
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Tintimviec>
     * @cascade remove
     */
    protected $tintimviec = NULL;

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
		$this->unterkategorie = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->tintimviec = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();

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
	 * Adds a Unterkategorienganh
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Unterkategorienganh $unterkategorie
	 * @return void
	 */
	public function addUnterkategorie(\VOV\Thosuachua\Domain\Model\Unterkategorienganh $unterkategorie) {
		$this->unterkategorie->attach($unterkategorie);
	}

	/**
	 * Removes a Unterkategorienganh
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Unterkategorienganh $unterkategorieToRemove The Unterkategorienganh to be removed
	 * @return void
	 */
	public function removeUnterkategorie(\VOV\Thosuachua\Domain\Model\Unterkategorienganh $unterkategorieToRemove) {
		$this->unterkategorie->detach($unterkategorieToRemove);
	}

	/**
	 * Returns the unterkategorie
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Unterkategorienganh> $unterkategorie
	 */
	public function getUnterkategorie() {
		return $this->unterkategorie;
	}

	/**
	 * Sets the unterkategorie
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Unterkategorienganh> $unterkategorie
	 * @return void
	 */
	public function setUnterkategorie(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $unterkategorie) {
		$this->unterkategorie = $unterkategorie;
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