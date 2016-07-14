<?php

// config class for module RedirectAdminPages
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
	* This class adds config fields our module in the PW admin and is automatically called
	*
	* returns:  $inputfields
	*/

	public function getInputfields() {

		// trigger module getInputfields in parent and save as new object
    	$inputfields = parent::getInputfields();

		// get InputfieldText module
    	$f = $this->modules->get('InputfieldText');
    	$f->attr('name', 'userRoles');
    	$f->label = 'User roles';
		$f->description = 'Add roles to redirect after login. Add each role comma, separated';

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
