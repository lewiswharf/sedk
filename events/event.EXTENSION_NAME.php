<?php

Class eventEXTENSION_FILE_NAME extends Event {		

public $dsParamROOTELEMENT = 'EXTENSION_XML_NAME';
	
	public function __construct(&$parent, $env = null) {
		parent::__construct($parent, $env);
	}
	
	public static function about()
	{								
		return array(
					 'name' => 'EXTENSION_NAME',
					 'author' => array('name' => 'AUTHOR_NAME',
									   'website' => 'AUTHOR_WEBSITE',
									   'email' => 'AUTHOR_EMAIL'),
					 'version' => 'X_X',
					 'release-date' => 'YYYY_MM_DD'
					 );						 
	}
			
	public function load() {	
	}

	public static function documentation() {
		return new XMLElement('p', 'DESCRIPTION');
	}
	
	protected function __trigger() {		
		$result = new XMLElement($this->dsParamROOTELEMENT);
		
		// code here
		
		return $result;
	}		
}

?>