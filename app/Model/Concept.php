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
	public $displayField = 'valor';

	
	
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
