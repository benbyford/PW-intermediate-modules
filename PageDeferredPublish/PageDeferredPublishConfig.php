<?php

class PageDeferredPublishConfig extends ModuleConfig{

	private $cronArray	= ['every30Seconds',
							'everyMinute',
							'every10Minutes',
							'every15Minutes',
							'every30Minutes',
							'every45Minutes',
							'everyHour',
							'every2Hours',
							'every4Hours',
							'every6Hours',
							'every12Hours',
							'everyDay'];

	// default array for PageDeferredPublish module
	public function getDefaults() {
	    return array(
	      'cron_check' => 'every30Minutes',
		  'pub_after' => '86400'
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

		// get InputfieldSelect module
    	$f = $this->modules->get('InputfieldSelect');
    	$f->attr('name', 'cron_check');
    	$f->label = 'Time to check';
		$f->description = 'Choose a time interval the site will use LazyCron to check whether any pages need publishing.';

		foreach ($this->cronArray as $cronTime) {
			$f->addOption($cronTime);
		}
		// add cron option to inputfields
		$inputfields->add($f);


		// get InputfieldText module
    	$f = $this->modules->get('InputfieldText');
    	$f->attr('name', 'pub_after');
    	$f->label = 'Time till publish';
		$f->description = 'Input time in seconds till a deffered page will be published. e.g. 6hrs = 21600, 24hrs = 86400, 1week = 604800';
		// add textfield to inputfields
		$inputfields->add($f);

		// return module config inputs
	    return $inputfields;
  	}
}
