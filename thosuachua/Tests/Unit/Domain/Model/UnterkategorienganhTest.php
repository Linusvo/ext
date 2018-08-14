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
 * Test case for class \VOV\Thosuachua\Domain\Model\Unterkategorienganh.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class UnterkategorienganhTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \VOV\Thosuachua\Domain\Model\Unterkategorienganh
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = new \VOV\Thosuachua\Domain\Model\Unterkategorienganh();
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
	public function getKategorieReturnsInitialValueForKategorienganh() {
		$this->assertEquals(
			NULL,
			$this->subject->getKategorie()
		);
	}

	/**
	 * @test
	 */
	public function setKategorieForKategorienganhSetsKategorie() {
		$kategorieFixture = new \VOV\Thosuachua\Domain\Model\Kategorienganh();
		$this->subject->setKategorie($kategorieFixture);

		$this->assertAttributeEquals(
			$kategorieFixture,
			'kategorie',
			$this->subject
		);
	}
}
