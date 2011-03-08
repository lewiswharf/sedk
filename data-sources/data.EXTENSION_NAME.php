<?php

require_once(TOOLKIT . '/class.datasource.php');

Class datasourceEXTENSION_FILE_NAME extends Datasource {

    public $dsParamROOTELEMENT = 'EXTENSION_XML_NAME';

    public function about(){
        return array(
                 'name' => 'EXTENSION_NAMER',
                 'author' => array(
                        'name' => 'AUTHOR_NAME',
                        'email' => 'AUTHOR_EMAIL'),
                );
    }

    public function getSource(){
        return '1';
    }

    public function grab(&$param_pool){
        $result = new XMLElement($this->dsParamROOTELEMENT);

        // build XML here

        return $result;
    }
}

?>