<?php
App::uses('AppController', 'Controller');
/**
 * Infractions Controller
 *
 * @property Infraction $Infraction
 */
class InfractionsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Infraction->recursive = 0;
		$this->set('infractions', $this->paginate());
		debug($this->Infraction->formato);
		debug($this->Infraction->sentencia);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Infraction->id = $id;
		if (!$this->Infraction->exists()) {
			throw new NotFoundException(__('Invalid infraction'));
		}
		$this->set('infraction', $this->Infraction->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Infraction->create();
			if ($this->Infraction->save($this->request->data)) {
				$this->setFlashSuccess('Infracción registrada correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->setTryAgainFlash();
			}
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
		$this->Infraction->id = $id;
		if (!$this->Infraction->exists()) {
			throw new NotFoundException(__('Invalid infraction'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Infraction->save($this->request->data)) {
				$this->setFlashSuccess('Infracción actualizada correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->setTryAgainFlash();
			}
		} else {
			$this->request->data = $this->Infraction->read(null, $id);
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
		$this->Infraction->id = $id;
		if (!$this->Infraction->exists()) {
			throw new NotFoundException(__('Invalid infraction'));
		}
		if ($this->Infraction->delete()) {
			$this->setFlashSuccess('Infraction eliminado correctamente');
			$this->redirect(array('action' => 'index'));
		}
		$this->setFlashFail('Infraction no fue eliminado');
		$this->redirect(array('action' => 'index'));
	}*/
}
