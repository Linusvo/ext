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
 * Quanhuyen
 */
class Quanhuyen extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * ten
	 * 
	 * @var string
	 */
	protected $ten = '';

	/**
	 * maso
	 * 
	 * @var int
	 */
	protected $maso = 0;

	/**
	 * map
	 * 
	 * @var string
	 */
	protected $map = '';

	/**
	 * phuongxa
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Phuongxa>
     * @lazy
	 * @cascade remove
	 */
	protected $phuongxa = NULL;

	/**
	 * nhomtho
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Nhomtho>
     * @lazy
	 */
	protected $nhomtho = NULL;
    /**
     * tintimviec
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Tintimviec>
     * @lazy
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
		$this->phuongxa = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->nhomtho = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
	 * Returns the maso
	 * 
	 * @return int $maso
	 */
	public function getMaso() {
		return $this->maso;
	}

	/**
	 * Sets the maso
	 * 
	 * @param int $maso
	 * @return void
	 */
	public function setMaso($maso) {
		$this->maso = $maso;
	}

	/**
	 * Returns the map
	 * 
	 * @return string $map
	 */
	public function getMap() {
		return $this->map;
	}

	/**
	 * Sets the map
	 * 
	 * @param string $map
	 * @return void
	 */
	public function setMap($map) {
		$this->map = $map;
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
	 * Adds a Nhomtho
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Nhomtho $nhomtho
	 * @return void
	 */
	public function addNhomtho(\VOV\Thosuachua\Domain\Model\Nhomtho $nhomtho) {
		$this->nhomtho->attach($nhomtho);
	}

	/**
	 * Removes a Nhomtho
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Nhomtho $nhomthoToRemove The Nhomtho to be removed
	 * @return void
	 */
	public function removeNhomtho(\VOV\Thosuachua\Domain\Model\Nhomtho $nhomthoToRemove) {
		$this->nhomtho->detach($nhomthoToRemove);
	}

	/**
	 * Returns the nhomtho
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Nhomtho> $nhomtho
	 */
	public function getNhomtho() {
		return $this->nhomtho;
	}

	/**
	 * Sets the nhomtho
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Nhomtho> $nhomtho
	 * @return void
	 */
	public function setNhomtho(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $nhomtho) {
		$this->nhomtho = $nhomtho;
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