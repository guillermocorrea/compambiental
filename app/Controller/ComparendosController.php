<?php
App::uses('AppController', 'Controller');
/**
 * Comparendos Controller
 *
 * @property Comparendo $Comparendo
 */
class ComparendosController extends AppController {


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
		$this->Comparendo->recursive = 0;
		$this->set('comparendos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Comparendo->id = $id;
		if (!$this->Comparendo->exists()) {
			throw new NotFoundException(__('Invalid comparendo'));
		}
		$this->set('comparendo', $this->Comparendo->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Comparendo->create();
			if ($this->Comparendo->save($this->request->data)) {
				$this->setFlashSuccess('comparendo registrado correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->setTryAgainFlash();
			}
		}
		$concepts = $this->Comparendo->Concept->find('list');
		$infractors = $this->Comparendo->Infractor->find('list');
		$users = $this->Comparendo->User->find('list');
		$this->set(compact('concepts', 'infractors', 'users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Comparendo->id = $id;
		if (!$this->Comparendo->exists()) {
			throw new NotFoundException(__('Invalid comparendo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Comparendo->save($this->request->data)) {
				$this->setFlashSuccess('comparendo registrado correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->setTryAgainFlash();
			}
		} else {
			$this->request->data = $this->Comparendo->read(null, $id);
		}
		$concepts = $this->Comparendo->Concept->find('list');
		$infractors = $this->Comparendo->Infractor->find('list');
		$users = $this->Comparendo->User->find('list');
		$this->set(compact('concepts', 'infractors', 'users'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Comparendo->id = $id;
		if (!$this->Comparendo->exists()) {
			throw new NotFoundException(__('Invalid comparendo'));
		}
		if ($this->Comparendo->delete()) {
			$this->setFlashSuccess('Comparendo eliminado correctamente');
			$this->redirect(array('action' => 'index'));
		}
		$this->setFlashFail('Comparendo no fue eliminado');
		$this->redirect(array('action' => 'index'));
	}
}
