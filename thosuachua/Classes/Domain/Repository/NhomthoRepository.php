<?php
namespace VOV\Thosuachua\Domain\Repository;

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
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;
/**
 * The repository for Nhomthos
 */
class NhomthoRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

    function findNoMautin(){
        $query = $this->createQuery();
          $query->matching(
            $query->logicalAnd(
                $query->equals('mautin', 0 )
            )
        );
        $query->setOrderings(array(
            'crdate' => QueryInterface::ORDER_DESCENDING
        ));

        return $query->execute();
    }
        function findMitMautin(){
         $query = $this->createQuery();
        $query->matching(
            $query->logicalNot(
                $query->equals('mautin.uid', 0 )
            )
        );
        $query->setOrderings(array(
            'crdate' => QueryInterface::ORDER_DESCENDING
        ));

        return $query->execute();
    }
        function findNoMautinget($param){
           //  \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($param);
         //   !isset($param['quanhuyen']) and  !isset($param['quanhuyen'])
        $query = $this->createQuery();
              $query->matching(
                    $query->logicalAnd(
                             $query->equals('tinhthanhpho.uid', $param['tinhthanhpho']), 
                            $query->equals('kategorienghanh.uid', $param['kategorienghanh']), 
                             $query->equals('unterkategorienganh.uid', $param['unterkategorienghanh']), 
                                $query->equals('quanhuyen.uid', $param['quanhuyen']), 
                            $query->equals('mautin', 0)
                    )
            );

//        if (!isset($param['quanhuyen']) and  !isset($param['unterkategorienganh'])) {
//            $query->matching(
//                    $query->logicalAnd(
//                             $query->equals('tinhthanhpho.uid', $param['tinhthanhpho']), 
//                            $query->equals('kategorienghanh.uid', $param['kategorienghanh']), 
//                            $query->equals('mautin', 0)
//                    )
//            );
//        } elseif ($i == 1) {
//            $query->matching(
//                    $query->logicalAnd(
//                            $query->equals('kategorienghanh.uid', $param['kategorienghanh']), 
//                            $query->equals('mautin', 0)
//                    )
//            );
//        } elseif ($i == 2) {
//            $query->matching(
//                    $query->logicalAnd(
//                            $query->equals('kategorienghanh.uid', $param['kategorienghanh']), 
//                            $query->equals('mautin', 0)
//                    )
//            );
//        } elseif ($i == 2) {
//            $query->matching(
//                    $query->logicalAnd(
//                            $query->equals('kategorienghanh.uid', $param['kategorienghanh']), 
//                            $query->equals('mautin', 0)
//                    )
//            );
//        }

        $query->setOrderings(array(
            'crdate' => QueryInterface::ORDER_DESCENDING
        ));

        return $query->execute();
    }
        function findMitMautinget($param){
         //      \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($param['kategorienghanh']);
         $query = $this->createQuery();
        $query->matching(
               $query->logicalAnd(
                               $query->equals('tinhthanhpho.uid', $param['tinhthanhpho']), 
                            $query->equals('kategorienghanh.uid', $param['kategorienghanh']), 
                             $query->equals('unterkategorienganh.uid', $param['unterkategorienghanh']), 
                                $query->equals('quanhuyen.uid', $param['quanhuyen']), 
            //    $query->equals('kategorienghanh.uid', $param['kategorienghanh']),
                $query->logicalNot(
                    $query->equals('mautin.uid', 0 )
                )
            )
        );
        $query->setOrderings(array(
            'crdate' => QueryInterface::ORDER_DESCENDING
        ));

        return $query->execute();
    }	
	
}