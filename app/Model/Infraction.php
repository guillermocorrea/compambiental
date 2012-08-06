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
	public $displayField = 'codigo';

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
		'Value' => array(
			'className' => 'Value',
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
