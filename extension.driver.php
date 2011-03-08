<?php
	
	class Extension_FOLDER_NAME extends Extension {
		
		public function about() {
			return array(
				'name'			=> 'EXTENSION_NAME',
				'version'		=> 'X_X',
				'release-date'	=> 'YYYY_MM_DD',
				'author'		=> array(
					'name'			=> 'AUTHOR_NAME',
					'website'		=> 'AUTHOR_WEBSITE',
					'email'			=> 'AUTHOR_EMAIL'
				)
			);
		}
		
	/*-------------------------------------------------------------------------
		Delegates:
	-------------------------------------------------------------------------*/
		
		public function getSubscribedDelegates() {
			return array(
				array(
					'page'		=> '/FRONTEND_BACKEND/',
					'delegate'	=> 'NAME',
					'callback'	=> 'CALLBACK_FUNCTION'
				)
			);
		}
		
		public function CALLBACK_FUNCTION($context) {

		}
	}
	
?>