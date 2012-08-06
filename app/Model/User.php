<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Comparendo $Comparendo
 */
class User extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'numero_documento';

	public $actsAs = array('Containable');

	public $validate = array(
        'primer_apellido' => array(
		    'required' => array(
		        'rule' => 'notEmpty',
		        'required' => 'create',
		        'message' => 'Campo requerido'
			)
		),        
        'primer_nombre' => array(
		    'required' => array(
		        'rule' => 'notEmpty',
		        'required' => 'create',
		        'message' => 'Campo requerido'
			)
		),
		'email' => array(
        	'required' => array (
	            'rule' => 'notEmpty',
	            'message' => 'Campo requerido'
			),
			'unique' => array (
				'rule' => 'isUnique',
	            'message' => 'El email ya se encuentra registrado'
			),
			'validEmail' => array (
				'rule' => 'email',
	            'message' => 'Ingrese un email válido'
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
        'password' => array(
		    'required' => array(
		        'rule' => 'notEmpty',
		        'required' => 'create',
		        'message' => 'Campo requerido'
			)
		),
		'rol' => array(
		    'required' => array(
		        'rule' => 'notEmpty',
		        'required' => 'create',
		        'message' => 'Campo requerido'
			)
		)
    );    
	
    public function beforeSave($options = array()) {
        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        return true;
    }


/**
 * hasMany associations
 *
 * @var array
 */
	/*public $hasMany = array(
		'Comparendo' => array(
			'className' => 'Comparendo',
			'foreignKey' => 'user_id',
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
	);*/

}
