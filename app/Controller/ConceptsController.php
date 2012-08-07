<?php
App::uses('AppController', 'Controller');
/**
 * Concepts Controller
 *
 * @property Concept $Concept
 */
class ConceptsController extends AppController {


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
		$this->Concept->recursive = 0;
		$this->set('concepts', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Concept->id = $id;
		if (!$this->Concept->exists()) {
			throw new NotFoundException(__('Invalid concept'));
		}
		$this->set('concept', $this->Concept->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Concept->create();
			if ($this->Concept->save($this->request->data)) {
				$this->setFlashSuccess('concept registrado correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->setTryAgainFlash();
			}
		}
		$infractions = $this->Concept->Infraction->find('list');
		$this->set(compact('infractions'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Concept->id = $id;
		if (!$this->Concept->exists()) {
			throw new NotFoundException(__('Invalid concept'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Concept->save($this->request->data)) {
				$this->setFlashSuccess('concept registrado correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->setTryAgainFlash();
			}
		} else {
			$this->request->data = $this->Concept->read(null, $id);
		}
		$infractions = $this->Concept->Infraction->find('list');
		$this->set(compact('infractions'));
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
		$this->Concept->id = $id;
		if (!$this->Concept->exists()) {
			throw new NotFoundException(__('Invalid concept'));
		}
		if ($this->Concept->delete()) {
			$this->setFlashSuccess('Concept eliminado correctamente');
			$this->redirect(array('action' => 'index'));
		}
		$this->setFlashFail('Concept no fue eliminado');
		$this->redirect(array('action' => 'index'));
	}
}
