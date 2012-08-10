<?php
App::uses('AppModel', 'Model');
/**
 * Infractor Model
 *
 * @property Comparendo $Comparendo
 */
class Infractor extends AppModel {

	public $virtualFields = array("full_name"=>"CONCAT(Infractor.tipo_documento, ' ', Infractor.numero_documento)");
	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'full_name';
	
	public $actsAs = array('Containable');

	/**
	* Get infractor id
	*/
	public function getInfractorId($tipo_documento, $numero_documento) 
	{
		if ($tipo_documento == null || $numero_documento == null) 
		{
			throw new CakeException(__('Null arguments'));
		}

		$infractor_id = $this->find('first', array(
			'conditions' => array(
				'Infractor.tipo_documento' => $tipo_documento,
				'Infractor.numero_documento' => $numero_documento
				), //array of conditions
		    'recursive' => -1, //int
		    'fields' => array('Infractor.id') //array of field names
		));

		if ($infractor_id) 
		{
			return $infractor_id['Infractor']['id'];
		}

		return false;
	}

	public $validate = array(
		'tipo_documento' => array(
        	'required' => array (
	            'rule' => 'notEmpty',
	            'message' => 'Campo requerido'
			)
        ),
		'numero_documento' => array(
        	'required' => array (
	            'rule' => 'notEmpty',
	            'message' => 'Campo requerido'
			),
			'unique' => array (
				'rule' => 'isUnique',
	            'message' => 'El número de documento ya se encuentra registrado'
			)
        ),
        'nombre_razon_social' => array(
        	'required' => array (
	            'rule' => 'notEmpty',
	            'message' => 'Campo requerido'
			)	 
        ),
        'email' => array(
			'unique' => array (
				'rule' => 'isUnique',
	            'message' => 'El email ya se encuentra registrado'
			),
			'validEmail' => array (
				'rule' => 'email',
	            'message' => 'Ingrese un email válido',
	            'required' => false,
	            'allowEmpty' => true
			)
        )
    );   

   	public function beforeSave() {
   		parent::beforeSave();
	    $this->data['Infractor']['nombre_razon_social'] = strtoupper($this->data['Infractor']['nombre_razon_social']);
	    return true;
	} 

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Comparendo' => array(
			'className' => 'Comparendo',
			'foreignKey' => 'infractor_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
