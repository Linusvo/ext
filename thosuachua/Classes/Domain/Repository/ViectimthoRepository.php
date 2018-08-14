<?php

namespace VOV\Thosuachua\Domain\Repository;

/* * *************************************************************
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
 * ************************************************************* */

use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * The repository for Viectimthos
 */
class ViectimthoRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {


    function findAllTin() {
        $query = $this->createQuery();
        $query->setOrderings(array(
            'crdate' => QueryInterface::ORDER_DESCENDING
        ));
        $query->matching(
            $query->equals('hidden1', 0)
        );
        $query->setLimit(200);
        return $query->execute();
    }


    function findByAllParam($param) {
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(FALSE);
        $constraints = array();
        if($param['unterkategorienghanh'] < 999){
            $constraints[] =  $query->equals('unterkategorie', $param['unterkategorienghanh']);
        }
        if($param['quanhuyen'] < 999){
            $constraints[] =  $query->equals('quanhuyen1', $param['quanhuyen']);
        }
        if($param['thanhpho'] < 999){
            $constraints[] =  $query->equals('tinhthanhpho1', $param['thanhpho']);
        }
        $constraints[] =  $query->equals('hidden1', 0);
        $query->matching(
            $query->logicalAnd(
                $constraints
            )
        );
        $query->setOrderings(array(
            'crdate' => QueryInterface::ORDER_DESCENDING
        ));
        $query->setLimit(200);
        return $query->execute();
    }


    function findBySearch($param) {
        $query = $this->createQuery();
        $query->matching(
                $query->logicalAnd(
                        $query->equals('tinhthanhpho.uid', $param['tinhthanhpho']), $query->equals('kategorienganh.uid', $param['kategorienghanh']), $query->equals('unterkategorienganh.uid', $param['unterkategorienghanh']), $query->equals('quanhuyen.uid', $param['quanhuyen']), $query->equals('hidden1', 0)
                )
        );

        $query->setOrderings(array(
            'crdate' => QueryInterface::ORDER_DESCENDING
        ));

        return $query->execute();
    }

    function findBySearch10($param) {
        $query = $this->createQuery();
        $query->matching(
                $query->logicalAnd(
                        $query->equals('tinhthanhpho.uid', $param['tinhthanhpho']), $query->equals('kategorienganh.uid', $param['kategorienghanh']), $query->equals('unterkategorienganh.uid', $param['unterkategorienghanh']), $query->equals('quanhuyen.uid', $param['quanhuyen']), $query->equals('hidden1', 0)
                )
        );
        $query->setOrderings(array(
            'crdate' => QueryInterface::ORDER_DESCENDING
        ));
        $query->setLimit(10);
        return $query->execute();
    }

    function findAll() {
        $query = $this->createQuery();
        $query->setOrderings(array(
            'crdate' => QueryInterface::ORDER_DESCENDING
        ));
        $query->matching(
                $query->logicalAnd(
                        $query->equals('hidden1', 0)
                )
        );
        return $query->execute();
    }

    function findAll10() {
        $query = $this->createQuery();
        $query->setOrderings(array(
            'crdate' => QueryInterface::ORDER_DESCENDING
        ));
        $query->matching(
                $query->equals('hidden1', 0)
        );
        $query->setLimit(10);
        return $query->execute();
    }

    function kichhoat() {
        $query = $this->createQuery();
        $query->setOrderings(array(
            'crdate' => QueryInterface::ORDER_ASCENDING
        ));
        $query->matching(
                $query->logicalAnd(
                        $query->equals('hidden1', 1)
                )
        );
        return $query->execute();
    }

}
