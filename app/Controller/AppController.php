<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
 
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	public $components = array('Auth','Session');

	public function beforeFilter()
	{
		$this->Auth->authorize = array('Controller');
		$this->Auth->authenticate = array('Form'=>array(
			'fields' => array('username'=>'numero_documento'))
		);
		$this->Auth->loginRedirect = array('action' => 'index', 'controller' => 'infractions');
		$this->Auth->logoutRedirect = array('action' => 'home', 'controller' => 'pages');
		$this->Auth->authError = 'Error acceso denegado';
	}

	public function isAuthorized($user) {
        if (($this->params['prefix'] === 'admin') && ($user['rol'] != Configure::read('admin'))) {
            return false;            
        } 
        return true;
    }

	/**
	* returns true if the current user is admin, false otherwise
	*/
    public function isAdmin() {
    	if ($this->Auth->user('rol') == Configure::read('admin')) {
    		return true;
    	}
    	CakeLog::write('auth', $this->Auth->user('numero_documento') . ' acceso denegado');
    	throw new NotFoundException();
    	//$this->cakeError('error404', array('message'=>'Comment not found'));
    	//$this->redirect('/');
    }

    public function setTryAgainFlash() {
    	$this->setFlashMessage(Configure::read('MsgTryAgain'), 'flash_fail');
    }

    public function setFlashSuccess($message) {
    	$this->setFlashMessage($message, 'flash_success');
    }

    public function setFlashFail($message) {
    	$this->setFlashMessage($message, 'flash_fail');
    }

    private function setFlashMessage($message, $type = 'flash_fail') {
		$this->Session->setFlash(__($message), $type, array(), 'auth');
    }
}
