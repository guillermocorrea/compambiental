<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

	public function beforeSave() {
	    parent::beforeSave();
		/**
		* If logged in, set the model data created_by & modified_by fields to logged in user's ID
		**/
	  	if ($this->userId) {
		    $this->set(array('modified_by' => $this->userId));
		    /**
		     * Add created_by field if creating a record
		     **/
		    if (!isset($this->data[$this->name]['id']) || !$this->id) {
		      $this->set(array('created_by' => $this->userId));
		    }
		}
	}
}