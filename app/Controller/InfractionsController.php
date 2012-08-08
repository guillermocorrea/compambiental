<?php
App::uses('AppController', 'Controller');
/**
 * Infractions Controller
 *
 * @property Infraction $Infraction
 */
class InfractionsController extends AppController {
	public $helpers = array('Form', 'Site');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Infraction->recursive = 0;
		$this->set('infractions', $this->paginate());
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
		$this->Infraction->contain('Concept');
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
				$this->redirect(array('action' => 'view', $this->Infraction->id));
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
			unset($this->request->data['save']);
			if ($this->Infraction->saveAssociated($this->request->data)) {
				$this->setFlashSuccess('Datos actualizados correctamente');
				$this->redirect(array('action' => 'edit', $id));
			} else {
				$this->setTryAgainFlash();
			}
		} else {
			$this->Infraction->contain(
				array(
					'Concept'=>array(
						'fields'=>array('id','concepto','valor', 'tipo', 'estado'),
						'order' => 'Concept.tipo ASC',
						'conditions' => array('Concept.estado' => 1)
						)
					)
				);
			$last_value_id = $this->Infraction->Concept->find('first', 
				array(
					'contain'=>array(),
					'fields'=>array('Concept.id'),
					'order'=>'Concept.id DESC'
				)
			);
			debug($last_value_id);
			$this->request->data = $this->Infraction->read(null, $id);
		}
	}

/*public function deleteconcept($concept_id, $infraction_id) {
	$this->isAdmin();
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}
	$this->Infraction->Concept->id = $concept_id;
	if (!$this->Infraction->Concept->exists()) {
		throw new NotFoundException(__('Valor invalido'));
	}
	if ($this->Infraction->Concept->delete()) {
		$this->setFlashSuccess('Valor eliminado correctamente');
		$this->redirect(array('action' => 'edit', $infraction_id));
	}
	$this->setFlashFail('Valor no fue eliminado');
	$this->redirect(array('action' => 'edit', $infraction_id));
}*/

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
