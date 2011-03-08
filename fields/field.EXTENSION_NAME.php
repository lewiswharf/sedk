<?php

	if(!defined('__IN_SYMPHONY__')) die('<h2>Symphony Error</h2><p>You cannot directly access this file</p>');

	Class fieldEXTENSION_NAME extends Field{

		public function __construct(&$parent){
			parent::__construct($parent);
			$this->_name = __('EXTENSION_NAME');
			$this->_required = true;

			// Set default
			$this->set('show_column', 'no');
			$this->set('required', 'yes');
		}

		public function canToggle(){
			return true;
		}

		public function getToggleStates(){
		}

		public function toggleFieldData($data, $new_value){
		}

		public function canFilter(){
			return true;
		}

		public function allowDatasourceOutputGrouping(){
			return true;
		}

		public function allowDatasourceParamOutput(){
			return true;
		}

		public function getParameterPoolValue($data){
		}

		public function set($field, $value){
		}

		public function setArray($array){
		}

		public function groupRecords($records){
		}

		public function prepareTableValue($data, XMLElement $link=NULL){
		}

		private function __findPrimaryFieldValueFromRelationID($entry_id){
		}

		public function checkFields(&$errors, $checkForDuplicates = true) {
		}

		public function processRawFieldData($data, &$status, $simulate=false, $entry_id=NULL){
		}

		public function fetchAssociatedEntrySearchValue($data, $field_id=NULL, $parent_entry_id=NULL){
		}

		public function fetchAssociatedEntryCount($value){
		}

		public function fetchAssociatedEntryIDs($value){
		}

		public function appendFormattedElement(&$wrapper, $data, $encode=false){
		}

		public function findFieldIDFromRelationID($id){
		}

		public function findOptions(array $existing_selection=NULL){
		}

		public function displayPublishPanel(&$wrapper, $data=NULL, $flagWithError=NULL, $fieldnamePrefix=NULL, $fieldnamePostfix=NULL){
		}

		public function commit(){
		}

		public function buildSortingSQL(&$joins, &$where, &$sort, $order='ASC'){
		}

		public function buildDSRetrivalSQL($data, &$joins, &$where, $andOperation=false){
		}

		public function findDefaults(&$fields){
		}

		public function displaySettingsPanel(&$wrapper, $errors=NULL){
		}

		public function createTable(){
		}

		public function getExampleFormMarkup(){
		}

	}
