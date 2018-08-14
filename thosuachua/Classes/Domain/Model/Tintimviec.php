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
 * Tintimviec
 */
class Tintimviec extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {
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
	 * tennguoitim
	 * 
	 * @var string
	 */
	protected $tennguoitim = '';

	/**
	 * mieutacanhan
	 * 
	 * @var string
	 */
	protected $mieutacanhan = '';

	/**
	 * diachi
	 * 
	 * @var string
	 */
	protected $diachi = '';

	/**
	 * lienhe
	 * 
	 * @var string
	 */
	protected $lienhe = '';

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
	 * email
	 * 
	 * @var string
	 */
	protected $email = '';
	/**
	 * administrator
	 * 
	 * @var \VOV\Thosuachua\Domain\Model\Nhomtho
	 */
	protected $administrator = NULL;

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
	 */
	protected $quanhuyen = NULL;

    /**
     * doituong
     *
     * @var int
     */
    protected $doituong = 0;

    /**
     * loaitin
     *
     * @var int
     */
    protected $loaitin = 0;

    /**
     * kateorienganh
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VOV\Thosuachua\Domain\Model\Kategorienganh>
     * @lazy
     * @cascade remove
     */
    protected $kateorienganh = NULL;
    /**
     * admin
     *
     * @var int
     */
    protected $admin = 0;

    /**
     * kategorie
     *
     * @var int
     */
    protected $kategorie = 0;

    /**
     * unterkategorie
     *
     * @var int
     */
    protected $unterkategorie = 0;

    /**
     * thanhpho
     *
     * @var int
     */
    protected $thanhpho = 0;

    /**
     * quanhuyen1
     *
     * @var int
     */
    protected $quanhuyen1 = 0;
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
		$this->kategorienganh = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->unterkategorienganh = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->tinhthanhpho = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->quanhuyen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
	 * Returns the tennguoitim
	 * 
	 * @return string $tennguoitim
	 */
	public function getTennguoitim() {
		return $this->tennguoitim;
	}

	/**
	 * Sets the tennguoitim
	 * 
	 * @param string $tennguoitim
	 * @return void
	 */
	public function setTennguoitim($tennguoitim) {
		$this->tennguoitim = $tennguoitim;
	}

	/**
	 * Returns the mieutacanhan
	 * 
	 * @return string $mieutacanhan
	 */
	public function getMieutacanhan() {
		return $this->mieutacanhan;
	}

	/**
	 * Sets the mieutacanhan
	 * 
	 * @param string $mieutacanhan
	 * @return void
	 */
	public function setMieutacanhan($mieutacanhan) {
		$this->mieutacanhan = $mieutacanhan;
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
	 * Returns the administrator
	 * 
	 * @return \VOV\Thosuachua\Domain\Model\Nhomtho $administrator
	 */
	public function getAdministrator() {
		return $this->administrator;
	}

	/**
	 * Sets the administrator
	 * 
	 * @param \VOV\Thosuachua\Domain\Model\Nhomtho $administrator
	 * @return void
	 */
	public function setAdministrator(\VOV\Thosuachua\Domain\Model\Nhomtho $administrator) {
		$this->administrator = $administrator;
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
     * Returns the doituong
     *
     * @return int $doituong
     */
    public function getDoituong() {
        return $this->doituong;
    }

    /**
     * Sets the doituong
     *
     * @param int $doituong
     * @return void
     */
    public function setDoituong($doituong) {
        $this->doituong = $doituong;
    }

    /**
     * Returns the loaitin
     *
     * @return int $loaitin
     */
    public function getLoaitin() {
        return $this->loaitin;
    }

    /**
     * Sets the loaitin
     *
     * @param int $loaitin
     * @return void
     */
    public function setLoaitin($loaitin) {
        $this->loaitin = $loaitin;
    }

    /**
     * Returns the admin
     *
     * @return int $admin
     */
    public function getAdmin() {
        return $this->admin;
    }

    /**
     * Sets the admin
     *
     * @param int $admin
     * @return void
     */
    public function setAdmin($admin) {
        $this->admin = $admin;
    }

    /**
     * Returns the kategorie
     *
     * @return int $kategorie
     */
    public function getKategorie() {
        return $this->kategorie;
    }

    /**
     * Sets the kategorie
     *
     * @param int $kategorie
     * @return void
     */
    public function setKategorie($kategorie) {
        $this->kategorie = $kategorie;
    }

    /**
     * Returns the unterkategorie
     *
     * @return int $unterkategorie
     */
    public function getUnterkategorie() {
        return $this->unterkategorie;
    }

    /**
     * Sets the unterkategorie
     *
     * @param int $unterkategorie
     * @return void
     */
    public function setUnterkategorie($unterkategorie) {
        $this->unterkategorie = $unterkategorie;
    }

    /**
     * Returns the thanhpho
     *
     * @return int $thanhpho
     */
    public function getThanhpho() {
        return $this->thanhpho;
    }

    /**
     * Sets the thanhpho
     *
     * @param int $thanhpho
     * @return void
     */
    public function setThanhpho($thanhpho) {
        $this->thanhpho = $thanhpho;
    }

    /**
     * Returns the quanhuyen1
     *
     * @return int quanhuyen1
     */
    public function getQuanhuyen1() {
        return $this->quanhuyen1;
    }

    /**
     * Sets the quanhuyen1
     *
     * @param int $quanhuyen1
     * @return void
     */
    public function setQuanhuyen1($quanhuyen1) {
        $this->quanhuyen1 = $quanhuyen1;
    }

}