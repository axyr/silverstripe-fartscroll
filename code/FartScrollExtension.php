<?php

class FartScrollExtension extends Extension {
	
	function onAfterInit() {		
		if(in_array(Director::get_environment_type(), Config::inst()->get('FartScrollExtension', 'environmentTypes'))) {
			Requirements::javascript('http://code.onion.com/fartscroll.js');
			Requirements::customScript('fartscroll('.Config::inst()->get('FartScrollExtension', 'speed').');','Fart');
		}
	}
}