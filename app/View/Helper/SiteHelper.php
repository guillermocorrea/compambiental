<?php
/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Helper
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Helper', 'View');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class SiteHelper extends FormHelper {

	public function generateRelatedConceptsInputs($concepts) {
		if (empty($concepts)){
			return;
		}		
				$i=0;
		$out = "";

		foreach ($this->request->data['Concept'] as $item) {	
			/*$out .= "<fieldset>
			<legend>Valor Configurado ".($i+1)." </legend>
			<div class='form-inline'>
				<input name='data[Concept][".$i."][id]' type='hidden' value='".$item['id']."' id='Concept".$i."Id'>
				<input name='data[Concept][".$i."][infraction_id]' type='hidden' value='".$item['infraction_id']."' id='Concept".$i."InfractionId'>
				".$this->input('Concept.'.$i.'.tipo',array('type'=>'select', 'selected'=>$item['tipo'], 'options'=>Configure::read('TipoPersona'), 'label'=>false, 'class'=>'input-small', 'div'=>false))."
				<div class='input-append'>
				  <label for='Concept".$i."Valor'><strong>Valor</strong></label>
				  <input name='data[Concept][".$i."][valor]' class='input-small' type='text' value='".$item['valor']."' id='Concept".$i."Valor'><span class='add-on'>SMLV</span>
				 </div>
			  <label for='Concept".$i."Concepto'>Concepto</label>
			  <input name='data[Concept][".$i."][concepto]' class='input-large' type='text' value='".$item['concepto']."' id='Concept".$i."Concepto'>
			  <div class='checkbox input-append'>
			  ".$this->input('Concept.'.$i.'.estado',array('label' => 'Activo', 'div'=>false))."</div>";

			$i++;
			$out.="<div class='margin_bottom_20'></div></div>";
			$out.="</fieldset>";	*/
			$out .= $this->generateConceptInput($i, $item, null);
			$i++;
		}
		return $out;
	}

	public function generateConceptInput($i, $item = null, $infraction_id) {
		$legend = "<legend>Valor Configurado ".($i+1)." </legend>";
		$hidden_id = "<input name='data[Concept][".$i."][id]' type='hidden' value='".$item['id']."' id='Concept".$i."Id'>";
		if ($item == null) {
			$item = array(
				'id'=>'',
				'tipo'=>'',
				'valor'=>'',
				'concepto'=>'',
				'infraction_id'=>$infraction_id
			);
			$legend = "<legend>Registrar nuevo valor</legend>";
			$hidden_id = "";
		}
		$out = "<fieldset>".$legend."
			<div class='form-inline'>".$hidden_id."				
				<input name='data[Concept][".$i."][infraction_id]' type='hidden' value='".$item['infraction_id']."' id='Concept".$i."InfractionId'>
				".$this->input('Concept.'.$i.'.tipo',array('type'=>'select', 'selected'=>$item['tipo'], 'options'=>Configure::read('TipoPersona'), 'label'=>false, 'class'=>'input-small', 'div'=>false))."
				<div class='input-append'>
				  <label for='Concept".$i."Valor'><strong>Valor</strong></label>
				  <input name='data[Concept][".$i."][valor]' class='input-small valid-required' type='text' value='".$item['valor']."' id='Concept".$i."Valor'><span class='add-on'>SMLV</span>
				 </div>
			  <label for='Concept".$i."Concepto'>Concepto</label>
			  <input name='data[Concept][".$i."][concepto]' class='input-large' type='text' value='".$item['concepto']."' id='Concept".$i."Concepto'>
			  ";
		if ($infraction_id == null) {
			$out .="<div class='checkbox input-append'>
			  "
			  //.$this->input('Concept.'.$i.'.estado',array('value'=>'1', 'label' => 'Activo', 'div'=>false))."</div>";
			  ."<label for='Concept".$i."Estado'>Activo</label>"
			.$this->checkbox('Concept.'.$i.'.estado',array('checked'=>'checked', 'value'=>1, 'div'=>false))
			."</div";
		} else {
			$out .= "<input type='hidden' name='data[Concept][".$i."][estado]' id='Concept".$i."Activo' value='1'>";
		}
		
		$out.="<div class='margin_bottom_20'></div></div>";
		$out.="</fieldset>";	
		return $out;
	}
}
