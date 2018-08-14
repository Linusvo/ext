<?php
namespace BK2K\BootstrapPackage\ViewHelpers;

/*
 *  The MIT License (MIT)
 *
 *  Copyright (c) 2014 Benjamin Kott, http://www.bk2k.info
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in
 *  all copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 *  THE SOFTWARE.
 */

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;
//use TYPO3\CMS\Fluid\Core\ViewHelper\Facets\CompilableInterface;
//use TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface;

/**
 * @author Benjamin Kott <info@bk2k.info>
 */
//class LoginViewHelper extends AbstractViewHelper implements CompilableInterface
class SearchHidenViewHelper extends AbstractViewHelper 
{


    /**
     * Render
     *
     * @param string $name
     * @param mixed $value
     * @return string
     */
    public function render()
    {
      $pageaktuelle = $GLOBALS['TSFE']->page;
    //  if($pageaktuelle['uid'] == 46  or $pageaktuelle['uid'] == 49  or $pageaktuelle['uid'] == 48 or $pageaktuelle['uid'] == 41 or $pageaktuelle['uid'] == 42 or $pageaktuelle['uid'] == 43 or $pageaktuelle['uid'] == 44){
//        if($pageaktuelle['uid'] == 46  or $pageaktuelle['uid'] == 49  or $pageaktuelle['uid'] == 48 or $pageaktuelle['uid'] == 41 or $pageaktuelle['uid'] == 42 or $pageaktuelle['uid'] == 43 or $pageaktuelle['uid'] == 44){
//         
//          return 1941;
//      } 
      if($pageaktuelle['uid'] == 49 or $pageaktuelle['uid'] == 59){
          return 1944;
      } else{
          if($pageaktuelle['uid'] == 39 or $pageaktuelle['uid'] == 46 ){
          return 1999;
      } 
      }
    }

}
