<?php 
/**
* 
*/
class User extends AppModel
{
	public $actsAs = array('Containable');

	public $name = 'User';

	public $validate = array(
        'username' => array(
        	'required' => array (
	            'rule' => 'notEmpty',
	            'message' => 'Ingrese el usuario'
			),
			'unique' => array (
				'rule' => 'isUnique',
	            'message' => 'Ingrese otro nombre de usuario, ya existe uno con el mismo nombre de usuario'
			)	 
        ),
        'password' => array(
		    'required' => array(
		        'rule' => 'notEmpty',
		        'required' => 'create',
		        'message' => 'Ingrese la contraseña'
			)
		)
    );

    
	
    public function beforeSave($options = array()) {
        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        return true;
    }	
}
?>