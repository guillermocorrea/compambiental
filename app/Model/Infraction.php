<?php
App::uses('AppModel', 'Model');
/**
 * Infraction Model
 *
 * @property Comparendo $Comparendo
 * @property Value $Value
 */
class Infraction extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $unidad = 'SMLV';

	public $format = 'id, codigo, %s';
	
	public function getSentencia() {
		return sprintf($this->format, $this->unidad);
	}

	public $actsAs = array('Containable');

	/*public $virtualFields = array("full_name"=>"CONCAT(id, ' ', codigo, ' ', 'SMLV')");
	
	public $displayField = 'full_name';*/

	//public $virtualFields = array("full_name"=>"CONCAT(codigo, ' - ', SUBSTRING(descripcion, 1, 45))");
	
	//public $displayField = 'full_name';

	public $displayField = 'codigo';

	public $validate = array(
		'codigo' => array(
        	'required' => array (
	            'rule' => 'notEmpty',
	            'message' => 'Campo requerido'
			),
			'unique' => array (
				'rule' => 'isUnique',
	            'message' => 'El codigo ya se encuentra registrado'
			)
        ),
        'descripcion' => array(
        	'required' => array (
	            'rule' => 'notEmpty',
	            'message' => 'Campo requerido'
			)	 
        ),
        'estado' => array(
		    'required' => array(
		        'rule' => 'notEmpty',
		        'required' => 'create',
		        'message' => 'Campo requerido'
			)
		)
    );    

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Comparendo' => array(
			'className' => 'Comparendo',
			'foreignKey' => 'infraction_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Concept' => array(
			'className' => 'Concept',
			'foreignKey' => 'infraction_id',
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
