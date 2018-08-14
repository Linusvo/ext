<?php
namespace  VOV\Thosuachua\ViewHelpers;
use \TYPO3\CMS\Core\Utility\GeneralUtility;
use \TYPO3\CMS\Core\Utility\HttpUtility;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;
    /***************************************************************
     *  Copyright notice
     *
     *  (c) 2013 Paul Beck <pb@teamgeist-medien.de>, Armin Ruediger Vieweg <info@professorweb.de>
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
 * This widget is a copy of the fluid paginate widget. Now it's possible to
 * use arrays with paginate, not only query results.
 *
 * @author     Paul Beck <pb@teamgeist-medien.de>
 * @author     Armin Ruediger Vieweg <info@professorweb.de>
 * @copyright  2011 Copyright belongs to the respective authors
 * @license    http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
//\TYPO3\CMS\Fluid\Core\Widget\AbstractWidgetViewHelper
//class PaginateViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {
class ThanhPhoViewHelper extends AbstractViewHelper  {

    /**
     * tinhthanhphoRepository
     *
     * @var \VOV\Thosuachua\Domain\Repository\TinhthanhphoRepository
     * @inject
     */
    protected $tinhthanhphoRepository = NULL;
    /**
     * The render method of widget
     * @param mixed $thotimviec
     */
    public function render($thotimviec) {
        $thanhphoquanhuyen = array();
        /** @var $extbaseObjectManager \TYPO3\CMS\Extbase\Object\ObjectManager */
        $extbaseObjectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $tpRepositorys = $extbaseObjectManager->get('VOV\Thosuachua\Domain\Repository\TinhthanhphoRepository');
        $qhRepositorys = $extbaseObjectManager->get('VOV\Thosuachua\Domain\Repository\QuanhuyenRepository');
        $tinhtp = $thotimviec->getTinhthanhpho2();
        $tinhtpAr = explode(",", $tinhtp);
        $tentp = '';
        if(count($tinhtp) > 0){
            foreach($tinhtpAr as $tinhtp1){
                if($tinhtp1 != '' and $tinhtp1 != 0){
                    $tentp .= $tpRepositorys->findByUid($tinhtp1)->getTen().'-';
                }
            }
        }

        $thanhphoquanhuyen[thanhpho] = $tentp;
        //$thanhphoquanhuyen[quanhuyen] = $qhRepositorys->findByUid($thotimviec->getQuanhuyen1());
        return $thanhphoquanhuyen;
    }
}

?>