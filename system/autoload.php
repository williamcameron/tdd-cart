<?php
	function __autoload($class){
		if(file_exists(dirname(__FILE__)."/models/".strtolower($class).".php")) {
			include dirname(__FILE__)."/models/".strtolower($class).".php";
		} else {
			throw new Exception("Unable to autload: ". $class);
		}
	}