<?php

/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Helper', 'View');

/**
 * This is a placeholder class.
 * Create the same file in app/app_helper.php
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.cake
 */
class AppHelper extends Helper {

    // Extracts row
    public function extractRow($key, $array) {
        if (array_key_exists($key, $array)) {
            return $array[$key];
        } else {
            return $array;
        }
    }

    protected function getViewVars($var) {
        if (!isset($this->_viewVars)) {
            $View = ClassRegistry::getObject('View');
            $this->_viewVars = $View->viewVars;
        }

        if (array_key_exists($var, $this->_viewVars)) {
            return $this->_viewVars[$var];
        }

        return false;
    }

}