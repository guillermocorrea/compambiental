<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

	public function beforeFilter()
	{
		parent::beforeFilter();
	}

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this->isAdmin();
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	/**
	 * view method
	 *
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this->isAdmin();
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}
	
	# Action to log the user in
	public function login() {
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            //return $this->redirect( $this->Auth->redirect() );
	            return $this->redirect(array('controller'=>'infractions', 'action'=>'index'));
	        } else {
	            $this->setFlashFail('Nombre de usuario o contraseña incorrectos');
	        }
	    }
	}
	
	public function logout() {
		$this->Auth->logout();
		$this->redirect('/');
	}	

	# Registering the user
	public function register()
	{
		$this->isAdmin();
		if( $this->request->data )
		{
			# Logging the user after register
		    if ( $this->User->save( $this->request->data ) ) 
		    {
		        $id = $this->User->id;

		        $this->request->data['User'] = array_merge($this->request->data["User"], array('id' => $id));

		        $this->Auth->login( $this->request->data['User'] );

		        $this->setFlashSuccess('Usuario creado correctamente');

		        $this->redirect(array('action'=>'index'));
		    }

		    else {
				$this->setTryAgainFlash();
		    }			
		} else {

		}
	
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->isAdmin();
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->setFlashSuccess('Usuario actualizado correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->setTryAgainFlash();
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
	}

	public function profile() {
		$this->User->id = $this->Auth->user('id');
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->setFlashSuccess('Usuario actualizado correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->setTryAgainFlash();
			}
		} else {
			$this->request->data = $this->User->read(null, $this->Auth->user('id'));
			$this->request->data['User']['password'] = '';
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	/*public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->isAdmin();
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->setFlashSuccess('Usuario eliminado');
			$this->redirect(array('action' => 'index'));
		}

		$this->setFlashFail('El usuario no fue eliminado');
		$this->redirect(array('action' => 'index'));
	}*/

}