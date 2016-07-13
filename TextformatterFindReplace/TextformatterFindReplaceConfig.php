<?php

class TextformatterFindReplaceConfig extends ModuleConfig{

	// default array for RedirectAdminPages module with role and page redirect
	public function getDefaults() {

	    return array(
	      'findStr' => '----',
	      'replaceStr' => '<b>REPLACED TEXT</b>',
	    );

	}

	/*
	* getInputfields()
	*
	* return:  $inputfields
	*/

	// create form within PW admin to enable configuration of module
	public function getInputfields() {

		// get module getInputfields set config class
    	$inputfields = parent::getInputfields();

		// get InputfieldText module
    	$f = $this->modules->get('InputfieldText');
    	$f->attr('name', 'findStr');
    	$f->label = 'Find in text';
		$f->description = 'Add a word or pattern to find and replace within your text.';

		// add User role input to form config
		$inputfields->add($f);


		// get new InputfieldText module
		$f = $this->modules->get('InputfieldText');
	    $f->attr('name', 'replaceStr');
	    $f->label = 'Replace text';
		$f->description = 'text to show on the front end.';

		// add Page redirect input to form config
	    $inputfields->add($f);

		// return module config inputs
	    return $inputfields;
  	}
}
