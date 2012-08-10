<?php
App::uses('AppModel', 'Model');
/**
 * Concept Model
 *
 * @property Infraction $Infraction
 */
class Concept extends AppModel {
/**
 * Display field
 *
 * @var string
 */

	public $actsAs = array('Containable');

	public $virtualFields = array("display_name"=>"CONCAT(Concept.concepto, ' ', 
		Concept.valor, 'SMLV')");
	
	public $displayField = 'display_name';
	
	//public $displayField = 'valor';

	public $validate = array(
		'valor' => array(
        	'required' => array (
	            'rule' => 'notEmpty',
	            'message' => 'Campo requerido'
			),
			'numeric' => array (
	            'rule' => 'numeric',
	            'message' => 'Ingrese un valor numérico'
			)	 
        ),
        'tipo' => array(
        	'required' => array (
	            'rule' => 'notEmpty',
	            'message' => 'Campo requerido'
			),
			'valid' => array (
	            'rule' => array('inList', array('CC', 'NI')),
	            'message' => 'Seleccione un valor válido'
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Infraction' => array(
			'className' => 'Infraction',
			'foreignKey' => 'infraction_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
