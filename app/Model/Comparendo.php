<?php
App::uses('AppModel', 'Model');
/**
 * Comparendo Model
 *
 * @property Concept $Concept
 * @property Infractor $Infractor
 * @property User $User
 */
class Comparendo extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

	public $actsAs = array('Containable');

	/**
	* Get infraction type for a person
	*/
	public getTipoInfraccion($tipo_documento = null, $numero_documento = null) {
		
	}

	

	public $validate = array(
		'fecha' => array(
        	'required' => array (
	            'rule' => 'notEmpty',
	            'message' => 'Campo requerido'
			),
			'numeric' => array (
	            'rule'       => array('date', 'ymd'),
		        'message'    => 'Ingrese una fecha válida en formato AAAA-MM-DD format.',
			)
        ),
		'hora' => array(
        	'required' => array (
	            'rule' => 'notEmpty',
	            'message' => 'Campo requerido'
			),
			'timeValid' => array (
	            'rule' => 'time',
	            'message' => 'Ingrese una hora válida en formato HH:MM'
			)
        ),
        'lugar' => array(
		    'required' => array(
		        'rule' => 'notEmpty',
		        'required' => 'create',
		        'message' => 'Campo requerido'
			)
		),
        'tipo_sancion' => array(
        	'required' => array (
	            'rule' => 'notEmpty',
	            'message' => 'Campo requerido'
			),
			'valid' => array (
	            'rule' => array('inList', array('CC', 'NI')),
	            'message' => 'Seleccione un valor válido'
			)
        )
    );

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Concept' => array(
			'className' => 'Concept',
			'foreignKey' => 'concept_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Infractor' => array(
			'className' => 'Infractor',
			'foreignKey' => 'infractor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
