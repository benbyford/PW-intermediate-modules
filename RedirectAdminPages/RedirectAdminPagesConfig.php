<?php

class RedirectAdminPagesConfig extends ModuleConfig{

	// default array for RedirectAdminPages module with role and page redirect
	public function getDefaults() {

	    return array(
	      'userRoles' => 'editor',
	      'redirectPage' => '/',
	    );

	}

	/*
	* getInputfields()
	*
	* returns:  $inputfields
	*/

	// create form within PW admin to enable configuration of module
	public function getInputfields() {

		// get module getInputfields set config class
    	$inputfields = parent::getInputfields();

		// get InputfieldText module
    	$f = $this->modules->get('InputfieldText');
    	$f->attr('name', 'userRoles');
    	$f->label = 'User roles';
		$f->description = 'Add roles to redirect after login. Add each role comma separated';

		// add User role input to form config
		$inputfields->add($f);


		// get new InputfieldText module
		$f = $this->modules->get('InputfieldText');
	    $f->attr('name', 'redirectPage');
	    $f->label = 'Page';
		$f->description = 'Page to redirect users to with the matching role. e.g. /custom-landing-page/';

		// add Page redirect input to form config
	    $inputfields->add($f);

		// return module config inputs
	    return $inputfields;
  	}
}
