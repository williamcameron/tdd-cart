<?php
	function my_autoloader($class){
		if(file_exists(dirname(__FILE__)."/models/".strtolower($class).".php")) {
			include dirname(__FILE__)."/models/".strtolower($class).".php";
		} 
	}
	spl_autoload_register('my_autoloader');
