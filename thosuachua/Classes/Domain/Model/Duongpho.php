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
 * Duongpho
 */
class Duongpho extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * ten
	 * 
	 * @var string
	 */
	protected $ten = '';

	/**
	 * map
	 * 
	 * @var string
	 */
	protected $map = '';

	/**
	 * sonha
	 * 
	 * @var string
	 */
	protected $sonha = '';

	/**
	 * phuongxa
	 * 
	 * @var \VOV\Thosuachua\Domain\Model\Phuongxa
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
	 * Returns the sonha
	 * 
	 * @return string $sonha
	 */
	public function getSonha() {
		return $this->sonha;
	}

	/**
	 * Sets the sonha
	 * 
	 * @param string $sonha
	 * @return void
	 */
	public function setSonha($sonha) {
		$this->sonha = $sonha;
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

}