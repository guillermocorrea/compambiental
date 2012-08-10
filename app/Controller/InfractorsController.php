<?php
App::uses('AppController', 'Controller');
/**
 * Infractors Controller
 *
 * @property Infractor $Infractor
 */
class InfractorsController extends AppController {

	public $paginate = array(
        'limit' => 10,
        'order' => array(
            'Infractor.id' => 'asc'
        ),
        'conditions' => array(
        	'Infractor.estado'=>1
        )
    );

	public function beforeFilter()
	{
		parent::beforeFilter();
	}

	public function get_infractors(){
      	$this->autoRender = false;
        if ($this->request->is('ajax')) {        	
        	CakeLog::write('ajax', $this->request->data['numero_documento'] . " tipo_persona: " . $this->request->data['tipo_persona']);
            $results = $this->Infractor->find('all', array(
                'conditions'=>array(
                	'Infractor.numero_documento' => $this->request->data['numero_documento'],
                	'Infractor.tipo_documento' => $this->request->data['tipo_persona']
                ),
                'fields' => array('id','nombre_razon_social','telefono','direccion','email'),
                'recursive'=>-1, 
            ));
            
            return json_encode($results);
        }
        return;
    }

    public function test() 
    {
    	debug($this->Infractor->getInfractorId('CC', 28715999));
    	exit;
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Infractor->recursive = 0;
		$this->set('infractors', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Infractor->id = $id;
		if (!$this->Infractor->exists()) {
			throw new NotFoundException(__('Invalid infractor'));
		}
		$this->set('infractor', $this->Infractor->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Infractor->create();
			$this->request->data['Infractor']['estado'] = parent::$estadoActivo;
			if ($this->Infractor->save($this->request->data)) {
				$this->setFlashSuccess('Infractor registrado correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->setTryAgainFlash();
			}
		}
	}

	public function delete($id = null) {
		//$this->isAdmin();
		$this->Infractor->id = $id;
		if (!$this->Infractor->exists()) {
			throw new NotFoundException(__('Invalid infraction'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if($this->Infractor->saveField('estado', parent::$estadoInactivo)) {
				$this->setFlashSuccess('Persona eliminada correctamente');
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
		$this->Infractor->id = $id;
		if (!$this->Infractor->exists()) {
			throw new NotFoundException(__('Invalid infractor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Infractor->save($this->request->data)) {
				$this->setFlashSuccess('Infractor actualizado correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->setTryAgainFlash();
			}
		} else {
			$this->Infractor->contain(
				/*array(
					'Concept'=>array(
						'fields'=>array('id','concepto','valor', 'tipo', 'estado'),
						'order' => 'Concept.tipo ASC',
						'conditions' => array('Concept.estado' => 1)
					)
				)*/
			);
			$this->request->data = $this->Infractor->read(null, $id);
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
		$this->Infractor->id = $id;
		if (!$this->Infractor->exists()) {
			throw new NotFoundException(__('Invalid infractor'));
		}
		if ($this->Infractor->delete()) {
			$this->setFlashSuccess('Infractor eliminado correctamente');
			$this->redirect(array('action' => 'index'));
		}
		$this->setFlashFail('Infractor no fue eliminado');
		$this->redirect(array('action' => 'index'));
	}*/
}
